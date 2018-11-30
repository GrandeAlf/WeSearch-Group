<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/grupo.css">
       <link rel="stylesheet" type="text/css" href="../CSS/calendario.css">
       <link rel="stylesheet" type="text/css" href="../CSS/test.css">
       <script type="text/javascript" src="../JS/scripts.js"></script>

    <title>Grupo</title>

    <?php 
      include("conexao.php");
       include("funcoes.php");



     
      $id = $_GET["id"];
      $_SESSION["id_grupo"] = $id;
             
        $consulta = "SELECT gp.nome,sigla,id_lider,data_inicio,descricao,gp.lattes as link_grupo,u.nome as lider FROM grupo_pesquisa as gp,usuarios as u WHERE gp.id = '$id' and id_lider = u.id";

        $con = $mysqli->query($consulta) or die ($mysqli->error);

        $result = $mysqli->query($consulta) or die($mysqli->error);
        $dado = mysqli_fetch_assoc($result);
       
      

     ?>

  </head>
  <body onload="barra()">
    <div id="barra">
      
    </div>
    
  <div class="container">
        <div class="form-signin">      
        

        <?php 

        //nome com sigla
        echo "<h2 class=\"form-signin-heading\" align =\"center\">".$dado["nome"]." - ".$dado["sigla"]."</h2>";


        //logo


        //data
        $data = date('d/m/Y', strtotime($dado["data_inicio"]));

        echo "<p align=\"center\"><b>Data de inicio do grupo: </b>".$data."</p>";


        //curriculo lattes

        echo "<a style=\"text-align:center\" href='".$dado["link_grupo"]."'><p align=\"center\">Link Curriculo Lattes</p></a>";

        //lider
        echo "<p align=\"center\"><b>Lider atual do grupo: </b>".$dado["lider"]."</p>";


          

        

          

          

        //descrição do grupo
        echo "<p align=\"justify\">".$dado["descricao"]."</p>";
        

        ?>  

<!--daqui pra baixo-->

      <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-plus">
                            </span>Docentes</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                        <?php 
                                            //docentes atuais
                                            $select_docente = "SELECT `cod_docente`, `nome` FROM `docentes` WHERE `fk_cod_grupo` = '$id' and `situacao` = 1";
                                            $docent = $mysqli->query($select_docente) or die ($mysqli->error);
                                                  while ($docentes = $docent->fetch_array()) 
                                                  {
                                                        echo "<tr>
                                                                <td>
                                                                    <a style=\"text-align:center\" href='docente.php?id=".$docentes["cod_docente"]."'><p align=\"center\">".$docentes["nome"]."</p></a>
                                                                </td>
                                                              </tr>";
                                                  }
                                         ?>
                            </table>
                        </div>
                    </div>
                </div>
                 <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus">
                            </span>Discentes</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <?php 
                                    //discentes atuais
                                     $select_dicente = "SELECT DISTINCT `cod_aluno`, `nome` FROM `alunos`, projeto_aluno pa, projetos_pesquisa WHERE fk_aluno = cod_aluno and fk_grupo = 9 and pa.data_fim is null";
                                      $dicent = $mysqli->query($select_dicente) or die ($mysqli->error);

                                      while ($dicentes = $dicent->fetch_array()) 
                                        {
                                              echo "<tr>
                                                       <td>
                                                          <p align=\"center\">".$dicentes["nome"]."<br>
                                                          </p>
                                                        </td>
                                                    </tr>";

                                        }
                                 ?>
                            </table>
                        </div>
                    </div>
                </div>
                 <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-plus">

                            </span>Técnicos</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <?php 
                                    $select_tecnico = "SELECT `cod_tecnico`, `nome` FROM `tecnicos` WHERE `fk_cod_grupo` = '$id' and `situacao` = 1";
                                    $tecnico = $mysqli->query($select_tecnico) or die ($mysqli->error);

                                     while ($tecnicos = $tecnico->fetch_array()) 
                                    {
                                          echo "<tr>
                                                  <td>
                                                    <a style=\"text-align:center\" href='tecnico.php?id=".$tecnicos["cod_tecnico"]."'><p align=\"center\">".$tecnicos["nome"]."</p></a>
                                                  </td>
                                                </tr>";
                                    }
                                 ?>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-plus">
                            </span>Equipamentos</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <?php 
                                    //equipamentos
                                    $select_equipamento = "SELECT `cod_equipamento`, `nome` FROM `equipamentos` WHERE `fk_grupo` = '$id' and data_fim is null";
                                    $equip = $mysqli->query($select_equipamento) or die ($mysqli->error);
                                      
                                      

                                          while ($equipamento = $equip->fetch_array()) 
                                          {
                                                echo "<tr>
                                                       <td>
                                                          <p align=\"center\">".$equipamento["nome"]."<br>
                                                         </p>
                                                        </td>
                                                    </tr>";
                                          }
                                 ?>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-plus">
                            </span>Linhas</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <?php 
                                    //linhas de pesquisa
                                    $querry = "SELECT DISTINCT `nome_especialidade` as linha FROM `especialidade`,grupos_linhas, grupo_pesquisa WHERE cod_especialidade = fk_cod_linha and fk_cod_grupo = '$id'";
                                    $code = $mysqli->query($querry) or die ($mysqli->error);
                                      

                                          while ($linha = $code->fetch_array()) 
                                          {
                                                echo "<tr>
                                                       <td>
                                                          <p align=\"center\">".$linha["linha"]."<br>
                                                         </p>
                                                        </td>
                                                    </tr>";
                                          }

                                 ?>
                            </table>
                        </div>
                    </div>
                </div>
                 <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span class="glyphicon glyphicon-plus">
                            </span>Projetos</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <?php 
                                    //projetos de pesquisa
                                     $select_projetos = "SELECT `cod_projeto`, `titulo` FROM `projetos_pesquisa` WHERE `fk_grupo` = '$id'";
                                      $proj = $mysqli->query($select_projetos) or die ($mysqli->error);
                                  

                                        while ($projetos = $proj->fetch_array()) 
                                        {
                                              echo "<tr>
                                                       <td>
                                                          <p align=\"center\">".$projetos["titulo"]."<br>
                                                          </p>
                                                        </td>
                                                    </tr>";
                                        }

                                 ?>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><span class="glyphicon glyphicon-plus">
                            </span>Publicações</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <?php 
                                    //projetos de pesquisa
                                     $select_publicacoes = "SELECT DISTINCT`cod_publicacao`,`referencia_pub` FROM publicacoes WHERE fk_grupo = '$id'";
                                      $pubs = $mysqli->query($select_publicacoes) or die ($mysqli->error);
                                    
                                    echo "<p align=\"center\"><b>Publicações: </b><br>";

                                        while ($publicacoes = $pubs->fetch_array()) 
                                        {
                                              echo "<tr>
                                                       <td>
                                                          <p align=\"center\">".$publicacoes["referencia_pub"]."<br>
                                                          </p>
                                                        </td>
                                                    </tr>";
                                        }
                                 ?>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                
                <br><br>
                                  <div>
                                    
                                    <?php echo "<a href=\"calendario.php\"><button \" class=\"btn btn-primary btn-block\">Calendario de Reuniões</button></a>"; ?>

                                  </div>
                                    

     

</div>
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