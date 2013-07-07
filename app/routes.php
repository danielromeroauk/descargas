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

//login user and admin account
Route::get('/', 'UsersController@index');
Route::post('/', 'UsersController@do_login');
//login user and admin account
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@do_login');
//editing user account
Route::get('/edit/{username}', 'UsersController@edit_profile');
Route::post('/edit/{username}', 'UsersController@do_edit_profile');
//adding downloads to user account
Route::get('/add/{username}', 'UsersController@add_download');
Route::post('/add/{username}', 'UsersController@do_add_download');
//user download route
Route::get('/file/{file}/{hash}', 'UsersController@do_download');