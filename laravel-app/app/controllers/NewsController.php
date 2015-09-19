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
        if(Input::has('title')){
            $db->where('title', 'LIKE', "%".$inputs['title']."%");
        }
        $items = $db->paginate(2)->appends($inputs);

		$this->layout->content = View::make('news.index', compact('items'));
	}

    public function detail($id)
    {
        $item = Article::where('status','approve')->where('slug',$id)->first();

        if($item == null){
            $msgs = array();
            $msg = array('type' => 'error', 'msg' => 'This news is not found');
            array_push($msgs, $msg);
            return Redirect::to('/latest-news')->with('msgs', $msgs);
        }

        $items = Article::where('status','approve')->where('type','news')->limit(15)->get();

        $this->layout->content = View::make('news.detail', compact('item','items'));
    }

}
