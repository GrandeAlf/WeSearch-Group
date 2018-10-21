<?php 
	session_start();
	include('conexao.php');

	$cod_docente = $_SESSION['cod_docente'];

	//UPDATE `docentes` SET `situacao` = '0' WHERE `docentes`.`cod_docente` =

	$consulta = "UPDATE docentes SET data_fim = CURDATE(), situacao = 0 WHERE cod_docente = '$cod_docente'";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		
		header("location: inicial.php");
	}
 ?>