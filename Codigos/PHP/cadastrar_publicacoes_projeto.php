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

    $projeto = $_POST["projeto"];
    


    $select_projeto = "SELECT `titulo`, `fk_grupo`, `fk_linha`, `bolsa`, `fk_prof_responsavel`, `data_inicio` FROM `projetos_pesquisa` WHERE cod_projeto = '$projeto'";
    $result_projeto = $mysqli->query($select_projeto) or die($mysqli->error);
    $projeto_dados = mysqli_fetch_assoc($result_projeto);

    $docente = $projeto_dados["fk_prof_responsavel"];
     $consulta_docente = "SELECT cod_docente, nome FROM docentes  WHERE cod_docente = '$docente'";
     $result_docente = $mysqli->query($consulta_docente) or die($mysqli->error);
     $docente_nome = mysqli_fetch_assoc($result_docente);

     $linha = $projeto_dados["fk_linha"];
     $consulta_linha = "SELECT cod_especialidade as id, nome_especialidade as linha FROM especialidade WHERE cod_especialidade = '$linha'";
     $result_linha = $mysqli->query($consulta_linha) or die($mysqli->error);
     $linha_nome = mysqli_fetch_assoc($result_linha);


     $_SESSION["projeto"] = $projeto;
     $_SESSION["docente"] = $docente_nome["cod_docente"];
     $_SESSION["linha"] = $linha_nome["id"];

     
?>
    <title>Cadastrar Publicações</title>
  </head>
  
<body onload="barra()">
	
   <div id="barra">
     

   </div>

  <div >
        <form class="form-signin"  method="post" action="valida_cad_publicacoesPRO.php"> 
              
      <h2 class="form-signin-heading" align="center">Publicação de Pesquisa</h2>

      <input  type="text" class="form-control" name="nome" placeholder="Título"   />

      <select  name="tipo" class="selectpicker form-control">
         <option  disabled selected="selected" >Tipo</option>
          <option >Livro</option>
          <option >Capítulo de livro</option>
          <option >Anais de congresso</option>
          <option >Periódicos</option>
      </select>

      <br><br>
      <p>Data da Publicação</p>
      <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="inclusao" id="registration-date" type="date">
                    
                </div>
                

      <br>
      <input  disabled type="text" class="form-control" name="projeto" placeholder="Projeto: <?php echo $projeto_dados['titulo']; ?>"   />

      <input  disabled type="text" class="form-control" name="linha" placeholder="Linha: <?php echo $linha_nome['linha']; ?>"   />

      <input  disabled type="text" class="form-control" name="docente" placeholder="Docente: <?php echo $docente_nome['nome']; ?>"   />


      <textarea style="resize: none" class="form-control" rows="5" name="abnt" placeholder="Referencia da ABNT"></textarea>
       
      <br>

       <textarea style="resize: none" class="form-control" rows="5" name="referencia" placeholder="Referencia da publicação"></textarea>
                

      <br>

        
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