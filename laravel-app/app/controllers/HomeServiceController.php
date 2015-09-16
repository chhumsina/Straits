<?php

class HomeServiceController extends \BaseController {
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
        $db = Article::orderBy('created_at', 'DESC')->where('status','approve')->whereIn('type',array('shipping_agency','freight_forwarding','other_services'));
        if(Input::has('title')){
            $db->where('title', 'LIKE', "%".$inputs['title']."%");
        }
        $items = $db->paginate(2)->appends($inputs);

		$this->layout->content = View::make('service.index', compact('items'));
	}

    public function detail($id)
    {
        $item = Article::where('status','approve')->where('id',$id)->first();
        $items = Article::where('status','approve')->whereIn('type',array('shipping_agency','freight_forwarding','other_services'))->limit(15)->get();

        $this->layout->content = View::make('service.detail', compact('item','items'));
    }

}
