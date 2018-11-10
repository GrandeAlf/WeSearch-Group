


<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
       include("funcoes.php");
     // session_start();
    // $logado = logado();
    // if($logado == NULL)
    // {
      //header("location: inicial.php");
    // }
     //else
     //{


       $lider = lider();
       $adm = dado(); 
        
             
      
        //$consulta = "SELECT gp.id as cod_grupo, gp.nome as grupo , cod_equipamento, e.nome as equipamento FROM `grupo_pesquisa` as gp, equipamentos as e WHERE `id_lider` = '$lider' and fk_grupo = gp.id";
        //$con = $mysqli->query($consulta) or die ($mysqli->error);
        

      //}
      
  ?>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="../CSS/perm.css">
    <title></title>

</head>
<body>


    <div id = "conteudo">
      <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr class="text-center">
                            
                            <th class="text-center">Nome</th>
                             <th class="text-center">Grupo de Pesquisa</th>
                            
                                
                                <th>Ação</th>
                                
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            //while($dados = $con->fetch_array()){?>
                             <tr>
                                
                                 <?php 
                                    //$_SESSION['cod_docente'] = $dados['cod_docente'];
                                  ?>
                                 <td class="text-center"><?php //echo $dados["equipamento"]; ?></td>
                                 <td class="text-center"><?php //echo $dados["grupo"]; ?></td>


                                 <td class="text-center"><?php //echo " <a href=\"edita_docente.php\"><button class=\"btn btn-warning btn-block\">Alterar</button></a>"; ?></td>

                                 
                                
                                </tr> 
                        <?php //} ?>

                    </tbody>

                </table>
                <?php 


                      
                      //$logado = logado();

                     // if($adm == 1)
                     // {
                        echo " <a href=\"seleciona_grupoPUB.php\"><button class=\"btn btn-success\">Inserir Publicação a Grupo</button></a>";
                        echo " <a href=\"seleciona_projeto.php\"><button class=\"btn btn-success\">Inserir Publicação em Projeto</button></a>";
                     // }  

                 ?>
               
            
    
    </div>    
    
</body>
</html>
