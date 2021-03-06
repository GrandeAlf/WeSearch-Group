<!doctype html>
<html lang="en">
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/login.css">

    <title>Cadastro ADM</title>
  </head>
  <body>
   <div class="wrapper" >
    <form class="form-signin" method="post" action="validacadastroadm.php">       
      <h2 class="form-signin-heading">Cadastro de ADM</h2>
      <input type="text" class="form-control" name="login" placeholder="Login"  autofocus="" />
      <input type="email" class="form-control" name="email" placeholder="Email"  autofocus="" />
      <input type="password" class="form-control" name="senha" placeholder="Senha" />
      <input type="password" class="form-control" name="conf_senha" placeholder="Confirmar Senha" />      
        
        <input class="btn btn-lg btn-block btn-success" type="submit" name="cadastrar" value="Cadastrar"/><br>
        <?php 
          session_start();
          if(isset($_SESSION['informaerro'])){
            echo $_SESSION['informaerro'];
            unset($_SESSION['informaerro']);
          }

         ?>
    </form>
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>