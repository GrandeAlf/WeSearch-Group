


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


/*
       $lider = lider();
       $adm = dado(); 
        
             
       if($adm != 1)
       {

        $consulta = "SELECT `id`, `nome`, `sigla` FROM `grupo_pesquisa` WHERE `id_lider` = '$lider'";
       }
       else
       {
        $consulta = "SELECT `id`, `nome`, `sigla` FROM `grupo_pesquisa`";
       }
        
        $con = $mysqli->query($consulta) or die ($mysqli->error);
      }
      */
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
                            
                                
                                <th>Ação</th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            //while($dados = $con->fetch_array()){?>
                             <tr>
                                 
                                <td class="text-center"><?php //echo $dados["nome"]; ?></td>
                                <?php 

                               // $situacao = situacao($dados["id"]);

                               
                                  

                                 ?>
                                 
                                 <?php 

                                 
                                 ?>

                               
                                

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

            