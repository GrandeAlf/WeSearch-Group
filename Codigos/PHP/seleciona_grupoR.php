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
     $adm = dado();
     $lider = lider();

     if($logado == NULL || $adm == 1)
     {
      header("location: inicial.php");
     }


     $ano = $_POST["ano"];

     $_SESSION["ano"] = $ano;

?>
    <title>Selecionar Grupo</title>
  </head>
  
<body onload="barra();">
	<?php 
    include ("conexao.php");
	 ?>
   <div id="barra">
     
   </div>

  <div class="wrapper">


    <?php 
          if(isset($_POST["rel_linha"]))
          {
            echo "<form  method=\"post\" action=\"relatorio_linha_pesquisa.php\"> ";
          }
          else if(isset($_POST["rel_docente_grupo"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_docente_grupo.php\"> ";
          }
          else if(isset($_POST["rel_docente_linha"]))
          {

            echo "<form   method=\"post\" action=\"relatorio_docente_linha.php\"> ";
          }
          else if(isset($_POST["rel_discente_grupo"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_discente_grupo.php\"> ";
          }
          else if(isset($_POST["rel_discente_orientador"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_discente_orientador.php\"> ";
          }
          else if(isset($_POST["rel_discente_orientador_linha"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_discente_orientador_linha.php\"> ";
          }
          else if(isset($_POST["rel_tecnico_grupo"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_tecnico_grupo.php\"> ";
          }
          else if(isset($_POST["rel_equip_grupo"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_equipamento.php\"> ";
          }
          else if(isset($_POST["rel_pub_grupo"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_pub_grupo.php\"> ";
          }
          else if(isset($_POST["rel_projeto_fim"]))
          {
            echo "<form   method=\"post\" action=\"relatorio_projetos_fim.php\"> ";
          }

          

     ?>

        


<div class="form-signin">
  


        <h2 class="form-signin-heading" align="center">Selecionar Grupo</h2> 
        
      <select data-live-search="true" name="grupo" class="selectpicker form-control">
         <option disabled selected="selected" >Grupo de Pesquisa</option>
         <?php


                 $consulta = "SELECT id, nome FROM grupo_pesquisa WHERE id_lider = '$lider' and ativacao = 1 and data_inicio like '$ano%'";

                 // $query = "SELECT `cod_grande_area`, `nome_grande_area` FROM `grande_area`";
                 if ($stmt = $mysqli->prepare($consulta)) {

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
      <br><br>

        
        <input class="btn btn-lg btn-block btn-success" type="submit" name="cadastrar" value="Selecionar Grupo"/><br>
        
        
    </form>
  
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