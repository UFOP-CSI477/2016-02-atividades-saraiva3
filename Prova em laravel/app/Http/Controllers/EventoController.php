<?php


namespace App\Http\Controllers;
use App\Evento;
use App\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller{

  public function listaById(){
  $eventos = Registro::with('evento', 'atleta')->where('atleta_id', Auth::user()->id)->get();
  $eventos->sortByDesc('data');
  $eventos->sortBy('nome');
  $valorTotal=0;
  $totalEventos=0;
  $nomes;
  $i =0 ;
  foreach ($eventos as $evento){
    $nomes[$i] = Evento::select('nome')->where('id', $evento->evento_id)->value('nome');
    $precos[$i] = Evento::select('preco')->where('id', $evento->evento_id)->value('preco');
    $valorTotal = $valorTotal+ (int)$precos[$i];
    $totalEventos =$totalEventos+1;
    $i = $i+1;
  }

  return view('usuario.evento.lista')
  ->with('totalEventos', $totalEventos)
  ->with('valorTotal', $valorTotal)
  ->with('nomes',$nomes)
  ->with('precos',$precos)
  ->with('eventos',$eventos);

}

public function lista(){

  $eventos = Evento::all()->sortBy('data');
  return view('evento.index')->with('eventos', $eventos);

}

public function index()
   {
     return "USUARIOS";
   }

}
