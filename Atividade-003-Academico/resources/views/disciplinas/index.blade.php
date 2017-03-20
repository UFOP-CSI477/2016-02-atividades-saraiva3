@extends('layout.principal')

@section('conteudo')

	<h1>Disciplinas</h1>
	<a href="/disciplinas/create" class="btn btn-success">Inserir Nova Disciplina</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Código</th>
				<th>CH</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
				@foreach($disciplinas as $d)
					<tr>
					<td><a href="/disciplinas/{{ $d->id}}">{{ $d->nome}}</a></td>
					<td>{{ $d->codigo}}</td>
					<td>{{ $d->carga}}</td>
					<td><a href="{{url('/disciplinas/' .$d->id. '/edit')}}" class="btn">Editar</a></td>

				@endforeach
	</table>

@endsection
