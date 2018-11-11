<!doctype html>
<html lang="en">
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/login.css">
       <script type="text/javascript" src="../JS/scripts.js"></script>

    <title>Altera Docente</title>

<?php include("funcoes.php");
      include ("conexao.php");
     
     $logado = logado();
     $adm = dado();
     if($logado == NULL || $adm == 1)
     {
      header("location: inicial.php");
     }
     $cod_docente = $_GET['id'];

    $consulta = "SELECT nome, lattes, atividade_realizada, fk_graduacao, curso, ano_conclusao FROM docentes WHERE cod_docente = '$cod_docente'";
    $result = $mysqli->query($consulta) or die($mysqli->error);

     while($dados = $result->fetch_array()){
?>
    

  </head>
  <body onload="barra()">
    <div id=barra>

    </div>
   <div class="wrapper" >
    <form class="form-signin" method="post" action="valida_edita_docente.php">       
      <h2 class="form-signin-heading" align="center">Alterar dados de Docente</h2>
      <input type="text" class="form-control" name="nome" value="<?php echo $dados["nome"]; ?>" >
      <input type="text" class="form-control" name="lattes" value="<?php echo $dados["lattes"]; ?>"  />
      <input type="text" class="form-control" name="atividade" value="<?php echo $dados["atividade_realizada"]; ?>"  />
      <select class="form-control" name="graduacao">
      <option  selected="selected" value="<?php echo $dados["fk_graduacao"]; ?>" >Sem Alteração</option>
         <?php
            

            /* check connection */
              if ($mysqli->connect_errno) {
                  printf("A conexão falhou: %s\n", $ligacao->connect_error);
                  exit();
              }
                               

                $query = "SELECT cod_graduacao,nome_graduacao FROM `graduacoes`";
                               

                               
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
      <input type="text" class="form-control" name="curso" value="<?php echo $dados["curso"]; ?>"  />
      <input type="text" class="form-control" value="<?php echo $dados["ano_conclusao"]; ?>" name="conclusao" maxlength="6" autocomplete="off">
      
<br>
     
      <input class="btn btn-lg btn-block btn-success" type="submit" name="cadastrar" value="Alterar Dados"/><br>
        
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <?php } ?>
  </body>
</html>