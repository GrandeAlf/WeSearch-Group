<?php 
	include("conexao.php");
	session_start();

	$cod_docente = $_SESSION['cod_docente'];
	$nome = $_POST['nome'];
	$lattes = $_POST['lattes'];
	$atividade = $_POST['atividade'];
	$graduacao = $_POST['graduacao'];
	$curso = $_POST['curso'];
	$conclusao = $_POST['conclusao'];

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: edita_docente.php");
		exit();
	}
	if(strlen($lattes) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O link da lattes não pode ser vazio.</div>"; 
		header("location: edita_docente.php");
		exit();
	}
	if(strlen($atividade) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A atividade não pode ser vazio.</div>"; 
		header("location: edita_docente.php");
		exit();
	}
	if(strlen($graduacao) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A escolaridade não pode ser vazio.</div>"; 
		header("location: edita_docente.php");
		exit();
	}
	
	if(strlen($curso) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O curso não pode ser vazio.</div>"; 
		header("location: edita_docente.php");
		exit();
	}
	if(strlen($conclusao) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data de conclusão não pode ser vazio.</div>"; 
		header("location: edita_docente.php");
		exit();
	}
	$consulta = "UPDATE docentes SET nome = '$nome', lattes = '$lattes', atividade_realizada = '$atividade', fk_graduacao = '$graduacao', curso = '$curso', ano_conclusao = '$conclusao' WHERE cod_docente = '$cod_docente' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: edita_docente.php");
	}
 ?>