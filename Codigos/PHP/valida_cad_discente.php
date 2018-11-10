<?php 
	include("conexao.php");
		
	$nome = $_POST["nome"];
	$curso = $_POST["curso"];
	$lattes = $_POST["lattes"];

	
	echo "Nome: ".$nome."<br>";
	echo "Curso: ".$curso."<br>";
	echo "Lattes: ".$lattes."<br>";

	if(strlen($nome) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O nome não pode ser vazio.</div>"; 
		header("location: cadastrar_discente.php");
		exit();
	}
	if(strlen($curso) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O curso não pode ser vazio.</div>"; 
		header("location: cadastrar_discente.php");
		exit();
	}
	if(strlen($lattes) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O link da Lattes não pode ser vazio.</div>"; 
		header("location: cadastrar_discente.php");
		exit();
	}



	$consulta = "INSERT INTO `alunos`(`nome`, `curso`, `lattes`) VALUES ('$nome','$curso','$lattes')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result)
	{
		$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Cadastro feito com sucesso!</div>"; 
		header("location: cadastrar_discente.php");
	}

 ?>