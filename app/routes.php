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
Route::get('/', 'UserController@index');
Route::post('/', 'UserController@do_login');

//login user and admin account
Route::get('login', 'UserController@login');
Route::post('login', 'UserController@do_login');

//editing user account
Route::get('/edit/{username}', 'UserController@edit_profile');
Route::post('/edit/{username}', 'UserController@do_edit_profile');

//adding downloads to user account
Route::get('/add/{username}', 'UserController@add_download');
Route::post('/add/{username}', 'UserController@do_add_download');

//user download route
Route::get('/file/{file}/{hash}', 'UserController@do_download');

Route::get('logout','UserController@logout');

// Route::get('downloads', 'DownloadController@index');
