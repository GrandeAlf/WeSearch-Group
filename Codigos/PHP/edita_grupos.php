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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
    
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/login.css">
       <script type="text/javascript" src="../JS/scripts.js"></script>

<?php include("funcoes.php");
     
     $logado = logado();
     if($logado == NULL)
     {
      header("location: inicial.php");
     }
?>
    <title>Alterar Grupo</title>
  </head>
  
<body onload="barra()">
	<?php 
    include ("conexao.php");
    
      
  		$cod = $_GET["id"];

      $_SESSION['codigo_grupo'] = $cod;

      $consulta = "SELECT nome, sigla FROM grupo_pesquisa WHERE id = '$cod'";
      $result = $mysqli->query($consulta) or die($mysqli->error);
      $dado = mysqli_fetch_assoc($result);
   

	 ?>
   <div id="barra">
     

   </div>

	 <div  >
    <form class="form-signin" method="post" action="validaalteracaogrupos.php">       
      <h2 class="form-signin-heading" align="center">Alterar Grupo de Pesquisa</h2>
      <input disabled type="text" class="form-control" name="nome" placeholder="<?php echo $dado["nome"]; ?>"   />
      <input disabled type="text" class="form-control" name="sigla" placeholder="<?php echo $dado["sigla"] ?>"   />
      <input type="email" class="form-control" name="email" placeholder="Email"   />
      <input type="text" class="form-control" name="lattes" placeholder="Lattes" />


        <select class="selectpicker" name="grande_area" id="grande_area" data-live-search="true">
         <option disabled selected="selected" >Grande Area</option>
         <?php
            include ("conexao.php");


                $query = "SELECT `cod_especialidade`, `nome_especialidade` FROM `especialidade`";
                 if ($stmt = $mysqli->prepare($query)) {

                    /* execute statement */
                    $stmt->execute();

                    /* bind result variables */
                    $stmt->bind_result($cod_grande_area, $nome_grande_area);

                    /* fetch values */
                    while ($stmt->fetch()) {        
                        printf ("<option value='%s'>%s</option>\n", $cod_grande_area, $nome_grande_area);
                    }

                /* close statement */
                  $stmt->close();
                }         
                               
                
          ?>

      </select>

      <br>
      	
      	<textarea class="form-control" rows="5" name="descricao" placeholder="Descrição"></textarea>    
          
        <br><br>
        
        <input class="btn btn-lg btn-block btn-success" type="submit" name="cadastrar" value="Alterar"/><br>
        <?php 
          
          if(isset($_SESSION['informaerro'])){
            echo $_SESSION['informaerro'];
            unset($_SESSION['informaerro']);
          }

         ?>
    </form>
  </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>