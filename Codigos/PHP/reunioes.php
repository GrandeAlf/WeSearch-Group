


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
        
             
      

        $consulta = "SELECT re.cod_reunioes as cod_reuniao, re.data as data_prevista, re.data_real as data_realizada, re.termino as data_termino, re.pauta as pauta FROM `reunioes` as re WHERE re.fk_lider = '$lider' ";
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
                            
                            <th class="text-center">Data Prevista</th>
                             <th class="text-center">Data Realizada</th>
                             <th class="text-center">Data Término</th>
                            
                                
                                <th>Pauta</th>
                                <th></th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                 
                                <td class="text-center"><?php echo $dados["data_prevista"]; ?></td>
                                 <td class="text-center"><?php echo $dados["data_realizada"]; ?></td>
                                 <td class="text-center"><?php echo $dados["data_termino"]; ?></td>

                                 <td class="text-center"><?php
                                                                if(strlen($dados["data_termino"]) == 0){
                                                                    echo " <a href=\"finalizar_reunioes.php?id=".$dados["cod_reuniao"]."\"><button class=\"btn btn-primary btn-block\">Finalizar Reunião</button></a>"; 
                                                                }
                                                                else{
                                                                    echo $dados["pauta"];
                                                                } 
                                                            ?></td>

                                 <td class="text-center"><?php 
                                                                if(strlen($dados["data_termino"]) == 0){
                                                                    echo " <a href=\"exclui_reuniao.php?id=".$dados["cod_reuniao"]."\"><button class=\"btn btn-warning btn-block\">Excluir</button></a>";
                                                                }

                                                            ?></td>
                                
                                </tr> 
                        <?php } ?>

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

            