<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "toor";
    $database = "wesearch";

    $mysqli = new mysqli($host, $usuario, $senha, $database);
    
    if($mysqli->connect_errno)
        echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>