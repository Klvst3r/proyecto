<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
 * Rou Group
 */
Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
    	return view('web.index');
	});

	Route::get('evento', function (){
		return view('web.evento');
	});
	 
	//Route::auth();
	Route::get("login","Auth\AuthController@getLogin");
	Route::get("logout","Auth\AuthController@logout");
	Route::post("login","Auth\AuthController@postLogin");

	//Route::get('/home', 'HomeController@index');
	//Change home for admin
	Route::get('/admin', 'AdminController@index');
});




