<?php

Route::auth();

Route::get('/login', 'Auth\LoginController@show');
Route::get('/register','Auth\RegisterController@show');
Route::get('/logout','Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/', function () {
	    return view('welcome');
	});

});

Auth::routes();
