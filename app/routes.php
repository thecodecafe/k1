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


Route::get('', 'siteController@index');
Route::get('what-we-do', 'siteController@wwd');
Route::get('login', 'siteController@login');
Route::get('signup', 'siteController@signup');

Route::resource('profile', 'userController');
Route::get('search', 'userController@search');
