@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Produtos</div>

                     <div class="panel-body">
                        <table class="table table-responsive table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Imagem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produtos as $produto)
                                <tr>
                                    <td>{!! $produto->nome !!}</td>
                                    <td>R$ {!! $produto->preco !!}</td>
                                    <td>{!! $produto->imagem !!}</td>
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
