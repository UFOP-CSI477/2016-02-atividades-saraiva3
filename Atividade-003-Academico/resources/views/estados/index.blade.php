@extends('layout.principal')

@section('conteudo')

	<h1>Estados</h1>
	<!-- @if(Session::has('nome')) -->
	<!--	<h2>Bem vindo(a) {{ Session::get('nome')}}</h2>-->
	<!--@endif-->
	<a href="/estados/create" class="btn btn-success">Inserir novo Estado</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome do Estado</th>
				<th>Sigla</th>
        <th>Função</th>
			</tr>
		</thead>
		<tbody>
			@foreach($estados as $d)
				<tr>
				<td><a href="/estados/{{ $d->id}}">{{ $d->nome}}</a></td>
					<td>{{ $d->sigla}}</td>
				<td><a href="{{url('/estados/' .$d->id. '/edit')}}" class="btn">Editar</a></td>

			@endforeach
	</table>

@endsection
