<?php

namespace App\Http\Controllers;
use App\Turma;
use App\Disciplina;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TurmaController extends Controller
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
          $turmas = Turma::all();
          session(['nome' => Auth::user()->name]);

        return view('turmas.index') -> with('turmas', $turmas);
      }else{
        session()->flash('error', 'Turma: acesso não autorizado!');
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
      $disciplinas = Disciplina::all();
       return view('turmas.create')->with('disciplinas', $disciplinas);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Turma::create($request->all());
      session()->flash('info', 'Turma adicionada com sucesso!');
      return redirect('/turmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $turma = Turma::find($id);
      $disciplina = Disciplina::find($turma->disciplina_id);
      return view('turmas.show')->with('disciplina', $disciplina)->with('turma', $turma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $turma = Turma::find($id);
      $disciplinas = Disciplina::all();
       return view('turmas.edit')
       ->with('turma', $turma)
       ->with('disciplinas', $disciplinas);

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
      $turma = Turma::find($id);
      $turma->nome = $request->nome;
      $turma->disciplina_id = $request->disciplina_id;

      $turma->save();

      return redirect('/turmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Turma::destroy($id);
      session()->flash('info', 'Turma apagada com sucesso  ');
      return redirect('/turmas');
    }
}
