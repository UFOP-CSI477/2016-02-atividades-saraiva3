<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Dados das cidades </h1>

    @foreach($cidades as $e)
      {{$e->nome}} <br>
    @endforeach

  </body>
</html>
