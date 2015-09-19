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
Route::get('map', 'HomeController@map');
Route::get('team-profile', 'HomeController@teamProfile');

Route::get('latest-news', 'NewsController@index');
Route::post('latest-news', 'NewsController@index');
Route::get('latest-news/detail/{id}', 'NewsController@detail');


Route::get('service', 'HomeServiceController@index');
Route::post('service', 'HomeServiceController@index');
Route::get('service/detail/{id}', 'HomeServiceController@detail');

Route::get('about-us/detail/{id}', 'HomeAboutUsController@detail');
Route::get('about-us', 'HomeAboutUsController@index');
Route::post('about-us', 'HomeAboutUsController@index');

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

	Route::get('backend/news', 'ArticleController@index');
	Route::post('backend/news', 'ArticleController@index');
    Route::get('backend/news/create', 'ArticleController@create');
    Route::post('backend/news/store', 'ArticleController@store');
    Route::get('backend/news/edit/{id}', 'ArticleController@edit');
    Route::get('backend/news/delete/{id}', 'ArticleController@delete');
    Route::get('backend/news/detail/{id}', 'ArticleController@detail');
    Route::post('backend/news/edit', 'ArticleController@update');

    Route::get('backend/about-us', 'AboutUsController@index');
    Route::post('backend/about-us', 'AboutUsController@index');
    Route::get('backend/about-us/create', 'AboutUsController@create');
    Route::post('backend/about-us/store', 'AboutUsController@store');
    Route::get('backend/about-us/edit/{id}', 'AboutUsController@edit');
    Route::get('backend/about-us/delete/{id}', 'AboutUsController@delete');
    Route::get('backend/about-us/detail/{id}', 'AboutUsController@detail');
    Route::post('backend/about-us/edit', 'AboutUsController@update');

    Route::get('backend/service', 'ServiceController@index');
    Route::post('backend/service', 'ServiceController@index');
    Route::get('backend/service/create', 'ServiceController@create');
    Route::post('backend/service/store', 'ServiceController@store');
    Route::get('backend/service/edit/{id}', 'ServiceController@edit');
    Route::get('backend/service/delete/{id}', 'ServiceController@delete');
    Route::get('backend/service/detail/{id}', 'ServiceController@detail');
    Route::post('backend/service/edit', 'ServiceController@update');

    Route::get('backend/team-profile', 'TeamProfileController@index');
    Route::post('backend/team-profile', 'TeamProfileController@index');
    Route::get('backend/team-profile/create', 'TeamProfileController@create');
    Route::post('backend/team-profile/store', 'TeamProfileController@store');
    Route::get('backend/team-profile/edit/{id}', 'TeamProfileController@edit');
    Route::get('backend/team-profile/delete/{id}', 'TeamProfileController@delete');
    Route::get('backend/team-profile/detail/{id}', 'TeamProfileController@detail');
    Route::post('backend/team-profile/edit', 'TeamProfileController@update');


    Route::resource('article', 'ArticleController');
	Route::when('article*', 'article');

    // Category Management
    Route::get('backend/category/list', 'CategoryMgController@index');
    Route::post('backend/category/list', 'CategoryMgController@index');
    Route::resource('backend/category', 'CategoryMgController');

});
Route::controller('sys-automates', 'SysAutomateReportController');

?>