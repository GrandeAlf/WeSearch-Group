


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
        
             
      

        $consulta = "SELECT gp.id as cod_grupo, gp.nome as grupo , cod_tecnico, t.nome as tecnico FROM `grupo_pesquisa` as gp, tecnicos as t WHERE `id_lider` = '$lider' and fk_cod_grupo = gp.id ";
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
                            
                            <th class="text-center">Nome</th>
                             <th class="text-center">Grupo de Pesquisa</th>
                            
                                
                                <th>Ação</th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                 
                                <td class="text-center"><?php echo $dados["tecnico"]; ?></td>
                                 <td class="text-center"><?php echo $dados["grupo"]; ?></td>

                                 <td class="text-center"><?php echo " <a href=\"seleciona_grupoT.php\"><button class=\"btn btn-warning\">Inativar ou Excluir Técnico</button></a>"; ?></td>
                                
                                </tr> 
                        <?php } ?>

                    </tbody>

                </table>
                <?php 


                      
                      //$logado = logado();

                     // if($adm == 1)
                     // {
                        echo " <a href=\"seleciona_grupoT.php\"><button class=\"btn btn-success\">Cadastrar Técnico</button></a>";
                     // }  

                 ?>
               
            
    
    </div>    
    
</body>
</html>

            