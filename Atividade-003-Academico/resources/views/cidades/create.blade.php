@extends('layout.principal')

@section('conteudo')

	<h1>Inserir Cidade</h1>
	<form method="post" action="/cidades">

		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" />
		</div>

		<div id="estado_id">
	      <select name="estado_id">
					@foreach($estados as $estado)
	         <option name="estado_id" value="{{$estado->id}}">{{$estado->nome}} </option>
	         @endforeach
	    </select>
	  </div>
		<input type="submit" value="Salvar" style="color: black;"/>
	</form>

@endsection
