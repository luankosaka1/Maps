<?php

Route::get('/', function() {
	return Redirect::to('/login');
});

Route::any('/login', ['as' => 'login', 'uses' => 'LoginController@login']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);

Route::get('/admin', ['as' => 'logout', 'uses' => 'UsuarioController@getIndex']);

Route::group(['before' => 'auth'], function() {
	Route::controller('map', 'MapController');	

	Route::group(['prefix' => 'admin'], function() {
		Route::controller('usuario', 'UsuarioController');
	});
});