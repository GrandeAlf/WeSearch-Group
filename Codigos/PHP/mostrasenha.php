<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TESTE DE LOGIN</title>
</head>
<body>
   
    <?php
        
        $email = $_POST["email"];    
    
        echo("Email: ".$email."<br>");
    
        $novasenha = substr(md5(time()),0,6);
        $nscriptografada = md5(md5($novasenha));
        echo("Nova Senha: ".$novasenha."<br>");
        echo("Senha Criptografada: ".$nscriptografada);
        
      ?>
      
      
      
</body>
</html>