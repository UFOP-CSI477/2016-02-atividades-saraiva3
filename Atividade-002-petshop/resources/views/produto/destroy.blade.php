@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Deletar produto</div>

                    <div class="panel-body">
                      Carrinho apagado com sucesso!

                    </div>
                    <a class="btn btn-xs btn-warning" href="{{ url('produtos') }}">Comprar mais</a>

                </div>
            </div>
        </div>
    </div>
@endsection
