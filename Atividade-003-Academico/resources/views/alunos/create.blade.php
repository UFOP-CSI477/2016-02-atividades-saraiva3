@extends('layout.principal')

@section('conteudo')

	<h1>Inserir Aluno</h1>
	<form method="post" action="/alunos">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" />
		</div>
		<div class="form-group">
			<label for="rua">Rua</label>
			<input type="text" class="form-control" name="rua" />
		</div>
		<div class="form-group">
			<label for="bairro">Bairro</label>
			<input type="text" class="form-control" name="bairro" />
		</div>
		<div class="form-group">
			<label for="numero">Numero</label>
			<input type="number" class="form-control" name="numero" />
		</div>
		<div class="form-group">
			<label for="cep">CEP</label>
			<input type="text" class="form-control" name="cep" />
		</div>
		<div class="form-group">
			<label for="mail">E-mail</label>
			<input type="text" class="form-control" name="mail" />
		</div>
		<div id="cidade_id">
				<select name="cidade_id">
					@foreach($cidades as $e)
						<option name="cidade_id" value="{{$e->id}}">{{$e->nome}} </option>
					 @endforeach
			</select>
		</div>
		<input type="submit" value="Salvar" style="color: black;"/>
	</form>

@endsection
