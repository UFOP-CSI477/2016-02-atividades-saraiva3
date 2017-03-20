@extends('layout.principal')

@section('conteudo')

	<h1>Editar Disciplina</h1>
	<form method="post" action="/disciplinas/{{$disciplina->id}}">
		
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" value="{{$disciplina->nome}}" />
		</div>
		
		<div class="form-group">
			<label for="codigo">Código</label>
			<input type="text" class="form-control" name="codigo" value="{{$disciplina->codigo}}" />
		</div>
		
		<div class="form-group">
			<label for="carga">Carga</label>
			<input type="text" class="form-control" name="carga" value="{{$disciplina->carga}}" />
		</div>
		
		
		
		<!--Nome: <input type="text" name="nome" value="{{$disciplina->nome}}" /><br><br>
		Código: <input type="text" name="codigo" value="{{$disciplina->codigo}}" /><br><br>
		CH: <input type="text" name="carga" value="{{$disciplina->carga}}"/><br><br>
		-->
		<input type="submit" value="Salvar" />
	</form>
	
@endsection