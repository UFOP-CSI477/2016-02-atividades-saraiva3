<?php
	echo "<h1> Dados Cadastrais <h1>";
	echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap.css\" />";
  $nome = $_GET["nome"];
	$rua = $_GET["rua"];
	$numero = $_GET["numero"];
	$complemento = $_GET["complemento"];

	if(isset($_GET["telefone"])){
		$telefone  = "Telefone: " . $_GET["telefone"];
	}
	$matricula = $_GET["matricula"];
	$cep = $_GET["cep"];
	$cpf = $_GET["cpf"];
$area = "Nenhuma.";
	if(isset($_GET["web"])){
		$area  += "Web";
	}

	if(isset($_GET["bd"])){
		$area  = "Banco de dados";
	}

	if(isset($_GET["mobile"])){
		$area = "Mobile";
	}
	$cidade = $_GET["cityText"];
	$estado = $_GET["stateText"];
	$sex ="Nao declarado.";
	if(isset($_GET["mas"])){
		$sex  = "Masculino: " . $_GET["mas"];
	}
	if(isset($_GET["fem"])){
		$sex  = "Feminino: " . $_GET["fem"];
	}
	$usuario = $_GET["usuario"];
	$senha = $_GET["senha"];
	$email = $_GET["email"];



		echo "<pre> Nome: " .$nome .
		"\n Rua: " .$rua .
"\n Numero: " .$numero .
"\n Complement: " .$complemento .
"\n Telefone: " .$telefone .
"\n Matricula: " .$matricula.
"\n CEP: " .$cep.
"\n CPF: " .$cpf.
"\n Area: " .	$area.
"\n Cidade: " .$cidade .
"\n Estado: " .$estado .
"\n Sexo: " .$sex.
"\n Usuario: " .$usuario.
"\n Senha: " .$senha.
"\n Email: " .$email;
		echo "<pre>";

		echo "<a class=\"btn btn-focus btn-success\" href=\"tabel.html\">Aceitar</a>";
		echo "<a class=\"btn btn-danger\" href=\"form.html\" >Rejeitar</a>";

 ?>
