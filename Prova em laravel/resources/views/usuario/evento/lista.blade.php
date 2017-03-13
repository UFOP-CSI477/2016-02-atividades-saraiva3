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

      <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                 <div class="panel-heading">Seja Bem Vinda(o) {{Auth::user()->nome}}</div>

    <div class="panel-body">
      <div class="panel-heading">
          <a class="btn btn-link" href="{{url('usuario/create')}}">Inscrever em Evento</a>
          <a class="btn btn-link" href="{{url('usuario/evento')}}">Lista Dos Eventos</a>
      </div>

      <div class="panel-heading">Lista de Eventos (Com valor total)</div>

      <div class="panel-body">
          <table class="table table-responsive table-bordered table-hover">

  @if(session()->has('mensagem'))
      <div class="alert alert-info text-center">
          {!! session('mensagem') !!}
      </div>
      <br />
  @endif
  <table class="table table-striped table-hover">
      <thead>
      <tr>
          <th>Evento</th>
          <th>Preço</th>
          <th>Data</th>
      </tr>
      </thead>
      <tbody>
    
      @foreach($eventos as $evento)

          <tr>
            <td>{!! $evento->evento()->value('nome')!!}</td>
            <td>{!! $evento->evento()->value('preco')!!}</td>
            <td>{!! $evento->data !!}</td>
          </tr>
     
      @endforeach

      </tbody>
      <tfoot>
      <tr>
          <td>{!! $totalEventos !!} Eventos</td>
          <td>Valor Total R${!! $valorTotal !!}</td>
          {{--<td>N/A</td>--}}
          {{--<td>N/A</td>--}}
      </tr>
      </tfoot>
  </table>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
