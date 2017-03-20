@extends('layout.principal')

@section('conteudo')

	<h1>Editar Cidade</h1>
	<form method="post" action="/cidades/{{$cidade->id}}">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome">Nome da Cidade</label>
			<input type="text" class="form-control" name="nome" value="{{$cidade->nome}}" />
		</div>

    <div id="estado_id">
        <select name="estado_id">
          @foreach($estados as $e)
          @if($e->id == $estado->id)
           <option name="estado_id"  selected value="{{$e->id}}">{{$e->nome}} </option>
           @else
            <option name="estado_id" value="{{$e->id}}">{{$e->nome}} </option>
            @endif
           @endforeach
      </select>
    </div>
		<input type="submit" value="Salvar" />
	</form>

@endsection
