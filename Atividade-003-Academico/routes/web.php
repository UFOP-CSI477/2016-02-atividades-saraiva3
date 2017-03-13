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

Route::get('/', function () {
    $name ="Lucas";
    return view('welcome')->with('name',$name);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('estados', function () {
    $estados = DB::table('estados')->get();
    return view('estados')->with('estados', $estados);
});

Route::get('cidades', function () {
    $cidades = DB::table('cidades')->get();
    return view('cidades')->with('cidades', $cidades);
});


Route::get('alunos', function () {
    $alunos = DB::table('alunos')->get();
    return view('alunos.index')->with('alunos', $alunos);
});

Route::get('/alunos/{aluno}', function ($id) {
    $alunos = DB::table('alunos')->find($id);
    return view("alunos.show")->with('alunos', $alunos);


});

Route::resource('disciplinas', 'DisciplinaController');

Route::resource('alunos','AlunoController');

Route::resource('estados', 'EstadoController');
Route::resource('turmas', 'TurmaController');

Auth::routes();

Route::get('/home', 'HomeController@index');
