<?php 
	
	

	
	$nome = $_POST["nome"];
	$curso = $_POST["curso"];
	$lattes = $_POST["lattes"];

	
	echo "Nome: ".$nome."<br>";
	echo "Curso: ".$curso."<br>";
	echo "Lattes: ".$lattes."<br>";


	include("conexao.php");

	$consulta = "INSERT INTO `alunos`(`nome`, `curso`, `lattes`) VALUES ('$nome','$curso','$lattes')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result)
	{
		echo "inserido";
	}

 ?>