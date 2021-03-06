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

    <title>Cadastro Docentes</title>

<?php include("funcoes.php");
      include ("conexao.php");
     
     $logado = logado();
     $adm = dado();
     if($logado == NULL || $adm == 1)
     {
      header("location: inicial.php");
     }

      $gp = $_POST["grupo"];
      if($gp == 0){
        $_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Selecione um grupo.</div>"; 
        header("location: seleciona_grupoT.php");
        exit();
      }
      $_SESSION['codigogrupo'] = $gp;

     $consulta = "SELECT nome FROM grupo_pesquisa WHERE id = '$gp'";
     $result = $mysqli->query($consulta) or die($mysqli->error);
      $dado = mysqli_fetch_assoc($result);
?>
    

  </head>
  <body onload="barra()">
    <div id=barra>

    </div>
   <div class="wrapper" >
    <form class="form-signin" method="post" action="validacadastrodocente.php">       
      <h2 class="form-signin-heading">Cadastro de Docentes</h2>
      <input type="text" class="form-control" name="nome" placeholder="Nome"  />
      <input type="text" class="form-control" name="lattes" placeholder="Curriculo Lattes" />
      <input type="text" class="form-control" name="atividade" placeholder="Atividade Realizada"  />
      <select class="form-control" name="graduacao">
      <option disabled selected="selected" >Graduação</option>
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
      <input type="text" class="form-control" name="curso" placeholder="Curso"  />
      <input type="text" class="form-control" placeholder="Data de conclusão do curso" name="conclusao" maxlength="6" autocomplete="off">
      <input disabled type="text" class="form-control" name="grupo" placeholder="Grupo de Pesquisa : <?php echo $dado["nome"]; ?>"   />

      <div class="text-center">
      <select data-live-search="true" name="linha" class="selectpicker form-control">
         <option disabled selected="selected" >Linha de Pesquisa</option>
         <?php


                 $query = "SELECT `cod_especialidade`, `nome_especialidade` FROM `especialidade`, `grupos_linhas` WHERE fk_cod_grupo = '$gp' AND `cod_especialidade` = `fk_cod_linha` ";

                 // $query = "SELECT `cod_grande_area`, `nome_grande_area` FROM `grande_area`";
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
</div>
<br>
      <p>Data de Inclusão</p>
      <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="inclusao" id="registration-date" type="date">
                    
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </body>
</html>