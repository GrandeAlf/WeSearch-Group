<?php 
	session_start();
	include('conexao.php');

	$cod_tecnico = $_SESSION['cod_tecnico'];

	//UPDATE `docentes` SET `situacao` = '0' WHERE `docentes`.`cod_docente` =

	$consulta = "UPDATE tecnicos SET data_fim = CURDATE(), situacao = 0 WHERE cod_tecnico = '$cod_tecnico'";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		
		header("location: inicial.php");
	}
 ?>