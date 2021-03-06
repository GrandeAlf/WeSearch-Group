<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/login.css">
       <script type="text/javascript" src="../JS/scripts.js"></script>

       <?php include("funcoes.php");
              include("conexao.php");
     
     $logado = logado();
     $adm = dado();
     if($logado == NULL || $adm == 1)
     {
      header("location: inicial.php");
     }

     $idgrupo = $_GET["id"];
     $_SESSION['idgrupo'] = $idgrupo;

     $consulta = "SELECT gp.id_lider as lideratual, u.nome, gp.nome as grupo FROM grupo_pesquisa as gp, usuarios as u WHERE id_lider = u.id and gp.id = '$idgrupo'";

     $result = $mysqli->query($consulta) or die($mysqli->error);
      $dado = mysqli_fetch_assoc($result);

      $_SESSION["lideratual"] = $dado["lideratual"];


?>

    <title>Altera Líder</title>
  </head>
  <body onload="barra()">

    <div id="barra">
      

    </div>
    
    <div class="wrapper" >
      <form class="form-signin" method="post" action="valida_altera_lider.php">       
        <h2 class="form-signin-heading">Altera Líder</h2>

        <!-- input com nome do lider atual desabilitado --> 

        <input type="text" disabled class="form-control" name="grupo" <?php echo "value='".$dado["grupo"]."'"; ?>  autofocus="" />

         <input type="text" disabled class="form-control" name="lideratual" <?php echo "value='".$dado["nome"]."'"; ?>  autofocus="" />

         Data de saída do lider atual:
        <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="data_saida" id="registration-date" type="date">
                    
                </div>
                <br>
                <select class="form-control" name="lider">
         <option disabled selected="selected" >Novo Lider</option>
         <?php

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
          Data de entrada do novo lider:
          <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="data_novo" id="registration-date" type="date">
                    
                </div>
                <br>
                <br>    
          
          <button class="btn btn-lg btn-block btn-success" type="submit">Alterar</button><br>

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