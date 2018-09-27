<!doctype html>
<html lang="en">
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/login.css">
       <script type="text/javascript" src="../JS/scripts.js"></script>


       
<?php include("funcoes.php");
     
     $logado = logado();
     $adm = dado();
     if($logado == NULL || $adm != 1)
     {
      header("location: inicial.php");
     }
?>

    <title>Cadastro Grupo de Pesquisa</title>


    
  </head>
  <body onload="barra()">

    <div id="barra">
      

    </div>

   <div class="wrapper" >
    <form class="form-signin" method="post" action="validacadastrogrupos.php">       
      <h2 class="form-signin-heading" align="center">Cadastro de Grupo de Pesquisa</h2>
      <input type="text" class="form-control" name="nome" placeholder="Nome do Grupo de Pesquisa"  autofocus="" />
      <input type="text" class="form-control" name="sigla" placeholder="Sigla" />
      <select class="form-control" name="lider">
         <option disabled selected="selected" >Lider de Pesquisa</option>
         <?php
            include ("conexao.php");

            /* check connection */
              if ($mysqli->connect_errno) {
                  printf("A conexão falhou: %s\n", $ligacao->connect_error);
                  exit();
              }
                               

                $query = "SELECT id,nome FROM `usuarios` WHERE adm != 1";
                               

                               
                if ($stmt = $mysqli->prepare($query)) {

                    /* execute statement */
                    $stmt->execute();

                    /* bind result variables */
                    $stmt->bind_result($id, $nome);

                    /* fetch values */
                    while ($stmt->fetch()) {        
                        printf ("<option value='%s'>%s</option>\n", $id, $nome);
                    }

                /* close statement */
                  $stmt->close();
                }                     
          ?>

      </select>

      <br>
      <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="registration_date" id="registration-date" type="date">
                    
                </div>
                <br>
        <input class="btn btn-lg btn-block btn-success" type="submit" name="cadastrar" value="Cadastrar"/><br>
        <?php 
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