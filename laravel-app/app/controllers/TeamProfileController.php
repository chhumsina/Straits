<?php

class TeamProfileController extends \BaseController {

	/**
	 * The layout that should be used for responses.
	 */
	protected $layout = 'layouts.backend';

	public function index()
	{
        $db = TeamProfile::orderBy('created_at','DESC');
		$inputs = Input::all();

		if (Input::has('name')) {
			$db->where('name', 'LIKE', "%".$inputs['name']."%");
		}
        if (Input::has('status')) {
            $db->where('status',$inputs['status']);
        }

		$n = 15;
		$articles = $db->paginate($n)->appends($inputs);
        $title = 'Team Profile';
		$this->layout->content = View::make('backend.team-profile.index', compact('articles','title'));
	}

    public function create()
    {
        $title = 'Team Profile';
        $this->layout->content = View::make('backend.team-profile.create', compact('title'));
    }

    public function store(){
        $msgs = array();
        $data =  Input::except(array('_token')) ;
        $rule  =  array(
            'name'   => 'required',
        ) ;

        $inputs = Input::all();
        $imagename = '';
        if (Input::hasFile('photo')) {
                $file = Input::file('photo');
            $destinationPath = public_path() . '/assets/images/upload/';
            $millisecond = round(microtime(true) * 1000);
            $imagename = strtolower($millisecond . '_' . str_random(2) . '_' . $file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $imagename);
        }
        $validator = Validator::make($data,$rule);

        if ($validator->passes()) {
            if (Input::has('submit')) {
                $data = array(
                                "name"=>$inputs['name'],
                                "photo"=>$imagename,
                                "description"=>$inputs['description'],
                                "status"=>$inputs['status'],
                                "tel"=>$inputs['tel'],
                                "email"=>$inputs['email'],
                                "position"=>$inputs['position'],
                              );

                $article = TeamProfile::create($data);
                if($article){
                    $msg = array('type'=>'success','msg'=>'create successfully!');
                    array_push($msgs,$msg);
                    return Redirect::to('backend/team-profile')
                        ->with('msgs', $msgs);
                }else{
                    $msg = array('type'=>'error','msg'=>'cannot create!');
                    array_push($msgs,$msg);
                    return Redirect::back()
                        ->with('msgs', $msgs);
                }
            }
        }
        return Redirect::back()
            ->withInput()
            ->withErrors($validator)
            ->with('msgs', $msgs);
    }

    public function delete($id)
    {
        $msgs = array();
        $db = TeamProfile::where('id', $id)->delete();
        if($db){
            $msg = array('type'=>'success','msg'=>'Delete successfully');
            array_push($msgs,$msg);
            return Redirect::back()
                ->with('msgs', $msgs);
        }else{
            $msg = array('type'=>'error','msg'=>'This record cannot delete!');
            array_push($msgs,$msg);
            return Redirect::back()
                ->with('msgs', $msgs);
        }
    }

    public function detail($id)
    {
        $article = TeamProfile::find($id);
        if(empty($article)){
            $msgs = array();
            $msg = array('type'=>'error','msg'=>'Invalide url!');
            array_push($msgs,$msg);
            return Redirect::to('backend/team-profile')
                ->with('msgs', $msgs);
        }
        $this->layout->content = View::make('backend.team-profile.detail', compact('article'));
    }

    public function edit($id)
    {
        $article = TeamProfile::find($id);
        if(empty($article)){
            $msgs = array();
            $msg = array('type'=>'error','msg'=>'Invalide url!');
            array_push($msgs,$msg);
            return Redirect::to('backend/team-profile')
                ->with('msgs', $msgs);
        }
        $title = 'Edit';
        $this->layout->content = View::make('backend.team-profile.edit', compact('article','title'));
    }

    public function update(){
        $msgs = array();
        $data =  Input::except(array('_token')) ;
        $rules  =  array(
            'name'   => 'required',
        ) ;

        $inputs = Input::all();
        $imagename = '';
        if (Input::hasFile('photo')) {
            $file = Input::file('photo');
            $destinationPath = public_path() . '/assets/images/upload/';
            $millisecond = round(microtime(true) * 1000);
            $imagename = strtolower($millisecond . '_' . str_random(2) . '_' . $file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $imagename);
        }

        $validation = Validator::make($inputs, $rules);

        if ($validation->passes()) {
            if (Input::has('submit')) {
                $article = TeamProfile::find($inputs['id']);
                $article->name = Input::get('name');
                if (Input::hasFile('photo')) {
                    $article->photo = $imagename;
                }
                $article->description = Input::get('description');
                $article->status = Input::get('status');
                $article->position = Input::get('position');
                $article->tel = Input::get('tel');
                $article->email = Input::get('email');
                $article->save();

                if($article){
                    $msg = array('type'=>'success','msg'=>'update success!');
                    array_push($msgs,$msg);
                    return Redirect::to('backend/team-profile')
                        ->with('msgs', $msgs);
                }else{
                    $msg = array('type'=>'error','msg'=>'cannot update!');
                    array_push($msgs,$msg);
                    return Redirect::back()
                        ->with('msgs', $msgs);
                }
            }
        }
        return Redirect::back()
            ->withInput()
            ->withErrors($validation)
            ->with('msgs', $msgs);
    }

}