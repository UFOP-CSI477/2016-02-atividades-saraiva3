@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bem Vindo {{Auth::user()->name}}</div>

                <div class="panel-body">

                    @if(Auth::check())
                        @if(Auth::user()->type == 1)
                            Logado como Cliente
                        @endif

                        @if(Auth::user()->type == 2)
                            Logado como Admin
                        @endif

                        @if(Auth::user()->type == 3)
                            Logado como Operador
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
