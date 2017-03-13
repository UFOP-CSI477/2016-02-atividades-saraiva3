@extends('layout.principal')

@section('conteudo')
    <h1> Disciplinas </h1>
    <a class="btn" href="{{url('/disciplinas/create')}}"> Criar Nova Disciplina </a><br>

    @foreach($disciplinas as $d)

    <a href="/disciplinas/{{ $d->id}}">{{$d->nome}}</a> Codigo : {{$d->codigo}}- CH: {{$d->carga}}
    <a class="btn" href="{{url('/disciplinas/'.$d->id.'/edit')}}"> editar </a><br>

    @endforeach
@endsection
