


<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
       include("funcoes.php");

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
  ?>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="../CSS/perm.css">
    <title></title>

</head>
<body>


        
    <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr>
                            
                            <th align="center">Nome</th>
                            <th align="center">Sigla</th>
                            
                                
                                <th align="center"></th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                 
                                <td align="center"><?php echo $dados["nome"]; ?></td>
                                <td align="center"><?php echo $dados["sigla"]; ?></td>
                                <?php 
                                if($adm != 1)
                                {

                                  echo "<td align=\"center\"><a href=\"edita_grupos.php?id=".$dados["id"]."\"><button \" class=\"btn btn-warning\">Alterar</button>
                                
                                </td>";

                                }
                                else
                                {
                                  $situacao = situacao($dados["id"]);
                                  if($situacao == 0)
                                  {
                                    echo "<td align=\"center\"><a href=\"\"><button \" class=\"btn btn-danger btn-block\">ATIVAR</button>
                                    </td>";
                                  }
                                  else if($situacao == 1)
                                  {
                                    echo "<td align=\"center\"><a href=\"\"><button \" class=\"btn btn-success btn-block\">INATIVAR</button>
                                    </td>";
                                  }
                                  else if($situacao == 2)
                                  {
                                    echo "<td align=\"center\"><a href=\"\"><button \" class=\"btn btn-warning btn-block\">EXCLUIR</button>
                                
                                </td>";
                                  }
                                  
                                }

                                  

                                 ?>
                                

                                </tr> 
                        <?php } ?>

                    </tbody>

                </table>
                <?php 


                      
                      $logado = logado();

                      if($adm == 1)
                      {
                        echo " <a href=\"cadastro_grupos.php\"><button class=\"btn btn-success\">Cadastrar Grupo</button></a>";
                      }  

                 ?>
               
            
    
</body>
</html>

            