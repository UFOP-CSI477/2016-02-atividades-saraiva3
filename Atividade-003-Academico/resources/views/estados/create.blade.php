@extends('layout.principal')

@section('conteudo')

	<h1>Inserir Estado</h1>
	<form method="post" action="/estados">

		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" />
		</div>
		<div class="form-group">
			<label for="nome">Sigla: </label>
			<input type="text" class="form-control" name="sigla" />
		</div>
		<input type="submit" value="Salvar" style="color: black;"/>
	</form>

@endsection
