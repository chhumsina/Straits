<?php

class AboutUsController extends \BaseController {

	/**
	 * The layout that should be used for responses.
	 */
	protected $layout = 'layouts.backend';

	public function index()
	{
        $article = Article::orderBy('created_at','DESC')->whereIn('type',array('about_content'))->first();

        $db = Article::orderBy('created_at','DESC')->whereIn('type',array('about_us'));
		$inputs = Input::all();

		if (Input::has('title')) {
			$db->where('title', 'LIKE', "%".$inputs['title']."%");
		}
        if (Input::has('type')) {
            $db->where('type',$inputs['type']);
        }
        if (Input::has('status')) {
            $db->where('status',$inputs['status']);
        }

		$n = 10;
		$articles = $db->paginate($n)->appends($inputs);
        $title = 'About Us';
		$this->layout->content = View::make('backend.about-us.index', compact('articles','article','title'));
	}

    public function create()
    {
        $title = 'About Us';
        $this->layout->content = View::make('backend.about-us.create', compact('title'));
    }

    public function store(){
        $msgs = array();
        $data =  Input::except(array('_token')) ;
        $rule  =  array(
            'title'   => 'required',
        ) ;

        $inputs = Input::all();
        $imagename = '';
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $destinationPath = public_path() . '/assets/images/upload/';
            $millisecond = round(microtime(true) * 1000);
            $imagename = strtolower($millisecond . '_' . str_random(2) . '_' . $file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $imagename);
        }
        $validator = Validator::make($data,$rule);

        if ($validator->passes()) {
            if (Input::has('submit')) {
                $slug = $this->slugify($inputs['title']);
                $data = array(
                    "title"=>$inputs['title'],
                    "image"=>$imagename,
                    "description"=>$inputs['description'],
                    "status"=>$inputs['status'],
                    "type"=>$inputs['type'],
                    "slug"=>$slug,
                );

                $article = Article::create($data);
                if($article){
                    $msg = array('type'=>'success','msg'=>'create successfully!');
                    array_push($msgs,$msg);
                    return Redirect::to('backend/about-us')
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
        $db = Article::where('id', $id)->delete();
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

        $this->layout->content = View::make('backend.member.edit', compact('member'));
    }

    public function detail($id)
    {
        $article = Article::find($id);
        if(empty($article)){
            $msgs = array();
            $msg = array('type'=>'error','msg'=>'Invalide url!');
            array_push($msgs,$msg);
            return Redirect::to('backend/about-us')
                ->with('msgs', $msgs);
        }
        $this->layout->content = View::make('backend.about-us.detail', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::find($id);
        if(empty($article)){
            $msgs = array();
            $msg = array('type'=>'error','msg'=>'Invalide url!');
            array_push($msgs,$msg);
            return Redirect::to('backend/about-us')
                ->with('msgs', $msgs);
        }
        $title = 'Edit';
        $this->layout->content = View::make('backend.about-us.edit', compact('article','title'));
    }

    public function update(){
        $msgs = array();
        $data =  Input::except(array('_token')) ;
        $rules  =  array(
            'title'   => 'required',
            'description'   => 'required',
        ) ;

        $inputs = Input::all();
        $imagename = '';
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $destinationPath = public_path() . '/assets/images/upload/';
            $millisecond = round(microtime(true) * 1000);
            $imagename = strtolower($millisecond . '_' . str_random(2) . '_' . $file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $imagename);
        }

        $validation = Validator::make($inputs, $rules);

        if ($validation->passes()) {
            if (Input::has('submit')) {
                $slug = $this->slugify($inputs['title']);
                $article = Article::find($inputs['id']);
                $article->title = Input::get('title');
                $article->slug = $slug;
                if (Input::hasFile('image')) {
                    $article->image = $imagename;
                }
                $article->description = Input::get('description');
                $article->status = Input::get('status');
                $article->type = Input::get('type');
                $article->save();

                if($article){
                    $msg = array('type'=>'success','msg'=>'update success!');
                    array_push($msgs,$msg);
                    return Redirect::to('backend/about-us')
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