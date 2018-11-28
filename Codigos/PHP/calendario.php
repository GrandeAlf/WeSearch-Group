<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../CSS/calendario.css">


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
        
             
      

        $consulta = "SELECT re.cod_reunioes as cod_reuniao, re.data as data_prevista, re.data_real as data_realizada, re.termino as data_termino, re.pauta as pauta, ata, termino FROM `reunioes` as re WHERE re.fk_lider = '$lider' ";
        $con = $mysqli->query($consulta) or die ($mysqli->error);



      }
      
  ?>

	
	<div class="container">
		<?php 
                            while($dados = $con->fetch_array()){?>

                            	<?php  $dia = date('d', strtotime($dados["data_prevista"]));?>
                            	<?php  $mes = date('m', strtotime($dados["data_prevista"]));?>
                            	<?php  $ano = date('Y', strtotime($dados["data_prevista"]));?>



                             <div class="row row-striped">
								<div class="col-2 text-right">
									<h1 class="display-4"><span class="badge badge-secondary"><?php echo $dia; ?></span></h1>
									<h2 ><?php echo $mes; ?></h2>
									<h2><?php echo $ano; ?></h2>
								</div>
								<div class="col-10">
									<h3 class="text-uppercase"><strong><?php echo $dados["pauta"]; ?></strong></h3>
									<ul class="list-inline">



										<?php
											if($dados["data_realizada"] != NULL)
											{
												$hora = date('H:i', strtotime($dados["data_realizada"])); 
											}
											else
											{

												$hora = date('H:i', strtotime($dados["data_prevista"])); 
												
											} 
										?>
										<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $hora; ?></li>

										<?php 
												if($dados["data_realizada"] != NULL && $dados["termino"] != NULL)
												{
													$horaR = date('d/m/Y', strtotime($dados["data_realizada"]));
													echo "<li class=\"list-inline-item\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i>Data da realização: $horaR </li>";

													$horaT = date('d/m/Y', strtotime($dados["termino"]));
													echo "<li class=\"list-inline-item\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i>Data de término: $horaT</li>";
												}

										 ?>
										
										


									</ul>
									<p><?php echo $dados["ata"]; ?></p>
								</div>
							</div> 
                        <?php } ?>
		
	</div>

	