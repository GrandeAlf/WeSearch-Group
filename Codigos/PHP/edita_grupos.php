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

      $consulta = "SELECT nome, sigla, lattes, email, descricao  FROM grupo_pesquisa WHERE id = '$cod'";
      $result = $mysqli->query($consulta) or die($mysqli->error);
      $dado = mysqli_fetch_assoc($result);
   

	 ?>
   <div id="barra">
     

   </div>

  <div>
        <form class="form-signin"  method="post" action="validaalteracaogrupos.php">       
      <h2 class="form-signin-heading" align="center">Alterar Grupo de Pesquisa</h2>
      Nome:
      <input disabled type="text" class="form-control" name="nome" placeholder="<?php echo $dado["nome"]; ?>"   />
      Sigla:
      <input type="text" class="form-control" name="sigla" placeholder="<?php echo $dado["sigla"] ?>"   />
      Email:
      <input type="email" class="form-control" name="email" placeholder="<?php echo $dado["email"]; ?>"   />
      Curriculo Lattes:
      <input type="text" class="form-control" name="lattes" placeholder="<?php echo $dado["lattes"]; ?>" />

        Descrição do grupo:
        <textarea class="form-control" style="resize: none;" rows="5" name="descricao" placeholder="<?php echo $dado["descricao"]; ?>"></textarea>    
          
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