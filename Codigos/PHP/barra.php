
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../CSS/EstiloCSS.css">

<?php  
		

    session_start();
    $prontuario = $_SESSION['login'];
    $x = $_SESSION['barra'];

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" id="site">WeSearch Group</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="inicial.php">Inicio</a></li>
<?php
      		if($x == 1)
      		{

      			echo "
      					<li><a href='#''>Grupo de Pesquisa</a></li>
      					<li><a href='#''>Relatorios</a></li>
      					";
      		}
  ?>
      
    </ul>
     <ul class="nav navbar-nav navbar-right">
<?php 
        if($x == 1)
        {

          echo "<li><a href='#''>Pronturario: ".$prontuario."</a></li>
                <li><a href='cadastro_ADM.php''><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
         
              ";
        }
        else
          echo "<li><a href='login.php''><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";


  ?>

 		</ul>
   		
    	
  </div>
</nav>
  
<div class="container">
  
</div>
