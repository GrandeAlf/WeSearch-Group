


<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
       include("funcoes.php");
      //session_start();
     $logado = logado();
     if($logado == NULL)
     {
      header("location: inicial.php");
     }
     else
     {


       $lider = lider();
       $adm = dado(); 
        
             
      
        $consulta = "SELECT gp.id as cod_grupo, gp.nome as grupo , cod_docente, t.nome as docente FROM `grupo_pesquisa` as gp, docentes as t WHERE `id_lider` = '$lider' and fk_cod_grupo = gp.id and t.situacao = '1'";
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
                        <tr class="text-center">
                            
                            <th class="text-center">Nome</th>
                             <th class="text-center">Grupo de Pesquisa</th>
                            
                                
                                <th>Ação</th>
                                <th>Inativar</th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                
                                
                                 <td class="text-center"><?php echo $dados["docente"]; ?></td>
                                 <td class="text-center"><?php echo $dados["grupo"]; ?></td>


                                 <td class="text-center"><?php echo " <a href=\"edita_discente.php?id=".$dados["cod_docente"]."\"><button class=\"btn btn-warning btn-block\">Alterar</button></a>"; ?></td>

                                 <td class="text-center"><?php echo " <a href=\"inativa_docente.php\"><button class=\"btn btn-danger btn-block\">Inativar</button></a>"; ?></td>
                                
                                </tr> 
                        <?php } ?>

                    </tbody>

                </table>
                <?php 


                      
                      //$logado = logado();

                     // if($adm == 1)
                     // {
                        echo " <a href=\"seleciona_grupoD.php\"><button class=\"btn btn-success\">Cadastrar Docente</button></a>";
                     // }  

                 ?>
               
            
    
    </div>    
    
</body>
</html>
