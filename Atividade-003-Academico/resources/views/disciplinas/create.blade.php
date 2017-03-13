<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1> Inserir disciplina </h1>

      <form method="post" action ="/disciplinas">
        {{csrf_field()}}
        Nome: <input type="text" name="nome"/><br>
        Codigo: <input type="text" name="codigo"/><br>
        Carga: <input type="text" name="carga"/><br>

        <input type="submit" value="Salvar"/>

      </form>
  </body>
</html>
