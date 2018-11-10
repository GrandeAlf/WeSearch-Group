


<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
       include("funcoes.php");
     
     $logado = logado();
     if($logado == NULL)
     {
     header("location: inicial.php");
     }
     


       $lider = lider();
       $adm = dado(); 
        
             
      
        $consulta_grupo = "SELECT `cod_publicacao`, `titulo`, `tipo`, nome FROM `publicacoes`, grupo_pesquisa WHERE `fk_grupo` = id and id_lider = '$lider'";
        $con = $mysqli->query($consulta_grupo) or die ($mysqli->error);

         $consulta_projeto = "SELECT `cod_publicacao`, pub.titulo as publicacao, `tipo`, p.titulo as projeto FROM `publicacoes` as pub, grupo_pesquisa, projetos_pesquisa as p WHERE fk_projeto = cod_projeto and p.fk_grupo = id and id_lider = '$lider'";
        $con2 = $mysqli->query($consulta_projeto) or die ($mysqli->error);
        

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
                            
                            <th class="text-center">Título</th>
                            <th class="text-center">Tipo</th>
                             <th class="text-center">Grupo de Pesquisa</th>

                                
                            <th>Ação</th>
                                
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                
                                 <?php 
                                   
                                  ?>
                                 <td class="text-center"><?php echo $dados["titulo"]; ?></td>
                                 <td class="text-center"><?php echo $dados["tipo"]; ?></td>
                                 <td class="text-center"><?php echo $dados["nome"]; ?></td>



                                 <td class="text-center"><?php //echo " <a href=\"edita_docente.php\"><button class=\"btn btn-warning btn-block\">Alterar</button></a>"; ?></td>

                                 
                                
                                </tr> 
                        <?php } ?>

                    </tbody>

                </table>
                <?php 


                        echo " <a href=\"seleciona_grupoPUB.php\"><button class=\"btn btn-success\">Inserir Publicação a Grupo</button></a>";
                        
                 ?>

                 <br><br>

                 <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr class="text-center">
                            
                            <th class="text-center">Título</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Projeto de Pesquisa</th>
                                
                            <th>Ação</th>
                                
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados2 = $con2->fetch_array()){?>
                             <tr>
                                
                             
                                 <td class="text-center"><?php echo $dados2["publicacao"]; ?></td>
                                 <td class="text-center"><?php echo $dados2["tipo"]; ?></td>
                                 <td class="text-center"><?php echo $dados2["projeto"]; ?></td>



                                 <td class="text-center"><?php //echo " <a href=\"edita_docente.php\"><button class=\"btn btn-warning btn-block\">Alterar</button></a>"; ?></td>

                                 
                                
                                </tr> 
                        <?php } ?>

                    </tbody>

                </table>

                <?php 


                        echo " <a href=\"seleciona_projeto.php\"><button class=\"btn btn-success\">Inserir Publicação Publicação em Projeto</button></a>";

                 ?>
               
            
    
    </div>    
    
</body>
</html>
