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

function lider()
{
	include("conexao.php");
	$prontuario = logado();

	$consulta = "SELECT `id` FROM `usuarios` WHERE `prontuario` = '$prontuario'";
                               
  	$result = $mysqli->query($consulta) or die($mysqli->error);
  	$dado = mysqli_fetch_assoc($result);

  	$idlider = $dado["id"];

  	return $idlider;
}

function situacao($id)
{
	include("conexao.php");

	$consulta = "SELECT `ativacao` FROM `grupo_pesquisa` WHERE `id` = '$id'";
                               
  	$result = $mysqli->query($consulta) or die($mysqli->error);
  	$dado = mysqli_fetch_assoc($result);

  	return $dado["ativacao"];
}
function inativar($id)
{
	include("conexao.php");

	$consulta = "UPDATE `grupo_pesquisa` SET `ativacao`=0 WHERE `id` = '$id'";
	$result = $mysqli->query($consulta) or die($mysqli->error);

}


 ?>