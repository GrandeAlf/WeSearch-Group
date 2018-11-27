


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
     else
     {


       $lider = lider();
       $adm = dado(); 
        
             
      

        $consulta = "SELECT gp.id as cod_grupo, gp.nome as grupo , cod_tecnico, t.nome as tecnico FROM `grupo_pesquisa` as gp, tecnicos as t WHERE `id_lider` = '$lider' and fk_cod_grupo = gp.id and t.situacao = '1'";
        $con = $mysqli->query($consulta) or die ($mysqli->error);



      }
      
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
                        <tr>
                            
                            <th class="text-center">Grupo</th>
                             <th class="text-center">Data</th>
                            
                                
                                <th>Pauta</th>
                                <th></th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            //while($dados = $con->fetch_array()){?>
                             <tr>
                                 
                                <td class="text-center"><?php //echo $dados["tecnico"]; ?></td>
                                 <td class="text-center"><?php //echo $dados["grupo"]; ?></td>

                                 <td class="text-center"><?php echo " <a href=\"finalizar_reunioes.php\"><button class=\"btn btn-primary btn-block\">Finalizar Reunião</button></a>"; ?></td>

                                 <td class="text-center"><?php echo " <a href=\"#\"><button class=\"btn btn-warning btn-block\">Excluir</button></a>"; ?></td>
                                
                                </tr> 
                        <?php //} ?>

                    </tbody>

                </table>
                <?php 


                      
                      //$logado = logado();

                     // if($adm == 1)
                     // {
                        echo " <a href=\"cadastrar_reunioes.php\"><button class=\"btn btn-success\">Cadastrar Reunião</button></a>";
                     // }  

                 ?>
               
            
    
    </div>    
    
</body>
</html>

            