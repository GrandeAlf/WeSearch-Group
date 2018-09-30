<?php  
	include("conexao.php"); 

	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m-d');


	$con = "SELECT * FROM mudancas_lider WHERE  data_saida = '$date'"; 
    $result = $mysqli->query($con) or die($mysqli->error); 

    while($dados = $result->fetch_array())
    {
    	$mudanca = "UPDATE grupo_pesquisa SET id_lider = '$dados["id_novo_lider"]' WHERE  id_lider = '$dados["id_lider_antigo"]'";
    }

 
	$consulta = "SELECT * FROM usuarios "; 
    $result = $mysqli->query($consulta) or die($mysqli->error); 
 
    if($result->num_rows == 0){ 
    	header("location: cadastro_ADM.php"); 
    } 
    else{ 
    	header("location: login.php"); 
    } 
 
 ?>