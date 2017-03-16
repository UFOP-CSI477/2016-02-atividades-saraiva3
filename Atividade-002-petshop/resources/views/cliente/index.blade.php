@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <a class="btn btn-xs btn-success" href="{{ url('clean')}}">Limpar Carrinho</a>

                            @if(count($produtos) > 1)
                              @foreach($produtos as $produto)
                                @foreach($produtosTotal as $p)
                                  @if($p->id == $produto)

                                    <label>{{ $p->nome}} </label> <br>

                                  @endif
                                @endforeach
                              @endforeach
                            @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
