<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/grupo.css">
       <script type="text/javascript" src="../JS/scripts.js"></script>

    <title>Grupo</title>

    <?php 
      include("conexao.php");
       include("funcoes.php");
     
      $id = $_GET["id"];
             
        $consulta = "SELECT gp.nome,sigla,id_lider,data_inicio,descricao,gp.lattes as link_grupo,u.nome as lider FROM grupo_pesquisa as gp,usuarios as u WHERE gp.id = '$id' and id_lider = u.id";

        $con = $mysqli->query($consulta) or die ($mysqli->error);

        $result = $mysqli->query($consulta) or die($mysqli->error);
        $dado = mysqli_fetch_assoc($result);
       
      

     ?>

  </head>
  <body onload="barra()">
    <div id="barra">
      
    </div>
    
    <div class="wrapper" >
      <form class="form-signin">       
        

        <?php 

        //nome com sigla
        echo "<h2 class=\"form-signin-heading\" align =\"center\">".$dado["nome"]." - ".$dado["sigla"]."</h2>";


        //logo


        //data
        $data = date('d/m/Y', strtotime($dado["data_inicio"]));

        echo "<p align=\"center\">Data de inicio do grupo: ".$data."</p>";


        //curriculo lattes

        echo "<a style=\"text-align:center\" href='".$dado["link_grupo"]."'><p align=\"center\">Link Curriculo Lattes</p></a>";


        echo "<p align=\"center\">Lider atual do grupo: ".$dado["lider"]."</p>";

        $querry = "SELECT `nome_especialidade` as linha FROM `especialidade`,grupos_linhas, grupo_pesquisa WHERE cod_especialidade = fk_cod_linha and fk_cod_grupo = '$id'";
        $code = $mysqli->query($querry) or die ($mysqli->error);
          
          echo "<p align=\"center\">Linhas do grupo: <br>";

              while ($linha = $code->fetch_array()) 
              {
                    echo $linha["linha"]."<br>";
              }
          echo "</p>";


        echo "<br><br><br>";

        echo "<p align=\"justify\">".$dado["descricao"]."</p>";
        

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