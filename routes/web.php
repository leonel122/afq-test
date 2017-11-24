<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/user/create', 'UserController@create');

Route::get('/', function(){
	return view('auth.login');

	});

Route::get('/register', function(){
	return view('auth.register');
	});

// /user
Route::get('/user', 'UserController@index');


Route::post('/user/create', ['as'=>'user.create','uses'=>'UserController@store']);

Route::post('user/{id}/update',['as' => 'user.update', 'uses' => 'UserController@Update']);



Route::get('/user/{id}', 'UserController@show');

Route::get('/user/{id}/edit', 'UserController@edit');

Route::get('/user/{id}/delete','UserController@destroy');

//autentificacion
Auth::routes();

Route::get('/home', 'HomeController@index');
