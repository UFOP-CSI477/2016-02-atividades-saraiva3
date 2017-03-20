@extends('layout.principal')

@section('conteudo')

	<h1>Editar Aluno</h1>
	<form method="post" action="/alunos/{{$aluno->id}}">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" value="{{$aluno->nome}}" />
		</div>
		<div class="form-group">
			<label for="rua">Rua</label>
			<input type="text" class="form-control" name="rua" value="{{$aluno->rua}}"/>
		</div>
		<div class="form-group">
			<label for="bairro">Bairro</label>
			<input type="text" class="form-control" name="bairro" value="{{$aluno->bairro}}"/>
		</div>
		<div class="form-group">
			<label for="numero">Numero</label>
			<input type="number" class="form-control" name="numero" value="{{$aluno->numero}}"/>
		</div>
		<div class="form-group">
			<label for="cep">CEP</label>
			<input type="text" class="form-control" name="cep" value="{{$aluno->cep}}"/>
		</div>
		<div class="form-group">
			<label for="mail">E-mail</label>
			<input type="text" class="form-control" name="mail" value="{{$aluno->mail}}"/>
		</div>
		<div id="cidade_id">
				<select name="cidade_id">
					@foreach($cidades as $e)

					@if($e->id == $aluno->cidade_id)

						<option  selected name="cidade_id" value="{{$e->id}}">{{$e->nome}} </option>
@else
						<option name="cidade_id" value="{{$e->id}}">{{$e->nome}} </option>
						@endif
					 @endforeach
			</select>
		</div>
		<input type="submit" value="Salvar" />
	</form>

@endsection
