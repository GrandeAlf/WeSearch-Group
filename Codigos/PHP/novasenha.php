<?php 
	include("conexao.php");
	session_start();

	$senha = $_POST['senha'];
	$conf_senha = $_POST['conf_senha'];

	
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

	
	$consulta = "UPDATE usuarios SET senha = '$cript' WHERE chave = '$_SESSION[codigo]'";
    $resultado = $mysqli->query($consulta) or die($mysqli->error);

    $_SESSION['loginErro'] = "<div class=\"alert alert-info\" role=\"alert\">Senha alterada com Sucesso</div>";header("location: login.php");


 ?>