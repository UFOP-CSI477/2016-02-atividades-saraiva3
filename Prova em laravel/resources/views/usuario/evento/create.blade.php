<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sistema Eventos') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Sistema Eventos') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;<li><a href="{{url('/')}}">Eventos</a></li>
                        <li><a href="{{url('usuario/evento')}}">Atleta</a></li>
                        <li><a href="{{url('registro')}}">Adm/Relatorios</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                       @if (!Auth::check())
                            <li><a href="{{ url('/login') }}">Logar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->nome }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

      <div class="panel-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Cadastrar em novo Evento</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/usuario/store') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                                    <label for="nome" class="col-md-4 control-label">Evento</label>

                                    <select class="form" name="evento" id="evento" required>
                                        <option value="">Selecione o Evento</option>
                                        @foreach($registros as $registro)
                                            <option value="{{$registro->id}}">{!!  $registro->nome !!} - R$ {!! $registro->preco !!}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                                    <label for="Data" class="col-md-4 control-label">Data do Evento</label>

                                    <div class="col-md-6">
                                        <input id="data" type="data" class="form-control" name="data" )required >
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                                    <label for="Data" class="col-md-4 control-label">Data do Pagamento (Insira 0(zero) caso nao pago)</label>
                                    <div class="col-md-6">
                                        <input id="pdata" type="data" class="form-control" name="pdata" ) required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">                                    
                                        <button type="reset" class="btn btn-secondary">
                                            <i class="fa fa-eraser"></i> Limpar
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Cadastrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
