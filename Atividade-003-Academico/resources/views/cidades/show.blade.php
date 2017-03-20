@extends('layout.principal')

@section('conteudo')

	<h1>Cidade</h1>
	<form method="post" action="/cidades/{{$cidade->id}}">

		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome: </label>
			{{$cidade->nome}}
		</div>

		<div class="form-group">
			<label for="codigo">Estado: </label>
			{{$estado->nome}}
		</div>
		<a href="/cidades" class="btn btn-primary">Voltar</a>
		<input type="submit" value="Excluir" class="btn btn-danger" />
	</form>

@endsection
