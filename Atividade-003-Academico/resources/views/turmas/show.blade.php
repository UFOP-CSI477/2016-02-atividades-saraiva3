@extends('layout.principal')

@section('conteudo')

	<h1>Exibir Turma</h1>
	<form method="post" action="/turmas/{{$turma->id}}">

		{{ method_field('DELETE') }}
		{{ csrf_field() }}


		<a href="/disciplinas" class="btn btn-primary">Voltar</a>
		<input type="submit" value="Excluir" class="btn btn-danger" />
	</form>

@endsection
