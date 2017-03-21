@extends('layout.principal')

@section('conteudo')

	<h1>Turmas</h1>
	<a href="/turmas/create" class="btn btn-success">Inserir Nova Turma</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Disciplina</th>
				<th>Funcao</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@foreach($turmas as $d)
					<tr>
					<td><a href="/turmas/{{ $d->id}}">{{ $d->nome}}</a></td>
					<td>{{ $d->disciplina()->value('nome') }}</td>
					<td><a href="{{url('/turmas/' .$d->id. '/edit')}}" class="btn">Editar</a></td>

				@endforeach
			</tr>
	</table>

@endsection
