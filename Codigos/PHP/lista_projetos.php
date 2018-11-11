


<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
       include("funcoes.php");
     // session_start();
     $logado = logado();
     if($logado == NULL)
     {
     header("location: inicial.php");
     }
     //else
     //{


       $lider = lider();
       $adm = dado(); 
        
             
      
        $consulta = "SELECT `cod_projeto`, `titulo`, nome FROM `projetos_pesquisa`, grupo_pesquisa WHERE `fk_grupo` = id and id_lider = '$lider'";
        $con = $mysqli->query($consulta) or die ($mysqli->error);
        

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
                                 <td class="text-center"><?php echo $dados["nome"]; ?></td>


                                 <td class="text-center"><?php echo " <a href=\"edita_projeto.php?id=".$dados["cod_projeto"]."\"><button class=\"btn btn-warning btn-block\">Alterar</button></a>"; ?></td>

                                 
                                
                                </tr> 
                        <?php } ?>

                    </tbody>

                </table>
                <?php 


                      
                      //$logado = logado();

                     // if($adm == 1)
                     // {
                        echo " <a href=\"seleciona_grupoPRO.php\"><button class=\"btn btn-success\">Inserir Projeto</button></a>";
                        
                     // }  

                 ?>
               
            
    
    </div>    
    
</body>
</html>
