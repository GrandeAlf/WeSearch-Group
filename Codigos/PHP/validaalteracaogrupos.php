<?php 
	session_start();
	include("conexao.php");

	$cod = $_SESSION['codigo_grupo'];

	//unset($_SESSION['codigo_grupo']);

	$email = $_POST['email'];
	$lattes = $_POST['lattes'];
	$desc = $_POST['descricao'];

	if(strlen($email) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O email não pode ser vazio.</div>"; 
		header("location: edita_grupos.php?id=$cod");
		exit();
	}
	if(strlen($lattes) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O link da lattes não pode ser vazio.</div>"; 
		header("location: edita_grupos.php?id=$cod");
		exit();
	}
	if(strlen($desc) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A descrição não pode ser vazio.</div>"; 
		header("location: edita_grupos.php?id=$cod");
		exit();
	}

	$consulta = "UPDATE grupo_pesquisa SET lattes = '$lattes', email = '$email', descricao = '$desc', ativacao = 1 WHERE id = '$cod' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: inicial.php");
	}
	
 ?>