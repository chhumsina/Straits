<?php

class OtherController extends \BaseController {

	/**
	 * The layout that should be used for responses.
	 */
	protected $layout = 'layouts.backend';

	public function index()
	{
        $article = Other::first();
        $title = 'Other';
		$this->layout->content = View::make('backend.other.edit', compact('title','article'));
	}

    public function edit(){
        $msgs = array();
        $data =  Input::except(array('_token')) ;
        $rules  =  array(
        ) ;

        $inputs = Input::all();
        $imagename = '';
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $destinationPath = public_path() . '/assets/images/banner/';
            $millisecond = round(microtime(true) * 1000);
            $imagename = strtolower($millisecond . '_' . str_random(2) . '_' . $file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $imagename);
        }

        $validation = Validator::make($inputs, $rules);

        if ($validation->passes()) {
            if (Input::has('submit')) {
                $article = Other::find(1);
                if (Input::hasFile('image')) {
                    $article->image = $imagename;
                }
                $article->welcome = $inputs['welcome'];
                $article->contact = $inputs['description'];
                $article->footer = $inputs['footer'];
                $article->save();

                if($article){
                    $msg = array('type'=>'success','msg'=>'update success!');
                    array_push($msgs,$msg);
                    return Redirect::to('backend/other')
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