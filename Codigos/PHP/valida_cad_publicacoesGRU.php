<?php 
	
	session_start();

	
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


	include("conexao.php");

	$consulta = "INSERT INTO `publicacoes`(`titulo`, `tipo`, `data_pub`, `fk_docente`, `fk_linha_docente`, `referencia_abnt`, `referencia_pub`, `fk_grupo`) VALUES ('$titulo','$tipo','$data','$docente','$linha','$abnt','$referencia','$grupo')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result)
	{
		echo "inserido";
	}

 ?>