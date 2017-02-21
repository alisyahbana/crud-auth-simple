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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/add-user', 'UserController@create');

Route::post('/add-user', 'UserController@store');

Route::get('/user', 'UserController@index');

Route::get('/edit-user', 'UserController@edit');

Route::post('/edit-user', 'UserController@update');