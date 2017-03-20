@extends('layout.principal')

@section('conteudo')

	<h1>Cidades</h1>
	<!-- @if(Session::has('nome')) -->
	<!--	<h2>Bem vindo(a) {{ Session::get('nome')}}</h2>-->
	<!--@endif-->
	<a href="/cidades/create" class="btn btn-success">Inserir Nova Cidade</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Nome do Estado</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cidades as $d)
				<tr>
				<td><a href="/cidades/{{ $d->id}}">{{ $d->nome}}</a></td>
				<td>{{ $d->estado()->value('nome')}}</td>
				<td><a href="{{url('/cidades/' .$d->id. '/edit')}}" class="btn">Editar</a></td>

			@endforeach
	</table>

@endsection
