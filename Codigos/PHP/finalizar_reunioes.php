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
      include("conexao.php");

    //$grupo = $_SESSION["grupo"];
    //$docente = $_POST["docente"];
    //$_SESSION["docente"] = $docente;



     //$consulta_docente = "SELECT nome FROM docentes  WHERE cod_docente = '$docente'";
     //$result_docente = $mysqli->query($consulta_docente) or die($mysqli->error);
     //$docente_nome = mysqli_fetch_assoc($result_docente);

    // $consulta_linha = "SELECT cod_especialidade as id, nome_especialidade as linha FROM especialidade, docentes  WHERE cod_especialidade = fk_especialidade and cod_docente = '$docente'";
     //$result_linha = $mysqli->query($consulta_linha) or die($mysqli->error);
     //$linha_nome = mysqli_fetch_assoc($result_linha);

     //$consulta_grupo = "SELECT nome FROM grupo_pesquisa  WHERE id = '$grupo'";
     //$result_grupo = $mysqli->query($consulta_grupo) or die($mysqli->error);
    // $grupo_nome = mysqli_fetch_assoc($result_grupo);
     
    //$_SESSION["linha"] = $linha_nome["id"];
?>
    <title>Cadastrar Reuniões</title>
  </head>
  
<body onload="barra()">
	
   <div id="barra">
     

   </div>

  <div >
        <form class="form-signin"  method="post" action=""> 
              
      <h2 class="form-signin-heading" align="center">Finalizar Reuniões</h2>


      
      <input  type="text" class="form-control" name="hora_inicio" placeholder="Hora de Incio"   />

      <input  type="text" class="form-control" name="hora_termino" placeholder="Hora de Término"   />


      <textarea style="resize: none" class="form-control" rows="5" name="pauta" placeholder="Ata da reunião"></textarea>
       
      <br>

      <input  type="text" class="form-control" name="docentes" placeholder="Marcar docentes"   />

      <input  type="text" class="form-control" name="convidados" placeholder="Convidados que participaram"   />

        
        <input class="btn btn-lg btn-block btn-success" type="submit" name="cadastrar" value="Cadastrar"/><br>
        
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