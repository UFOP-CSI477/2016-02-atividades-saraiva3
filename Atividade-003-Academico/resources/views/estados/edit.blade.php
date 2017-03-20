@extends('layout.principal')

@section('conteudo')

	<h1>Editar Estado</h1>
	<form method="post" action="/estados/{{$estado->id}}">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" class="form-control" name="nome" value="{{$estado->nome}}" />
		</div>
		<div class="form-group">
			<label for="nome">Sigla</label>
			<input type="text" class="form-control" name="sigla" value="{{$estado->sigla}}"  />
		</div>
		<input type="submit" value="Salvar" />
	</form>

@endsection
