<?php 
	session_start();
	include("conexao.php");

	if(isset($_POST['linha'])){
		$linha = $_POST['linha'];
	}
	else{
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Você deve selecionar um grupo ou uma linha de pesquisa.</div>"; 
		header("location: vincular_linhas.php");
		exit();
	}
	
	$desc = $_POST['descricao'];
	$data = $_POST['data'];
	$grupo = $_POST['idgrupo'];

	
	if(strlen($data) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data não pode ser vazio.</div>"; 
		header("location: vincular_linhas.php");
		exit();
	}
	if(strlen($desc) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A Descrição não pode ser vazio.</div>"; 
		header("location: vincular_linhas.php");
		exit();
	}

	$consulta2 = "INSERT INTO grupos_linhas( fk_cod_grupo, fk_cod_linha, data_inicio, descricao) VALUES ('$grupo', '$linha', '$data', '$desc')";

	$result2 = $mysqli->query($consulta2) or die($mysqli->error);

	if($result2){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: vincular_linhas.php");
	}

 ?>