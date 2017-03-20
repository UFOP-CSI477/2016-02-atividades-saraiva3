@extends('layout.principal')

@section('conteudo')

	<h1>Editar Turma</h1>
	<form method="post" action="/tuamrs/{{$turma->id}}">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}

		<input type="submit" value="Salvar" />
	</form>

@endsection
