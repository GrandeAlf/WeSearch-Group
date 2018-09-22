<?php
    
    session_start();
    include("conexao.php");

    $login = $_POST["login"];
    $senha = $_POST["senha"];


   

    //Criptografa senha para comparar com o banco
    $cript = hash("sha256", $senha);

    //echo $cript . "<br>";

    //efetua consulta no banco, procurando login e senha (já criptografada);
    $consulta = "SELECT prontuario, senha FROM usuarios WHERE prontuario = '$login' AND senha = '$cript'";
    $result = $mysqli->query($consulta) or die($mysqli->error);


    //exibe o retorno da consulta
    /*while ($dado = $result->fetch_array()) {
    echo $dado["prontuario"] . "<br>";
    echo $dado["senha"] . "<br>";
    }*/

    if($result->num_rows == 0){
        //variavel global que exibe a mensagem de erro
        $_SESSION['loginErro'] = "<div class=\"alert alert-danger\" role=\"alert\">Prontuário e(ou) senha inválidos. Tente novamente.</div>";
        //echo "<script> alert(\"teste\");</script>";
        //manda o user de volta a tela login
        header("location: login.php");
        //echo "Prontuário e(ou) senha errados.";
    }
    else{
       
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $cript;
        header('location:inicial.php');
/*
        $consulta = "SELECT prontuario, nome FROM usuarios WHERE prontuario = '$login' AND adm = '1'";

        $result = $mysqli->query($consulta);

        if($result->num_rows == 0)
        {
            $var = 0;
        }
        if($result->num_rows != 0)
        {
             $var = 1;
        }
        header("location:inicial.php?var=".$var);
    
*/
    }



    /*echo("Login: ".$login."<br>");
    echo("Senha: ".$senha);*/
?>