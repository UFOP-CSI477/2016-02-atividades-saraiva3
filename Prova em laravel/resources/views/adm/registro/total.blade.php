@extends('layouts.content')

@section('dash')
    <div class="panel-heading">
        <a class="btn btn-link" href="{{url('registro')}}">Registros</a>
        <a class="btn btn-link" href="{{url('atleta')}}">Atletas</a>
        <a class="btn btn-link" href="{{url('registro/atleta')}}">Total Atleta</a>
        <a class="btn btn-link" href="{{url('registro/evento')}}">Total Evento</a>
    </div>
    <div class="panel-heading">Area Adm - Lista de Registro/Atleta</div>

    {{--<h1>Lista Total de Atletas</h1>--}}
    <div class="panel-body">
        <table class="table table-responsive table-bordered table-hover">

            @if(session()->has('mensagem'))
                <div class="alert alert-info text-center">
                    {!! session('mensagem') !!}
                </div>
                <br />
            @endif
            <table class="table table-responsive table-bordered table-hover">
                <thead>
                <tr>
                    <th>Atleta</th>
                    <th>Evento</th>
                    <th>Data</th>
                    <th>Preço</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{!! $registro->atleta->nome !!}</td>
                        <td>{!! $registro->evento->nome !!}</td>
                        <td>{!! $registro->data !!}</td>
                        <td>{!! $registro->evento->preco !!}</td>
                        {{--<td><a class="btn btn-primary" href="{{ route('showEditarExame', $exame->id) }}"><i class="fa fa-pencil-square-o"></i> Editar</a> ou <a href="{{ route('excluirExame', $exame->id) }}" class="btn btn-danger"><i class="fa fa-times"></i> Excluir</a></td>--}}
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td>{!! $qTotal !!} registro(s)/atleta</td>
                    <td>Total R${!! $vTotal !!}</td>
                    {{--<td>N/A</td>--}}
                    {{--<td>N/A</td>--}}
                </tr>
                </tfoot>
            </table>
@endsection
