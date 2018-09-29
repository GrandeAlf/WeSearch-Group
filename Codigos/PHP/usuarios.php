


<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
       include("funcoes.php");
     
     $logado = logado();
      $adm = dado();
     if($logado == NULL || $adm != 1)
     {
      header("location: inicial.php");
     }
     else
     {      
             
        $consulta = "SELECT `id`, `nome`, `prontuario`, `lattes`, `email`, `alteracao` FROM `usuarios` WHERE `adm` = 0";
       
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


        
    <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr>
                            
                            <th align="center">Prontuario</th>
                            <th align="center">Nome</th>
                            <th align="center">Email</th>
                            <th align="center">Lattes</th>                       
                            <th align="center">Alteração</th>
                            <th align="center"></th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                 
                                <td align="center"><?php echo $dados["prontuario"]; ?></td>
                                <td align="center"><?php echo $dados["nome"]; ?></td>
                                <td align="center"><?php echo $dados["email"]; ?></td>
                                <td align="center"><?php echo "<a href='".$dados["lattes"]."'>Curriculo Lattes</a>"; ?></td>
                                <td align="center"><?php echo date('d/m/Y', strtotime($dados["alteracao"])); ?></td>

                                <?php echo "<td align=\"center\"><a href=\"cadastro_user.php\"><button \" class=\"btn btn-warning btn-block\">Nova Senha</button>
                                    </td>"; ?>
                                
                                

                                </tr> 
                        <?php } ?>

                    </tbody>

                </table>

                <a href="cadastro_grupos.php"><button class="btn btn-success">Novo Usuario</button></a>
                
               
            
    
</body>
</html>

            