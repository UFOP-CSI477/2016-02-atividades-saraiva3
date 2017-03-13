<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1> Editar Aluno </h1>

      <form method="post" action ="/aluno/{{$aluno->id }}">


        {{method_field('PATCH')}}
        {{csrf_field()}}
        Nome: <input type="text" name="nome" value="{{$aluno->nome}}"/><br>
        Codigo: <input type="text" name="codigo"value="{{$aluno->codigo}}"/><br>
        Carga: <input type="text" name="carga" value="{{$disciplina->carga}}"/><br>

        <input type="submit" value="Salvar"/>

      </form>
  </body>
</html>
