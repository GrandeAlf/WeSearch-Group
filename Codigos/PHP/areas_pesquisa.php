


<!DOCTYPE html>
<html>
<head>

  
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<link rel="stylesheet" type="text/css" href="../CSS/perm.css">
    <title></title>


    <?php include("conexao.php");
       include("funcoes.php");
     
    // $logado = logado();
     //if($logado == NULL)
     //{
    //  header("location: inicial.php");
    // }
    // else
    // {



      

        $consulta = "SELECT `cod_especialidade`, `nome_especialidade` FROM `especialidade`";
      
        
        $con = $mysqli->query($consulta) or die ($mysqli->error);
     // }
  ?>

</head>
<body>


        
    <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Código</th>
                            <th class="text-center">Nome</th>
                            <th></th>
                                
                            
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                             <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                 <td class="text-center"><input type="checkbox" name="select"></td>
                                 <td class="text-center"><?php echo $dados["cod_especialidade"]; ?></td>
                                <td class="text-center"><?php echo $dados["nome_especialidade"]; ?></td>
                                <td><?php echo "<a href="."TESTE.php?id=".$dados["cod_especialidade"]."</a>";?><button class="btn btn-warning btn-block">Alterar Linha</button></td>
                                

                                </tr> 
                        <?php } ?>
                      
                    </tbody>

                </table>

                <br>
               
                      <a href=""><button class="btn btn-success">Cadastrar Linha</button></a>

                      <a href=""><button class="btn btn-danger ">Excluir Linhas</button>


               
            
    
</body>
</html>

            