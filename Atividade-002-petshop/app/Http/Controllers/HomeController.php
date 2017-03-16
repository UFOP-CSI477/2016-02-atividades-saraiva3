<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function sample1()
    {
    $produtos = Cookie::get('name');
      $produtosTotal = Produto::all();
     return view('cliente.index')->with(compact('produtos'))->with(compact('produtosTotal'));

    }

    public function sample2($id){

        if ($cookie_data = Cookie::get('name')) {

          if(!is_array($cookie_data))
          {
            $data = [];
            $data[] = $cookie_data;
          }else{
            $data = $cookie_data;
          }

          array_push($data, $id);
        } else {
          $data   = $id;
        }

       $response = new Response('Adicionado ao carrinho, favor retornar');
       $response->withCookie(cookie('name', $data, 60));

      //return response($response)->view('home');
      return response()
                ->view('produto.adicionado')
                ->cookie('name', $data, 60);
    //    return view('home')->with(compact('response'));
      // return $response;

    }

    public function sample3()
    {
        $cookie = Cookie::forget('name');
        $response = new Response('Carrinho limpo, favor retornar');
        $response->withCookie($cookie);
        return response()
                  ->view('produto.destroy')
                  ->cookie('name', NULL, 60);

    }

}
