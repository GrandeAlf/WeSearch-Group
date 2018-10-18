<?php 
	//date_default_timezone_set('America/Sao_Paulo');
	include("conexao.php");
	session_start();

	$nome = $_POST['nome'];
	$lattes = $_POST['lattes'];
	$atividade = $_POST['atividade'];
	$graduacao = $_POST['graduacao'];
	$curso = $_POST['curso'];
	$ano = $_POST['ano'];
	$inclusao = $_POST['inclusao'];
	$remocao = $_POST['remocao'];

	
	$consulta = "INSERT INTO docentes( nome, lattes, atividade_realizada, fk_graduacao, curso, ano_conclusao, data_inclusao, data_remocao) 
	VALUES ('$nome', '$lattes', '$atividade', '$graduacao', '$curso','$ano','$inclusao','$remocao')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: cadastro_docente.php");
	}

	//echo "Nome ".$nome."Lattes ".$lattes."Atividade ".$atividade."Graduacao ".$graduacao."Curso ".$curso."Ano ".$ano."Inclusão ".$inclusao."Remoção ".$remocao;
	


 ?>
 