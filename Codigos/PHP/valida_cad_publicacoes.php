<?php 
	
	session_start();

	//$cod = $_SESSION['cod'];
	$titulo = $_POST["nome"];
	$tipo = $_POST["tipo"];
	$data = $_POST["inclusao"];
	$grupo = $_SESSION["grupo"];
	$docente = $_SESSION["docente"];
	$linha = $_SESSION["linha"];
	$abnt = $_POST["abnt"];
	$referencia = $_POST["referencia"];

	//echo "Cod: ".$cod;
	echo "Nome: ".$titulo."<br>";
	echo "Tipo: ".$tipo."<br>";
	echo "Data de inclusão: ".$data."<br>";
	echo "Grupo: ".$grupo."<br>";
	echo "Docente: ".$docente."<br>";
	echo "Linha: ".$linha."<br>";
	echo "Referencia ABNT: ".$abnt."<br>";
	echo "Referencia: ".$referencia."<br>";


	//include("conexao.php");

	//$consulta = "INSERT INTO equipamentos( nome, descricao, data_inicio, fk_grupo) 
	//VALUES ('$nome', '$descricao', '$inclusao', '$cod')";
	//$result = $mysqli->query($consulta) or die($mysqli->error);
	//if($result)
	//{
	//	echo "inserido";
	//}

 ?>