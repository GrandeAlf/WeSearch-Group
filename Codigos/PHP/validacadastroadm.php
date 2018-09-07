<?php 
	//date_default_timezone_set('America/Sao_Paulo');
	include("conexao.php");
	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$conf_senha = $_POST['conf_senha'];
	$email = $_POST['email'];
	$cod = hash("sha256", $email);

	if(strlen($login) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">O Login não pode ser vazio.</div>"; 
		header("location: cadastro_ADM.php");
		exit();
	}
	$RegExAZ = preg_match('/[A-Z]/', $senha); 
	$RegExaz = preg_match('/[a-z]/', $senha); 
	$RegEx09 = preg_match('/[0-9]/', $senha); 
	$RegExes = preg_match('/[!@#$%&*]/', $senha); 

	if($RegExAZ && $RegExaz && $RegEx09 && $RegExes && strlen($senha) >= 6) 
	{ 
		//echo "ok"; 
	} 
	else 
	{ 
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">A senha usada é inválida.</div>"; 
		header("location: cadastro_ADM.php");
		exit();
	}

	if(strcmp($senha, $conf_senha) != 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">As senhas não são iguais.</div>"; 
		header("location: cadastro_ADM.php");
		exit();
	}

	$cript = hash("sha256", $senha);

	
	$consulta = "INSERT INTO usuarios( prontuario, nome, senha, email, alteracao, adm, chave) 
	VALUES ('$login', 'Admin', '$cript', '$email', CURDATE(), '1', '$cod')";
	$result = $mysqli->query($consulta) or die($mysqli->error);
	if($result){
		echo "inserido";

		header("location: login.php");
	}




 ?>