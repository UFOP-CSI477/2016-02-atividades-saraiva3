<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Aluno;
use Illuminate\Support\Facades\Auth;
use App\Cidade;
class CidadeController extends Controller
{

  public function __construct(){
        $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->type == 1){
          $cidades = Cidade::all();
          session(['nome' => Auth::user()->name]);


        return view('cidades.index') -> with('cidades', $cidades);
      }else{
        session()->flash('error', 'Cidades: acesso não autorizado!');
        return redirect('/home');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $estados = Estado::all();
     return view('cidades.create')->with('estados', $estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Cidade::create($request->all());
      session()->flash('info', 'Cidade adicionada com sucesso!');
      return redirect('/cidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cidade = Cidade::find($id);
      $estado = Estado::find($cidade->estado_id);

      return view('cidades.show')->with('cidade', $cidade) ->with('estado', $estado);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cidade = Cidade::find($id);
          $estados = Estado::all();
          $estado = Estado::find($cidade->estado_id);
       return view('cidades.edit')
       ->with('cidade', $cidade)
       ->with('estados', $estados)
       ->with('estado', $estado);

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
      $cidade = Cidade::find($id);
  		$cidade->nome = $request->nome;
  		$cidade->estado_id = $request->estado_id;

  		$cidade->save();

  		return redirect('/cidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $aluno = Aluno::where('cidade_id',$id)->get();
      if(count($aluno) > 0){
            session()->flash('warning', 'Aluno cadastrado, nao pode ser apagado');
                return redirect('/cidades');
      }
      else{
          Cidade::destroy($id);
          session()->flash('info', 'Cidade apagada com sucesso  ');

          return redirect('/cidades');
      }

    }
}
