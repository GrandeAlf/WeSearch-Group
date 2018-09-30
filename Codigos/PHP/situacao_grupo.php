<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="../CSS/test.css">
<!------ Include the above in your HEAD tag ---------->
<?php include ("funcoes.php");
	  include ("conexao.php");

	  $cod = $_GET["cod"];
	  $id = $_GET["id"];

	  if($cod == 0)
	  {
	  	$consulta = "UPDATE `grupo_pesquisa` SET `ativacao`=0 WHERE `id` = '$id'";
		$result = $mysqli->query($consulta) or die($mysqli->error);
		if($result)
		{
		header("location: configs.php");
		}
	  }
	  else if($cod == 1)
	  {
	  	$consulta = "UPDATE `grupo_pesquisa` SET `ativacao`=1 WHERE `id` = '$id'";
		$result = $mysqli->query($consulta) or die($mysqli->error);
		if($result)
		{
		header("location: configs.php");
		}
	  }
	  else if($cod == 2)
	  {
	  	$consulta = "DELETE FROM `grupo_pesquisa` WHERE `id` = '$id'";
		$result = $mysqli->query($consulta) or die($mysqli->error);
		if($result)
		{
		header("location: configs.php");
		}
	  }

	    

	
?>
