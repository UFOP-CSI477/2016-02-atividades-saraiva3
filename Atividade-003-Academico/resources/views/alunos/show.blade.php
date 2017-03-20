@extends('layout.principal')

@section('conteudo')

	<h1>Exibir Aluno</h1>
	<form method="post" action="/alunos/{{$aluno->id}}">

		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome</label>
			{{$aluno->nome}}
		</div>
		<div class="form-group">
			<label for="rua">Rua</label>
			{{$aluno->rua}}
		</div>
		<div class="form-group">
			<label for="bairro">Bairro</label>
			{{$aluno->bairro}}
		</div>
		<div class="form-group">
			<label for="cep">CEP</label>
			{{$aluno->cep}}
		</div>
		<div class="form-group">
			<label for="sigla">E-Mail</label>
			{{$aluno->mail}}
		</div>
		<div class="form-group">
			<label for="numero">Numero</label>
			{{$aluno->numero}}
		</div>
		<div class="form-group">
			<label for="cidade_id">Cidade</label>
			{{$cidade->nome}}
		</div>
		<a href="/alunos" class="btn btn-primary">Voltar</a>
		<input type="submit" value="Excluir" class="btn btn-danger" />
	</form>

@endsection
