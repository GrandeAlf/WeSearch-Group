<?php
	date_default_timezone_set('America/Sao_Paulo');
	include("conexao.php");
	session_start();

	$cod = $_GET['texto'];
	$_SESSION['codigo'] = $cod;
	
	$consulta = "SELECT data FROM links WHERE chave = '$cod'";
   	$result = $mysqli->query($consulta) or die($mysqli->error);

   	while($dado = $result->fetch_array()){
   		echo $dado['data'] . "<br>";
   		$dataexpira = date('Y-m-d H:i:s', strtotime('- 10 minutes'));
   		echo $dataexpira;

   		if($dado['data'] < $dataexpira){
   			$_SESSION['loginErro'] = "<div class=\"alert alert-danger\" role=\"alert\">Link expirado. Solicite novo Link</div>";
   			header("location: login.php");
   			exit();
   		}
   		else{
   			header("location: telanovasenha.php");
   		}

   	}

 ?>