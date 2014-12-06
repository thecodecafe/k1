<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(array('prefix' => "admin"), function() {

	Route::post('login', 'K1\Admin\Controllers\AuthController@authenticate');
	Route::get('login', 'K1\Admin\Controllers\AuthController@showLogin');
	
	Route::get('logout', function() {
		Sentry::logout();
		return Redirect::to('admin/login');
	});

	Route::get('/', 'K1\Admin\Controllers\HomeController@index');
});
