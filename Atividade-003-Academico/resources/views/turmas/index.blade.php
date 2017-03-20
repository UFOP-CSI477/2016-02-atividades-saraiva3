@extends('layout.principal')

@section('conteudo')

	<h1>Turmas</h1>
	<a href="/turmas/create" class="btn btn-success">Inserir Nova Turma</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Numero</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@foreach($turmas as $d)
					<tr>
					<td><a href="/disciplinas/{{ $d->id}}">{{ $d->numero}}</a></td>
					<td>{{ $d->grau}}</td>
					<td><a href="{{url('/turmas/' .$d->id. '/edit')}}" class="btn">Editar</a></td>

				@endforeach
			</tr>
	</table>

@endsection
