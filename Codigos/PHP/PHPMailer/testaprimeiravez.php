<?php  
	include("conexao.php"); 
 
	$consulta = "SELECT * FROM usuarios "; 
    $result = $mysqli->query($consulta) or die($mysqli->error); 
 
    if($result->num_rows == 0){ 
    	header("location: cadastro_ADM.php"); 
    } 
    else{ 
    	header("location: login.php"); 
    } 
 
 ?>