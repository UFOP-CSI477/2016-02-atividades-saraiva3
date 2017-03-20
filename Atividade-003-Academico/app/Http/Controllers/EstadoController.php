<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use Illuminate\Support\Facades\Auth;
use App\Cidade;
class EstadoController extends Controller
{


  public function __construct(){
      //$this->middleware('auth', ['except' => 'index']);
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
          $estados = Estado::all();
          session(['nome' => Auth::user()->name]);
          
        return view('estados.index') -> with('estados', $estados);
      }else{
        session()->flash('error', 'Disciplina: acesso não autorizado!');
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
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Estado::create($request->all());
      session()->flash('info', 'Estado adicionada com sucesso!');
      return redirect('/estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  $estado = Estado::find($id);
      return view('estados.show') -> with('estado', $estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $estado = Estado::find($id);
       return view('estados.edit')->with('estado', $estado);
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
      // dd($request->all());
  $estado = Estado::find($id);
  $estado->nome = $request->nome;
  $estado->sigla = $request->sigla;
  $estado->save();

  return redirect('/estados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cidade = Cidade::where('estado_id',$id)->get();
      if(count($cidade) > 0){
            session()->flash('warning', 'Cidade cadastrada, nao pode ser apagado');
                return redirect('/estados');
      }
      else{
          Estado::destroy($id);
          session()->flash('info', 'Estado apagado com sucesso  ');

          return redirect('/estados');
      }



    }
}
