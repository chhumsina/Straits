<?php

class HomeContactUsController extends \BaseController {
	/*
	 * The layout that should be used for responses.
	 */
	protected $layout = 'layouts.master';
	
	/**
	 * Display home page
	 */
	public function index()
	{
        $inputs = Input::all();
        $article = Other::first();
		$this->layout->content = View::make('contact-us.index', compact('article'));
	}

    public function detail($id)
    {
        $item = Article::where('status','approve')->where('slug',$id)->first();
        if($item == null){
            $msgs = array();
            $msg = array('type' => 'error', 'msg' => 'This about us is not found');
            array_push($msgs, $msg);
            return Redirect::to('/about-us')->with('msgs', $msgs);
        }
        $items = Article::where('status','approve')->where('type','about_us')->limit(15)->get();

        $this->layout->content = View::make('about-us.detail', compact('item','items'));
    }

}
