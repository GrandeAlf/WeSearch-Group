<?php 
	include("conexao.php");
	session_start();


	$docente = $_SESSION['docente'];
	$hora = $_POST['hora'];
	$pauta = $_POST['pauta'];
	$data = $_POST['data'];


	//2018-11-26 11:30:21
	

	if(strlen($hora) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A hora não pode ser vazio.</div>"; 
		header("location: cadastrar_reunioes.php");
		exit();
	}
	if(strlen($pauta) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A pauta não pode ser vazio.</div>"; 
		header("location: cadastrar_reunioes.php");
		exit();
	}
	if(strlen($data) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data não pode ser vazio.</div>"; 
		header("location: cadastrar_reunioes.php");
		exit();
	}

	$datetime = $data ." ". $hora;
	
	$consulta = "INSERT INTO `reunioes`(`fk_lider`, `data`, `pauta` ) VALUES ('$docente','$datetime', '$pauta')";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Alterado com sucesso!</div>"; 
		header("location: cadastrar_reunioes.php");
	}
 ?>