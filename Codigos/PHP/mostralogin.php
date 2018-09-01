<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TESTE DE LOGIN</title>
</head>
<body>
   
    <?php

    	include("conexao.php");

    	$login = $_POST["login"];
	   	$senha = $_POST["senha"];

        //Criptografa senha para comparar com o banco
        $cript = hash("sha256", $senha);

        //echo $cript . "<br>";

        //eferua consulta no banco, procurando login e senha (já criptografada);
    	$consulta = "SELECT prontuario, senha FROM usuarios WHERE prontuario = '$login' AND senha = '$cript'";
    	$result = $mysqli->query($consulta) or die($mysqli->error);

    	
    	//exibe o retorno da consulta
    	/*while ($dado = $result->fetch_array()) {
    		echo $dado["prontuario"] . "<br>";
    		echo $dado["senha"] . "<br>";
    	}*/

    	if($result->num_rows == 0){
    		echo "Prontuário e(ou) senha errados.";
    	}
        else{
            echo "Achou! Faz login!";
        }

	   	     
    
        /*echo("Login: ".$login."<br>");
        echo("Senha: ".$senha);*/
      ?>
      
      
      
</body>
</html>