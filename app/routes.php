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


Route::get('/', 'siteController@index');
Route::get('/what-we-do', 'siteController@wwd');
Route::get('/login', 'siteController@login');
Route::get('/signup', 'siteController@signup');
Route::get('/case-study', 'siteController@case_study');
Route::get('/case-study/{slug}', 'siteController@case_study');
Route::get('/blog', 'siteController@blog');

Route::get('/search', 'userController@search');
Route::get('/{user_id}', 'userController@index');
Route::get('/{user_id}/messages', 'userController@messages');
Route::get('/{user_id}/notifications', 'userController@notifications');
