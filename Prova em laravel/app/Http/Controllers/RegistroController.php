<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class RegistroController extends Controller
{

    public function relatorioAtleta(){
        $registros = Registro::with('evento', 'atleta')->get();

        $valorTotal = 0;
        $totalQuantidade = 0;

        foreach ($registros as $registro) {
            $valorTotal += $registro->evento->preco;
            $totalQuantidade += 1;
        }

        return view('adm.atleta.total')
        ->with(compact('registros'))
        ->with(compact('totalQuantidade'))
        ->with(compact('valorTotal'));

    }

    public function listaTodos(){
        $registros = Registro::with('evento', 'atleta')->get()->sortByDesc('data');

        return view('adm.registro.lista')->with(compact('registros'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros = Evento::all();
        return view('usuario.evento.create')->with(compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $in = new Registro;
       $input = Input::all();
       $in['atleta_id'] = Auth::user()->id;
       $in['evento_id'] = $input['evento'];
       $in['data'] = $input['data'];
       if($input['pdata']=='0'){
            $in['pago'] = 0;
       }else{
           $in['pago'] = 1;
       }
        $in->save();

       //Registro::create($in);

        return back();
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
        //
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
        //
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
