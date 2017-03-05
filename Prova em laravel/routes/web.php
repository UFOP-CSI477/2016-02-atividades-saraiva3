<?php


Auth::routes();

Route::get('usuario/login', ['uses'=>'UsuarioController@index']);
Route::post('usuario/login', ['uses'=>'Auth\LoginController@loginUsuario']);
Route::get('/', ['uses'=>'EventoController@lista']);
Route::get('/registro', ['uses'=>'RegistroController@listaTodos']);
Route::get('/atleta', ['uses'=>'UsuarioController@lista']);
Route::get('registro/atleta', ['uses'=>'RegistroController@relatorioAtleta']);
Route::get('/evento', ['uses'=>'EventoController@index']);

Route::group(['middleware' => 'auth:usuarios' , 'prefix' => 'usuario'], function (){
    Route::get('evento', 'EventoController@listaById');
    Route::get('create', 'RegistroController@create');
    Route::post('store', 'RegistroController@store');
});
