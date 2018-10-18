<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    
     
       <link rel="stylesheet" type="text/css" href="../CSS/login.css">

    <title>Docente</title>
  </head>
  <body>
    
    <div class="wrapper" >
      <form class="form-signin" method="post" action="validalogin.php"> 
         <div class="text-center">
          <h2 class="form-signin-heading">Docente</h2>

          <!-- Apresentar foto -->
          <h3><i class="fa fa-user fa-4x"></i></h3> 


         </div>   
<br><br><br>        
<div class="text-center">
         <?php 
            Include("conexao.php");

            $id = $_GET["id"];

            $consulta = "SELECT `cod_docente`, `nome`, `lattes`, `atividade_realizada`, `fk_graduacao`, `curso`, `ano_conclusao`, `data_inclusao`, `data_remocao` FROM `docentes` WHERE `cod_docente` = '$id'";



            $con = $mysqli->query($consulta) or die ($mysqli->error);

            $dados = $con->fetch_array();

            $grad = $dados["fk_graduacao"];

            $cgraduacao = "SELECT `nome_graduacao` FROM `graduacoes` WHERE `cod_graduacao` = $grad ";
            $con2 = $mysqli->query($cgraduacao) or die ($mysqli->error);
            $graduacoes = $con2->fetch_array();


            echo "<p>Nome: ".$dados["nome"]."</p> <br>";
            echo "<a href='".$dados["lattes"]."'><p>Link Curriculo Lattes</p></a>";
            echo "<p>Ativiade realizada no grupo: ".$dados["atividade_realizada"]."</p> <br>";
            echo " <p>Graduação: ".$graduacoes["nome_graduacao"]."</p> <br>";
            echo "<p>Curso: ".$dados["curso"]."</p> <br>";
            echo "<p>Ano de conclusão do curso ".$dados["ano_conclusao"]."</p> <br>";
            $inclusao = date('d/m/Y', strtotime($dados["data_inclusao"]));
            echo "<p>Data de inclusão no grupo ".$inclusao."</p> <br>";
            $remocao = date('d/m/Y', strtotime($dados["data_remocao"]));
            echo "<p>Data de remoção no grupo ".$remocao."</p> <br>";

           ?>

</div>
          

          </div>
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