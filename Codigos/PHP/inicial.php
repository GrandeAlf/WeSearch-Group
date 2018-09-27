<!DOCTYPE html>
<html>
<head>
	<?php include("conexao.php");
        $consulta = "SELECT gp.nome,sigla,id_lider,data_inicio,gp.lattes as link_grupo,u.nome as lider FROM grupo_pesquisa as gp,usuarios as u WHERE ativacao = 1 and id_lider = u.id";
        $con = $mysqli->query($consulta) or die ($mysqli->error);
  ?>


	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/js_1.9/jquery-1.8.2.js"></script>  
    <script type="text/javascript" src="js/js_1.9/jquery-ui-1.9.1.custom.min.js"></script> 




	  <link rel="stylesheet" type="text/css" href="../CSS/test.css">
      <script type="text/javascript" src="../JS/scripts.js"></script> 

	<title>INICIO</title>
</head>


<body onload="barra()">

	<div id="barra">
		
	</div>
	<div class="container">
    <div class="row">
        <div class="center-box">
             <?php 
        while($dados = $con->fetch_array()){?>
             

            
                    <div class="borda">
                                <h2 class="h2"><?php echo $dados["nome"]." - ". $dados["sigla"]; ?></h2>
                                <br>
                                <p>Data de inicio do grupo: <?php echo date('d/m/Y', strtotime($dados["data_inicio"])); ?></p>
                                <?php echo "<a href='".$dados["link_grupo"]."'>Saiba mais</a>"; ?><br>
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