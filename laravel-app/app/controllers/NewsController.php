<?php

class NewsController extends \BaseController {
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
        $db = Article::orderBy('created_at', 'DESC')->where('status','approve')->where('type','news');
        $items = $db->paginate(1)->appends($inputs);

		$this->layout->content = View::make('news.index', compact('items'));
	}

    public function detail($id)
    {
        $item = Article::where('status','approve')->where('id',$id)->first();

        $this->layout->content = View::make('news.detail', compact('item'));
    }

}
