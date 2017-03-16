@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar produto</div>

                    <div class="panel-body">
                      <form method="post" action ="{{url('/produtos/' . $produtos->id)}}">
                  
                        {{csrf_field()}}

<div class="form-group">
<label for="nome">Nome:</label>
<input type="text"  class="form-control" name="nome" value="{{$produtos->nome}}"/>
</div>
<div class="form-group">
<label for="preco">Preco:</label>
<input type="text" class="form-control" name="preco"value="{{$produtos->preco}}"/>
</div>
<div class="form-group">
<label for="imagem">Imagem:</label>
<input type="text" class="form-control" name="imagem" value="{{$produtos->imagem}}"/>
</div>
            <input type="submit" value="Salvar"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
