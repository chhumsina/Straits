<?php

class ArticleController extends \BaseController {

	/**
	 * The layout that should be used for responses.
	 */
	protected $layout = 'layouts.backend';

	public function index()
	{
        $db = Article::orderBy('created_at','DESC')->where('status','approve');
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

		$n = 15;
		$articles = $db->paginate($n)->appends($inputs);
        $title = 'Article';
		$this->layout->content = View::make('backend.article.index', compact('articles','title'));
	}

    public function delete($id)
    {
        $msgs = array();
        $db = Article::where('id', $id)->delete();
        if($db){
            $msg = array('type'=>'success','msg'=>'Delete success fully');
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

	/**
	 * Store a newly created resource in storage.
	 * POST /customercall
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /customercall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$member = Member::whereUsername($slug)->first();
		$this->layout->content = View::make('backend.member.edit', compact('member'));
	}

	public function update()
	{
		$inputs = Input::all();
		$msgs = array();
		$id = $inputs['id'];
		if(Input::has('active'))
		{
			DB::statement('UPDATE member SET status=0 WHERE status=1;');
			$msg = array('type'=>'success','msg'=>'The account is inactive now!');
			array_push($msgs,$msg);
			return Redirect::back()
				->with('msgs', $msgs);
		}elseif(Input::has('inActive')){
			DB::statement('UPDATE member SET status=1 WHERE status=0;');
			$msg = array('type'=>'success','msg'=>'The account is active now!');
			array_push($msgs,$msg);
			return Redirect::back()
				->with('msgs', $msgs);

		}elseif(Input::has('submit')){
			$nerd = Member::find($id);
			$nerd->email      = Input::get('email');
			$nerd->first_name = Input::get('first_name');
			$nerd->last_name = Input::get('last_name');
			$nerd->location = Input::get('location');
			$nerd->phone = Input::get('phone');
			$nerd->address = Input::get('address');
			$nerd->save();
			$msg = array('type'=>'success','msg'=>'The account is update successfully');
			array_push($msgs,$msg);
			return Redirect::back()
				->with('msgs', $msgs);
		}
		$msg = array('type'=>'error','msg'=>':)');
		array_push($msgs,$msg);
		return Redirect::back()
			->with('msgs', $msgs);
	}
	/**
	 * Remove the specified resource from storage.
	 * DELETE /customercall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}