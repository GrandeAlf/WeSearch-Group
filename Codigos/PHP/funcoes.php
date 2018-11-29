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
function verifica_lider_grupo($id_grupo)
{
	include("conexao.php");

	$lider = lider();

	$grupo = $id_grupo;

	$consulta = "SELECT * FROM `grupo_pesquisa` WHERE `id_lider` = '$lider' and id = '$grupo'";
                               
  	$result = $mysqli->query($consulta) or die($mysqli->error);
 
  	if($result->num_rows == 0 )
  	{
  		$retorno = NULL;
  	}
  	else
  		$retorno = 1;
  	
  	return $retorno;
  	
}

function lider_grupo($grupo)
{
	include("conexao.php");
	

	$consulta = "SELECT `id_lider` FROM `grupo_pesquisa` WHERE `id` = '$grupo'";
                               
  	$result = $mysqli->query($consulta) or die($mysqli->error);
  	$dado = mysqli_fetch_assoc($result);

  	$idlider = $dado["id_lider"];

  	return $idlider;
}


function mes($n_mes)
{
	if($n_mes == 1)
	{
		$sigla = "JAN";
	}
	elseif($n_mes == 2)
	{
		$sigla = "FEV";
	}
	elseif($n_mes == 3)
	{
		$sigla = "MAR";
	}
	elseif($n_mes == 4)
	{
		$sigla = "ABR";
	}
	elseif($n_mes == 5)
	{
		$sigla = "MAI";
	}
	elseif($n_mes == 6)
	{
		$sigla = "JUN";
	}
	elseif($n_mes == 7)
	{
		$sigla = "JUL";
	}
	elseif($n_mes == 8)
	{
		$sigla = "AGO";
	}
	elseif($n_mes == 9)
	{
		$sigla = "SET";
	}
	elseif($n_mes == 10)
	{
		$sigla = "OUT";
	}
	elseif($n_mes == 11)
	{
		$sigla = "NOV";
	}
	elseif($n_mes == 12)
	{
		$sigla = "DEZ";
	}

	return $sigla;
}


 ?>