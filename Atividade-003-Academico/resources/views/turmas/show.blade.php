@extends('layout.principal')

@section('conteudo')

	<h1>Exibir Turma</h1>
	<form method="post" action="/turmas/{{$turma->id}}">

		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome: </label>
			{{$turma->nome}}
		</div>

		<div class="form-group">
			<label for="codigo">Disciplina: </label>
			{{$disciplina->nome}}
		</div>


		<a href="/turmas" class="btn btn-primary">Voltar</a>
		<input type="submit" value="Excluir" class="btn btn-danger" />
	</form>

@endsection
