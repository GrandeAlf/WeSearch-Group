<?php 
	include("conexao.php");
	session_start();

	$id = $_SESSION['aluno_id'];
	$nome = $_POST['nome'];
	$lattes = $_POST['lattes'];
	$curso = $_POST['curso'];
	
	

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: edita_discente.php?id=$id");
		exit();
	}
	if(strlen($lattes) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O link da Lattes não pode ser vazio.</div>"; 
		header("location: edita_discente.php?id=$id");
		exit();
	}
	if(strlen($curso) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O curso não pode ser vazia.</div>"; 
		header("location: edita_discente.php?id=$id");
		exit();
	}
	
	$consulta = "UPDATE alunos SET nome = '$nome', curso = '$tipo', lattes = '$lattes' WHERE cod_aluno = '$id' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Alterado com sucesso!</div>"; 
		header("location: inicial.php");
	}
 ?>