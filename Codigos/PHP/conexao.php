<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "toor";
    $database = "wesearch";

    $mysqli = new mysqli($host, $usuario, $senha, $database);
    
    if($mysqli->connect_errno)
        echo "Erro!";
    else
        echo "Deu certo";
?>