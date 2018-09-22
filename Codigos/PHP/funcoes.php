<?php 


session_start();


function logado()
{


  	if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
	{
	  $logado = $_SESSION['login'];

	}
	else
	{
	  $logado = NULL;
	}
	return $logado;
}

function dado()
{	
	include ("conexao.php");
	
	$logado = logado();

  	$consulta = "SELECT `adm` FROM `usuarios` WHERE `prontuario` = '$logado'";
                               
  	$result = $mysqli->query($consulta) or die($mysqli->error);
  	$dado = mysqli_fetch_assoc($result);

  	return $dado["adm"];
}


 ?>