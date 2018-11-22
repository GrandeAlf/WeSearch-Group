<?php 

session_start();
	
	$ano = $_SESSION["ano"];
	$grupo = $_POST["grupo"];

	echo $ano;
	echo $grupo;
 ?>