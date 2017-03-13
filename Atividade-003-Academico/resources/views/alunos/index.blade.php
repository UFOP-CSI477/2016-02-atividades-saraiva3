@extends('layout.principal')

@section('conteudo')
    <h1> Alunos </h1>
    <a class="btn" href="{{url('/alunos/create')}}"> Criar Nova Disciplina </a><br>

    @foreach($alunos as $d)

    <a href="/alunos/{{ $d->id}}">{{$d->nome}}</a> Codigo : {{$d->codigo}}- CH: {{$d->carga}}
    <a class="btn" href="{{url('/alunos/'.$d->id.'/edit')}}"> editar </a><br>

    @endforeach
@endsection
