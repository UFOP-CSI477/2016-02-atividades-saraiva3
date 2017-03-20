@extends('layout.principal')

@section('conteudo')

	<h1>Inserir Disciplina</h1>
	<form method="post" action="/disciplinas">

		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" />
		</div>

		<div class="form-group">
			<label for="codigo">Codigo</label>
			<input type="text" class="form-control" name="codigo" />
		</div>

		<div class="form-group">
			<label for="carga">Carga</label>
			<input type="text" class="form-control" name="carga" />
		</div>

		<!-- Nome: <input type="text" name="nome" /><br><br>
		// C�digo: <input type="text" name="codigo" /><br><br>
		// CH: <input type="text" name="carga" /><br><br>
		-->
		<input type="submit" value="Salvar" style="color: black;"/>
	</form>

@endsection
