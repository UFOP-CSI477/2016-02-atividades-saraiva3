<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Route::get('login', '\App\Http\Controllers\Auth\LoginController@login');

Route::get('/home', 'HomeController@index');
Route::get('/', 'ProdutoController@index');
Route::get('produtos/destroy/{id}', 'ProdutoController@destroy');
Route::get('add', 'HomeController@sample1');
Route::get('add/{name}', 'HomeController@sample2');
Route::get('clean', 'HomeController@sample3');

Route::resource('produtos', 'ProdutoController');
