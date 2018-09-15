<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../CSS/barra.css">
</head>

<?php $prontuario = "USER"; ?>

<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" id="site">WeSearch Group</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="inicial.php?var=0">Inicio</a></li>
      		</ul>
     <ul class="nav navbar-nav navbar-right">
     <?php 
        echo "<li><a href='configs_user.php''>Pronturario: ".$prontuario."</a></li>";
      ?>

                <li><a href='inicial.php''><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
</body>
</html>