
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


    <div class="panel-body">
      <div class="panel-heading">
          <a class="btn btn-link" href="{{url('registro')}}">Registros</a>
          <a class="btn btn-link" href="{{url('atleta')}}">Atletas</a>
          <a class="btn btn-link" href="{{url('registro/atleta')}}">Total Atleta</a>    
      </div>
      <div class="panel-heading">Area Adm - Lista de Registro/Atletas</div>


      <div class="panel-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-info text-center">
                {!! session('mensagem') !!}
            </div>
            <br />
        @endif
        <table class="table table-responsive table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Atleta</th>
                <th>Evento</th>
                <th>Data</th>
                <th>Pago</th>
            </tr>
            </thead>
            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{!! $registro->atleta->nome !!}</td>
                    <td>R$ {!! $registro->evento->nome!!}</td>
                    <td>{!! $registro->data !!}</td>
                    @if($registro->pago == '1')
                    <td class="bg-success">Pago<td>
                    @else
                    <td class="bg-danger">Pendente<td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
  </div></div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
