@extends('layout.principal')

@section('conteudo')

	<h1>Editar Turma</h1>
	<form method="post" action="/turmas/{{$turma->id}}">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" class="form-control" name="nome" value="{{$turma->nome}}" />
		</div>
		<div id="disciplina_id">
				<select name="disciplina_id">
					@foreach($disciplinas as $e)
					@if($e->id == $turma->disciplina_id)
					 <option name="disciplina_id"  selected value="{{$e->id}}">{{$e->nome}} </option>
					 @else
						<option name="disciplina_id" value="{{$e->id}}">{{$e->nome}} </option>
						@endif
					 @endforeach
			</select>
		</div>
		<input type="submit" value="Salvar" />
	</form>

@endsection
