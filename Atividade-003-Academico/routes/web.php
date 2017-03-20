<?php
//Criar modelo para Estados -> Cidades
//Route -> model
//Comando para criar modelos
// php artisan make:model Aluno

// php artisan tinker
// $aluno = DB::table('alunos')->get()
// App\Aluno::all()
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

//Route::get('/', function () {
//    $name = "Carlos";
//	return view('welcome') -> with('name', $name);
//});

Route::resource('/', 'DisciplinaController');

Route::get('about', function () {
	return view('about');
});



Route::resource('disciplinas', 'DisciplinaController');

Route::resource('alunos', 'AlunoController');
Auth::routes();
Route::resource('estados', 'EstadoController');
Route::resource('turmas', 'TurmaController');
Route::resource('cidades', 'CidadeController');

Route::get('/home', 'HomeController@index');
