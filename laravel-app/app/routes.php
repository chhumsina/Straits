<?php

/*
 |--------------------------------------------------------------------------
 | Application Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register all of the routes for an application.
 | It's a breeze. Simply tell Laravel the URIs it should respond to
 | and give it the Closure to execute when that URI is requested.
 |
 */

/*Route::get('/', function()
 {
 return View::make('hello');
 });*/

Route::get('backend', array('before' => 'guest', function() {

	return View::make('straits_admin');
}));

Route::get('/', 'HomeController@index');
Route::get('latest-news', 'NewsController@index');
Route::get('latest-news/detail/{id}', 'NewsController@detail');
Route::get('feature/{id}', 'HomeController@feature');

// Admin login
Route::post('straits_admin', 'OhadminController@validate');

// Member register
Route::get('register', 'AccountController@register');
Route::post('register', 'AccountController@store');
Route::get('register/activate/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'AccountController@confirm'
]);

Route::get('login', 'AccountController@login');
Route::post('login', 'AccountController@validate');

Route::get('forget_password', 'AccountController@forgetPassword');
Route::post('forget_password', 'AccountController@validateForgetPassword');
Route::get('recovery/password/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'AccountController@forgetPasswordConfirm'
]);


Route::get('straits_admin', array('before' => 'straits_admin', function() {
	return View::make('login');
}));

// logout route
Route::get('logout', array('before' => 'auth', function() {
	Auth::logout();
	return Redirect::to('/') -> with('flash_notice', 'You are successfully logged out.');
}));

//Route::resource('announcements', 'AnnouncementController');
Route::group(array('before' => 'auth'), function() {
    // member
    Route::get('member/manage_ads', 'AccountController@manageAds');
    Route::get('member/my_profile', 'AccountController@myProfile');
    Route::post('member/my_profile', 'AccountController@update');
    Route::post('member/change_password', 'AccountController@changePassword');
    Route::get('member/page', 'AccountController@page');
    Route::get('member/my_map', 'AccountController@myMap');

    // backend
	Route::get('backend', 'BackendController@dashboard');

	Route::get('backend/article', 'ArticleController@index');
	Route::post('backend/article', 'ArticleController@index');

    Route::get('backend/article/create', 'ArticleController@create');
    Route::post('backend/article/store', 'ArticleController@store');
    Route::get('backend/article/edit/{id}', 'ArticleController@edit');
    Route::get('backend/article/delete/{id}', 'ArticleController@delete');
    Route::get('backend/article/detail/{id}', 'ArticleController@detail');
    Route::post('backend/article/edit', 'ArticleController@update');


	Route::resource('article', 'ArticleController');
	Route::when('article*', 'article');

    // Category Management
    Route::get('backend/category/list', 'CategoryMgController@index');
    Route::post('backend/category/list', 'CategoryMgController@index');
    Route::resource('backend/category', 'CategoryMgController');

});
Route::controller('sys-automates', 'SysAutomateReportController');

?>