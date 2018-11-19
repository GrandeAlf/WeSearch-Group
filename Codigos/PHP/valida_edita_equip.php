<?php 
	include("conexao.php");
	session_start();

	$equip = $_SESSION['id_equip'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: edita_equip.php?id=$equip");
		exit();
	}
	if(strlen($descricao) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A descrição não pode ser vazio.</div>"; 
		header("location: edita_equip.php?id=$equip");
		exit();
	}
	
	$consulta = "UPDATE equipamentos SET nome = '$nome', descricao = '$descricao' WHERE cod_equipamento = '$equip' ";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Alterado com sucesso!</div>"; 
		header("location: inicial.php");
	}
 ?>