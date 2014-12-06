<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::group(array('prefix' => "api"), function() {
	//Schools Endpoint
	Route::group(array('prefix' => "schools"), function() {

		Route::delete('{id}', 'K1\Api\Controllers\SchoolController@delete');
		
		Route::get('{id}', 'K1\Api\Controllers\SchoolController@index');
		Route::put('{id}', 'K1\Api\Controllers\SchoolController@update');

		Route::post('/', 'K1\Api\Controllers\SchoolController@create');
		Route::get('/', 'K1\Api\Controllers\SchoolController@index');
	});

	//States
	Route::group(array('prefix' => "states"), function() {
		Route::get('{id}/lgas', 'K1\Api\Controllers\StateController@lgas');
	});

	//LGAs Endpoint
	Route::group(array('prefix' => "lgas"), function() {

		Route::delete('{id}', 'K1\Api\Controllers\LgaController@delete');
		
		Route::get('{id}', 'K1\Api\Controllers\LgaController@index');
		Route::put('{id}', 'K1\Api\Controllers\LgaController@update');

		Route::post('/', 'K1\Api\Controllers\LgaController@create');
		Route::get('/', 'K1\Api\Controllers\LgaController@index');
	});

	//Industries Endpoint
	Route::group(array('prefix' => "industries"), function() {

		Route::delete('{id}', 'K1\Api\Controllers\IndustryController@delete');
		
		Route::get('{id}', 'K1\Api\Controllers\IndustryController@index');
		Route::put('{id}', 'K1\Api\Controllers\IndustryController@update');

		Route::post('/', 'K1\Api\Controllers\IndustryController@create');
		Route::get('/', 'K1\Api\Controllers\IndustryController@index');
	});

	//Cities Endpoint
	Route::group(array('prefix' => "cities"), function() {

		Route::delete('{id}', 'K1\Api\Controllers\CityController@delete');
		
		Route::get('{id}', 'K1\Api\Controllers\CityController@index');
		Route::put('{id}', 'K1\Api\Controllers\CityController@update');

		Route::post('/', 'K1\Api\Controllers\CityController@create');
		Route::get('/', 'K1\Api\Controllers\CityController@index');
	});

	//People Endpoint
	Route::group(array('prefix' => "people"), function() {

		Route::delete('{id}', 'K1\Api\Controllers\PeopleController@delete');

		Route::get('{id}', 'K1\Api\Controllers\PeopleController@index');
		Route::put('{id}', 'K1\Api\Controllers\PeopleController@update');

		Route::post('/', 'K1\Api\Controllers\PeopleController@create');
		Route::get('/', 'K1\Api\Controllers\PeopleController@index');
	});
});