<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "toor";
    $database = "wesearch";

    $mysqli = new mysqli($host, $usuario, $senha, $database);
    
    if($mysqli->connect_errno)
        echo "Falha na Conexão: (".$mysqli->connect_errno. ") ".$mysqli->connect_error;
    /*else
        echo "Deu certo";*/

    //função conecta banco
    /*function BDConecta(){
    	$mysqli = new mysqli($host, $usuario, $senha, $database);
    
	    if($mysqli->connect_errno)
	        echo "Erro com o banco de dados!";
	    else
	        echo "Deu certo";
    }*/

    /*function DBFecha(){
    	mysql_close($mysqli);
    	echo "Fechou Conexão";
    }*/
?>