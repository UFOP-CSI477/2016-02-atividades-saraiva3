@extends('layout.principal')

@section('conteudo')

	<h1>Exibir Disciplina</h1>
	<form method="post" action="/estados/{{$estado->id}}">

		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			{{$estado->nome}}
		</div>
		<div class="form-group">
			<label for="sigla">Sigla</label>
			{{$estado->sigla}}
		</div>
		<a href="/estados" class="btn btn-primary">Voltar</a>
		<input type="submit" value="Excluir" class="btn btn-danger" />
	</form>

@endsection
