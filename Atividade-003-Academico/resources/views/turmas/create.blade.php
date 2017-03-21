@extends('layout.principal')

@section('conteudo')

	<h1>Inserir Turma</h1>
	<form method="post" action="/turmas">
			{{ csrf_field() }}
				<div class="form-group">
		<label for="nome">Nome: </label>
		<input type="text" class="form-control" name="nome"  />
		</div>
		<div id="disciplina_id">
			<select name="disciplina_id">
				@foreach($disciplinas as $e)
					<option name="disciplina_id" value="{{$e->id}}">{{$e->nome}} </option>
				 @endforeach
		</select>
		</div>
		<input type="submit" value="Salvar" style="color: black;"/>
	</form>

@endsection
