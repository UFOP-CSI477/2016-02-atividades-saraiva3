@extends('layout.principal')

@section('conteudo')

	<h1>Alunos</h1>
	<a href="/alunos/create" class="btn btn-success">Inserir Novo Aluno</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Bairro</th>
				<th>E-mail</th>
				<th>Cidade</th>
			</tr>
		</thead>
		<tbody>
			@foreach($alunos as $d)
				<tr>
				<td><a href="/alunos/{{ $d->id}}">{{ $d->nome}}</a></td>
				<td>{{ $d->bairro}}</td>
				<td>{{ $d->mail}}</td>
				<td>{{ $d->cidade()->value('nome')}}</td>
				<td><a href="{{url('/alunos/' .$d->id. '/edit')}}" class="btn">Editar</a></td>

			@endforeach
	</table>

@endsection
