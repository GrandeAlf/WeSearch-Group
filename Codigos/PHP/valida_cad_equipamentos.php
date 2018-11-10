<?php 
	
	include("conexao.php");
	session_start();

	$cod = $_SESSION['cod'];
	$nome = $_POST["nome"];
	$inclusao = $_POST["inclusao"];
	$descricao = $_POST["descricao"];

	/*echo "Cod: ".$cod;
	echo "Nome: ".$nome."<br>";
	echo "Data de inclusão: ".$inclusao."<br>";
	echo "Descrição: ".$descricao."<br>";*/

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: seleciona_grupoE.php");
		exit();
	}
	if(strlen($inclusao) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data de Inclusão não pode ser vazio.</div>"; 
		header("location: seleciona_grupoE.php");
		exit();
	}
	if(strlen($descricao) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A descricao não pode ser vazio.</div>"; 
		header("location: seleciona_grupoE.php");
		exit();
	}
	

	$consulta = "INSERT INTO equipamentos( nome, descricao, data_inicio, fk_grupo) 
	VALUES ('$nome', '$descricao', '$inclusao', '$cod')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result)
	{
		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: seleciona_grupoE.php");
	}
	

 ?>