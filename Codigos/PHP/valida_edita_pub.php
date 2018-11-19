<?php 
	include("conexao.php");
	session_start();

	$pub = $_SESSION['publicacao'];
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$abnt = $_POST['abnt'];
	$referencia = $_POST['referencia'];
	

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: edita_pub.php?id=$pub");
		exit();
	}
	if(strlen($tipo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Você deve selecionar o tipo.</div>"; 
		header("location: edita_pub.php?id=$pub");
		exit();
	}
	if(strlen($abnt) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A referência da ABNT não pode ser vazia.</div>"; 
		header("location: edita_pub.php?id=$pub");
		exit();
	}
		if(strlen($referencia) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A referência da publicação não pode ser vazia.</div>"; 
		header("location: edita_pub.php?id=$pub");
		exit();
	}

	$consulta = "UPDATE publicacoes SET titulo = '$nome', tipo = '$tipo', referencia_abnt = '$abnt', referencia_pub = '$referencia' WHERE cod_publicacao = '$pub' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Alterado com sucesso!</div>"; 
		header("location: inicial.php");
	}
 ?>