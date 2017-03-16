@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Produtos @if(Auth::check()) @if(Auth::user()->type == 2)<a class="btn btn-xs btn-default pull-right" href="{{url('produtos/create')}}">Novo Produto</a>@endif @endif</div>


                    <div class="panel-body">
                      @if(\Illuminate\Support\Facades\Auth::check())
                          @if(Auth::user()->type != 1)
                          <a class="btn btn-xs btn-info" href="{{ url('produtos/create') }}">Novo produto</a>

                              @endif
                          @endif

                        <table class="table table-responsive table-bordered table-hover">

                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('flash_message') }}
                                </div>

                            @elseif(Session::has('message'))
                                    <div class="alert alert-success">
                                        {{ Session::get('message') }}
                                    </div>
                             @endif
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Imagem</th>
                                {{--@if(\Illuminate\Support\Facades\Auth::check())--}}
                                    <th>Funcionalidades</th>
                                {{--@endif--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produtos as $produto)
                                <tr>
                                    <td>{!! $produto->nome !!}</td>
                                    <td>R$ {!! $produto->preco !!}</td>
                                    <td> <img src ="images/{{$produto->imagem }}"  class = "img-responsive" style="width:40%" alt="Image"></td>


                                        <td>
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                                @if(Auth::user()->type != 1)
                                                <a class="btn btn-xs btn-info" href="{{ url('produtos/' . $produto->id . '/edit') }}">Editar</a>
                                                <a class="btn btn-xs btn-info" href="{{ url('produtos/destroy/' . $produto->id ) }}">Excluir</a>
                                                  <a class="btn btn-xs btn-info" href="{{ url('add/' . $produto->nome  ) }}">Carrinho</a>
                                                @elseif(Auth::user()->type == 1)
                                                <a class="btn btn-xs btn-info" href="{{ url('add/' .$produto->id) }}">Carrinho</a>
                                                @endif
                                            @else
                                              <label> Favor logar</label>
                                            @endif
                                        </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
