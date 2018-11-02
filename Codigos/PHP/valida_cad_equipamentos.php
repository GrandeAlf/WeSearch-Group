<?php 
	
	session_start();

	$cod = $_SESSION['cod'];
	$nome = $_POST["nome"];
	$inclusao = $_POST["inclusao"];
	$descricao = $_POST["descricao"];

	echo "Cod: ".$cod;
	echo "Nome: ".$nome."<br>";
	echo "Data de inclusão: ".$inclusao."<br>";
	echo "Descrição: ".$descricao."<br>";


	include("conexao.php");

	$consulta = "INSERT INTO equipamentos( nome, descricao, data_inicio, fk_grupo) 
	VALUES ('$nome', '$descricao', '$inclusao', '$cod')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result)
	{
		echo "inserido";
	}

 ?>