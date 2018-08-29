<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TESTE DE LOGIN</title>
</head>
<body>
   
    <?php
      $login = $_POST["email"];
      $senha = $_POST["senha"];
    
    
        echo("Login: ".$login."<br>");
        echo("Senha: ".$senha);
      ?>
      
      
      
</body>
</html>