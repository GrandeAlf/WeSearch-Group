<?php 
	
	session_start();
	include("conexao.php");

	//$cod = $_SESSION['cod'];
	$titulo = $_POST["nome"];
	$tipo = $_POST["tipo"];
	$data = $_POST["inclusao"];
	$grupo = $_SESSION["grupo"];
	$docente = $_SESSION["docente"];
	$linha = $_SESSION["linha"];
	$aluno = $_POST["orientado"];


	

	//echo "Cod: ".$cod;
	echo "Nome: ".$titulo."<br>";
	echo "Tipo: ".$tipo."<br>";
	echo "Data de inclusão: ".$data."<br>";
	echo "Grupo: ".$grupo."<br>";
	echo "Docente: ".$docente."<br>";
	echo "Linha: ".$linha."<br>";
	echo "Orientado: ".$aluno."<br>";

	if(strlen($titulo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O título não pode ser vazio.</div>"; 
		header("location: seleciona_grupoPRO.php");
		exit();
	}
	if(strlen($tipo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O tipo de bolsa não pode ser vazio.</div>"; 
		header("location: seleciona_grupoPRO.php");
		exit();
	}
	if(strlen($data) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A data não pode ser vazio.</div>"; 
		header("location: seleciona_grupoPRO.php");
		exit();
	}
	if(strlen($grupo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O grupo não pode ser vazio.</div>"; 
		header("location: seleciona_grupoPRO.php");
		exit();
	}
	if(strlen($docente) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O docente não pode ser vazio.</div>"; 
		header("location: seleciona_grupoPRO.php");
		exit();
	}
	if(strlen($linha) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A linha de pesquisa não pode ser vazio.</div>"; 
		header("location: seleciona_grupoPRO.php");
		exit();
	}
	if(strlen($aluno) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O aluno não pode ser vazio.</div>"; 
		header("location: seleciona_grupoPRO.php");
		exit();
	}


	$consulta = "INSERT INTO `projetos_pesquisa`(`titulo`, `fk_grupo`, `fk_linha`, `bolsa`, `fk_prof_responsavel`, `data_inicio`) VALUES ('$titulo','$grupo','$linha','$tipo','$docente','$data')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	

	$select = "SELECT `cod_projeto` FROM projetos_pesquisa WHERE `titulo` = '$titulo' and `fk_grupo` = '$grupo' and `fk_linha` = '$linha' and `bolsa` = '$tipo' and `fk_prof_responsavel` = '$docente' and `data_inicio` = '$data'";
	$con = $mysqli->query($select) or die ($mysqli->error);
	$dados = $con->fetch_array();

	$cod = $dados["cod_projeto"];

	$consulta2 = "INSERT INTO `projeto_aluno`(`fk_projeto`, `fk_aluno`, `data_inicio`) VALUES ('$cod','$aluno','$data')";
	$result2 = $mysqli->query($consulta2) or die($mysqli->error);





	if($result && $result2)
	{
		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro Inserido com sucesso!</div>"; 
		header("location: seleciona_grupoPRO.php");
	}

 ?>