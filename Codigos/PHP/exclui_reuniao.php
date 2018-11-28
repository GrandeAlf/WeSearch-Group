<?php 
	include("conexao.php");
	session_start();


	$reuniao = $_GET['id'];

	//echo $reuniao;

	$consulta = "DELETE FROM reunioes WHERE cod_reunioes = '$reuniao'";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Reunião excluida com sucesso!</div>"; 
		header("location: inicial.php");
	}
 ?>
 ?>