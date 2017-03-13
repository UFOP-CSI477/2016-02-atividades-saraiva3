<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $alunos = Aluno::all();
      return view('alunos.index')
      ->with('alunos',$alunos);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('alunos.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Aluno::create($request->all());
    return redirect('/alunos');
      dd($request->all());
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $alunos = Aluno::find($id);
      return view('aluno.edit')->with('aluno', $alunos);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, $id)
   {

    $aluno = Aluno::find($id);
    $aluno->nome = $request->nome;
    $aluno->rua = $request->rua;
    $aluno->numero = $request->numero;
    $aluno->bairro = $request->bairro;
    $aluno->cep = $request->cep;
    $aluno->mail = $request->mail;
    $aluno->cidade_id = $request->cidade_id;
    $aluno->save();

    return redirect('/aluno');
  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
