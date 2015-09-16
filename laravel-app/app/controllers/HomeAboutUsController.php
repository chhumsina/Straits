<?php

class HomeAboutUsController extends \BaseController {
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
        $db = Article::orderBy('created_at', 'DESC')->where('status','approve')->where('type','about_us');
        if(Input::has('title')){
            $db->where('title', 'LIKE', "%".$inputs['title']."%");
        }
        $items = $db->paginate(2)->appends($inputs);

		$this->layout->content = View::make('service.index', compact('items'));
	}

    public function detail($id)
    {
        $item = Article::where('status','approve')->where('id',$id)->first();
        $items = Article::where('status','approve')->where('type','about_us')->limit(15)->get();

        $this->layout->content = View::make('about-us.detail', compact('item','items'));
    }

}
