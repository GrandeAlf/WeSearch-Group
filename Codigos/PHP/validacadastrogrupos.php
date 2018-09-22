<?php 
	//date_default_timezone_set('America/Sao_Paulo');
	include("conexao.php");
	session_start();

	$nome = $_POST['nome'];
	$sigla = $_POST['sigla'];
	$data = $_POST['registration_date'];
	$lider = $_POST['lider'];

	
	
	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: cadastro_grupos.php");
		exit();
	}
	elseif (strlen($sigla) == 0) {
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A sigla não pode ser vazio.</div>"; 
		header("location: cadastro_grupos.php");
		exit();
	}
	elseif (strlen($data) == 0) {
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data não pode ser vazia.</div>"; 
		header("location: cadastro_grupos.php");
		exit();
	}
	elseif(is_null($lider)){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O lider não pode ser vazio.</div>"; 
		header("location: cadastro_grupos.php");
		exit();
	}
	else{
		$consulta = "INSERT INTO grupo_pesquisa(nome, sigla, data_inicio, ativacao, id_lider) 
		VALUES ('$nome', '$sigla', '$data', '2', '$lider')";
		$result = $mysqli->query($consulta) or die($mysqli->error);
		if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Grupo inserido com sucesso!</div>"; 
		header("location: cadastro_grupos.php");

		
	}
	}
	
	
	




 ?>