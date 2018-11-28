<?php 
	include("conexao.php");
	session_start();


	$reuniao = $_SESSION['reuniao'];
	$hora_inicio = $_POST['hora_inicio'];
	$hora_termino = $_POST['hora_termino'];
	$ata = $_POST['pauta'];
	$data = $_POST['data'];
	$participantes = $_POST['docentes'];
	$convidados = $_POST['convidados'];


	//2018-11-26 11:30:21
	
	if(strlen($data) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data não pode ser vazio.</div>"; 
		header("location: finalizar_reunioes.php?id=$reuniao");
		exit();
	}

	if(strlen($hora_inicio) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A hora do início não pode ser vazio.</div>"; 
		header("location: finalizar_reunioes.php?id=$reuniao");
		exit();
	}
	if(strlen($hora_termino) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A hora do início não pode ser vazio.</div>"; 
		header("location: finalizar_reunioes.php?id=$reuniao");
		exit();
	}
	if(strlen($ata) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A ata não pode ser vazio.</div>"; 
		header("location: finalizar_reunioes.php?id=$reuniao");
		exit();
	}
	if(strlen($participantes) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Os participantes não podem ser vazio.</div>"; 
		header("location: finalizar_reunioes.php?id=$reuniao");
		exit();
	}

	$datetime_ini = $data ." ". $hora_inicio;
	$datetime_ter = $data ." ". $hora_termino;

	//echo $datetime_ini . "<br>" . $datetime_ter . "<br>" . $ata . "<br>" . $participantes . "<br>" . $convidados . "<br>" . $reuniao;
	
	$consulta = "UPDATE reunioes SET data_real = '$datetime_ini', ata = '$ata', docentes = '$participantes', termino = '$datetime_ter', convidados = '$convidados' WHERE cod_reunioes = '$reuniao' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Reunião finalizada com sucesso!</div>"; 
		header("location: inicial.php");
	}
 ?>