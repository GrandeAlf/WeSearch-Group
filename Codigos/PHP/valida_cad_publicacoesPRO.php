<?php 
	
	session_start();
	include("conexao.php");

	
	$titulo = $_POST["nome"];
	$tipo = $_POST["tipo"];
	$data = $_POST["inclusao"];
	$projeto = $_SESSION["projeto"];
	$docente = $_SESSION["docente"];
	$linha = $_SESSION["linha"];
	$abnt = $_POST["abnt"];
	$referencia = $_POST["referencia"];

	//echo "Cod: ".$cod;
	echo "Nome: ".$titulo."<br>";
	echo "Tipo: ".$tipo."<br>";
	echo "Data de inclusão: ".$data."<br>";
	echo "Projeto: ".$projeto."<br>";
	echo "Docente: ".$docente."<br>";
	echo "Linha: ".$linha."<br>";
	echo "Referencia ABNT: ".$abnt."<br>";
	echo "Referencia: ".$referencia."<br>";

	if(strlen($titulo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O título não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}
	if(strlen($tipo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O tipo de bolsa não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}
	if(strlen($data) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data da publicação não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}
	if(strlen($projeto) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O projeto não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}
	if(strlen($docente) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O docente não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}
	if(strlen($linha) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A linha de pesquisa não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}
	if(strlen($abnt) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A referência da ABNT não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}
	if(strlen($referencia) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A referência da publicação não pode ser vazio.</div>"; 
		header("location: seleciona_projeto.php");
		exit();
	}



	$consulta = "INSERT INTO `publicacoes`(`titulo`, `tipo`, `data_pub`, `fk_docente`, `fk_linha_docente`, `referencia_abnt`, `referencia_pub`, `fk_projeto`) VALUES ('$titulo','$tipo','$data','$docente','$linha','$abnt','$referencia','$projeto')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result)
	{
		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: seleciona_projeto.php");
	}

 ?>