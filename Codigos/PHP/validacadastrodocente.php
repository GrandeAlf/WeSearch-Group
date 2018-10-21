<?php 
	//date_default_timezone_set('America/Sao_Paulo');
	include("conexao.php");
	session_start();

	$nome = $_POST['nome'];
	$lattes = $_POST['lattes'];
	$atividade = $_POST['atividade'];
	$graduacao = $_POST['graduacao'];
	$curso = $_POST['curso'];
	$ano = $_POST['conclusao'];
	$inclusao = $_POST['inclusao'];
	$grupo = $_SESSION['codigogrupo'];
	$linha = $_POST['linha'];
	//$remocao = $_POST['remocao'];

	

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	if(strlen($lattes) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O link da lattes não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	if(strlen($atividade) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A atividade não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	if(strlen($graduacao) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A escolaridade não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	if(strlen($curso) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O curso não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	if(strlen($ano) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O ano de conclusão não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	if(strlen($inclusao) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data de Inclusão não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	if(strlen($linha) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A linha de pesquisa não pode ser vazio.</div>"; 
		header("location: seleciona_grupoD.php");
		exit();
	}
	
	$consulta = "INSERT INTO docentes( nome, lattes, atividade_realizada, fk_graduacao, curso, ano_conclusao, fk_cod_grupo, fk_especialidade, data_inicio, situacao) 	VALUES ('$nome', '$lattes', '$atividade', '$graduacao', '$curso','$ano', '$grupo', '$linha', '$inclusao', '1')";
	$result = $mysqli->query($consulta) or die($mysqli->error);

	
	if($result){

		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: seleciona_grupoD.php");
	}

	//echo "Nome ".$nome."Lattes ".$lattes."Atividade ".$atividade."Graduacao ".$graduacao."Curso ".$curso."Ano ".$ano."Inclusão ".$inclusao."Remoção ".$remocao;
	


 ?>
 