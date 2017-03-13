<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Dados dos estados </h1>
        
    @foreach($estados as $e)
      {{$e->nome}} <br>
    @endforeach

  </body>
</html>
