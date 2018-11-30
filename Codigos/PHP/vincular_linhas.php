<!DOCTYPE html>
<html>
<head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
    
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/login.css">
       <script type="text/javascript" src="../JS/scripts.js"></script>
  </head>
   

<?php include("funcoes.php");
     
     $logado = logado();
     $lider = lider();
     $adm = dado();

     if($logado == NULL || $adm == 1)
     {
      header("location: inicial.php");
     }


     $grupo = $_POST["grupo"];
     $_SESSION["grupo"] = $grupo;

?>
    <title>Vincular Linha</title>
  </head>
  
<body onload="barra();">
	<?php 
    include ("conexao.php");
	 ?>
   <div id="barra">
     
   </div>

  <div class="wrapper">
        <form  class="form-signin" method="post" action="valida_vincular_linha.php"> 
        <h2 class="form-signin-heading" align="center">Vincular Linha</h2>      
          
        <div class="text-center">
              <select data-live-search="true" name="linha" class="selectpicker form-control">
                 <option disabled selected="selected" >Linha de Pesquisa</option>
                 <?php


                         $query = "SELECT cod_especialidade, nome_especialidade FROM especialidade e WHERE e.cod_especialidade NOT IN (SELECT fk_cod_linha FROM grupos_linhas where fk_cod_grupo = '$grupo')";

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
      <p>Data de Inclusão da Linha de Pesquisa</p>
      <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="data" id="registration-date" type="date">
                    
                </div>
<br><br>
<textarea class="form-control" rows="5" name="descricao" placeholder="Descrição da linha de pesquisa"></textarea> 

        <br><br>
        
        <input class="btn btn-lg btn-block btn-success" type="submit" name="cadastrar" value="Vincular"/><br>

        <?php 
          
          if(isset($_SESSION['informaerro'])){
            echo $_SESSION['informaerro'];
            unset($_SESSION['informaerro']);
          }

         ?>
       
    </form>
      </div>
    </div>
    
  </div>

	 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
</body>
</html>