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
    return view('login');
});

Route::get('usuarios', function () {
    return view('cadastro_usuario');
});

Route::post('usuarios/cadastra','UsuariosController@cadastra');

Route::post('login','UsuariosController@login');
Route::get('logout', 'UsuariosController@logout');

Route::group(['middleware' => 'auth'], function() {
	//Rotas autenticadas
	Route::get('rss',function(){
		return view('lista_rss');
	});
});