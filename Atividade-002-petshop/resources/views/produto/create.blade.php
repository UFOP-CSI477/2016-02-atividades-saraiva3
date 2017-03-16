@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar produto novo</div>

                    <div class="panel-body">
                      <form method="post" action ="{{url('/produtos')}}">

                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="nome">Nome:</label>
                        <input type="text"  class="form-control" name="nome" />
                        </div>
                        <div class="form-group">
                          <label for="preco">Preco:</label>
                         <input type="text" class="form-control" name="preco"/>
                        </div>
                        <div class="form-group">
                          <label for="imagem">Imagem(nome do arquivo com extensao):</label>
                      <input type="text" class="form-control" name="imagem" />
                        </div>
                        <input type="submit" value="Salvar"/>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
