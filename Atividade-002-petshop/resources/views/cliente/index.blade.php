@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <a class="btn btn-xs btn-success" href="{{ url('clean')}}">Limpar Carrinho</a>

                      <table class="table table-responsive table-bordered table-hover">
                        <tr>
                            <th>Nome do produto</th>
                          </tr>
                            @if(count($produtos) > 1)
                              @foreach($produtos as $produto)

                              <tr>
                                  <div class="panel">
                              <td> {{ $produto}}  </td>
                                  </div>
                                  </tr>
                              @endforeach
                              @elseif(count($produtos) == 1)
                                <div class="panel">
                            <td>    <label>{{ $produtos}} </label> <br> </td>
                                  </div>
                            @endif

</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
