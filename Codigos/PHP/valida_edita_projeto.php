<?php 
	include("conexao.php");
	session_start();

	$pro = $_SESSION['projeto'];
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	
	

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: edita_projeto.php?id=$pro");
		exit();
	}
	if(strlen($tipo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Você deve selecionar o tipo.</div>"; 
		header("location: edita_projeto.php?id=$pro");
		exit();
	}
	
	$consulta = "UPDATE projetos_pesquisa SET titulo = '$nome', bolsa = '$tipo' WHERE cod_projeto = '$pro' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Alterado com sucesso!</div>"; 
		header("location: inicial.php");
	}
 ?>