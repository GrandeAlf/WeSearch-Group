<?php 
	session_start();
	include("conexao.php");

	$cod = $_SESSION['codigo_grupo'];

	if(isset($_POST['linha'])){
		$linha = $_POST['linha'];
	}
	else{
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Você deve selecionar uma linha de pesquisa.</div>"; 
		header("location: ativa_grupo.php?id=$cod");
		exit();
	}


	//unset($_SESSION['codigo_grupo']);

	$email = $_POST['email'];
	$lattes = $_POST['lattes'];
	$desc = $_POST['descricao'];
	$data = $_POST['inclusao'];
	
	if($linha == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Você deve selecionar uma linha de pesquisa.</div>"; 
		header("location: ativa_grupo.php?id=$cod");
		exit();
	}

	if(strlen($email) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O email não pode ser vazio.</div>"; 
		header("location: ativa_grupo.php?id=$cod");
		exit();
	}
	if(strlen($lattes) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O link da lattes não pode ser vazio.</div>"; 
		header("location: ativa_grupo.php?id=$cod");
		exit();
	}
	if(strlen($desc) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A descrição não pode ser vazio.</div>"; 
		header("location: ativa_grupo.php?id=$cod");
		exit();
	}
	if(strlen($data) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data não pode ser vazio.</div>"; 
		header("location: ativa_grupo.php?id=$cod");
		exit();
	}

	$consulta = "UPDATE grupo_pesquisa SET lattes = '$lattes', email = '$email', descricao = '$desc', ativacao = 1 WHERE id = '$cod' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	$consulta2 = "INSERT INTO grupos_linhas( fk_cod_grupo, fk_cod_linha, data_inicio) VALUES ('$cod', '$linha', '$data')";

	$result2 = $mysqli->query($consulta2) or die($mysqli->error);

	if($result && $result2){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: inicial.php");
	}
	
 ?>