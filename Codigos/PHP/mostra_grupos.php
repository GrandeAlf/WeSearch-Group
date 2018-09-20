<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
        $consulta = "SELECT gp.nome,sigla,id_lider,data_inicio,gp.lattes as link_grupo,u.nome as lider FROM grupo_pesquisa as gp,usuarios as u WHERE ativacao = 1 and id_lider = u.id";
        $con = $mysqli->query($consulta) or die ($mysqli->error);
  ?>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="../CSS/test.css">
    <title></title>
</head>
<body>
 
        <div class="container">
    <div class="row">
        <div class="center-box">
             <?php 
        while($dados = $con->fetch_array()){?>
             

            
                    <div class="borda">
                                <h2><?php echo $dados["nome"]." - ". $dados["sigla"]; ?></h2>
                                <br>
                                <p>Data de inicio do grupo: <?php echo date('d/m/Y', strtotime($dados["data_inicio"])); ?></p>
                                <?php echo "<a href='".$dados["link_grupo"]."'>Link Lattes do Grupo</a>"; ?><br>
                                <p>Lider atual do grupo: <?php echo $dados["lider"]; ?></p>
                                <div class="text">
                                    <p><?php echo ""; ?></p>
                                </div>
                                
                            </div>
                            <br>

             
                            
                                            

                        <?php } ?>  
        </div>
    </div>
</div>
    
  
    
</body>
</html>

            