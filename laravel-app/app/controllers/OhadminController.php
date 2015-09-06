<?php

class OhadminController extends \BaseController {
	/*
	 * The layout that should be used for responses.
	 */
	protected $layout = 'layouts.login';
	
	/**
	 * Login Backend page
	 */
	public function login()
	{
		$this->layout->content = View::make('ohadmin.login');
	}

	/*
	 * Validation
	 *
	 * */
	public function validate()
	{
        //dd(Hash::make('admin'));

		// attempt to do the login
		$auth = Auth::attempt(
			array(
				'username'  => strtolower(Input::get('username')),
				'password'  => Input::get('password')
			)
		);

		$sms = 'Your username/password combination was incorrect.';

		$user = Auth::user();

        if ($auth) {
            return Redirect::to('backend');
        }

		// validation not successful, send back to form

        $msgs = array();
        $msg = array('type'=>'error','msg'=>$sms);
        array_push($msgs,$msg);
        return Redirect::to('/straits_admin')
            ->withInput()
            ->with('msgs', $msgs);

	}
}
