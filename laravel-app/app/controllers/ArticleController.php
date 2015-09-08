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

    public function create()
    {
        $title = 'Article';
        $this->layout->content = View::make('backend.article.create', compact('title'));
    }

    public function store(){
        $msgs = array();
        $data =  Input::except(array('_token')) ;
        $rule  =  array(
            'title'   => 'required',
        ) ;

        $inputs = Input::all();

        $validator = Validator::make($data,$rule);

        if ($validator->passes()) {
            if (Input::has('submit')) {
                $data = array(
                                "title"=>$inputs['title'],
                                "image"=>$inputs['image'],
                                "description"=>$inputs['description'],
                                "status"=>$inputs['status'],
                                "type"=>$inputs['type'],
                              );

                $article = Article::create($data);
                if($article){
                    $msg = array('type'=>'success','msg'=>'create success!');
                    array_push($msgs,$msg);
                    return Redirect::to('backend/article')
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

    public function detail($id)
    {
        $article = Article::find($id);
        if(empty($article)){
            $msgs = array();
            $msg = array('type'=>'error','msg'=>'Invalide url!');
            array_push($msgs,$msg);
            return Redirect::to('backend/article')
                ->with('msgs', $msgs);
        }
        $this->layout->content = View::make('backend.article.detail', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::find($id);
        if(empty($article)){
            $msgs = array();
            $msg = array('type'=>'error','msg'=>'Invalide url!');
            array_push($msgs,$msg);
            return Redirect::to('backend/article')
                ->with('msgs', $msgs);
        }
        $this->layout->content = View::make('backend.article.edit', compact('article'));
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