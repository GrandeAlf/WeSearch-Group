    <!DOCTYPE html>
<html>
<head>
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




	  <link rel="stylesheet" type="text/css" href="../CSS/configs_adm.css">
      <script type="text/javascript" src="../JS/scripts.js"></script> 

	 <?php include("funcoes.php");
     
     $logado = logado();
     $adm = dado();
     if($logado == NULL)
     {
      header("location: inicial.php");
     }
?>

	<title>Gerenciamento</title>
</head>
<body onload="barra()" >
	
	<div id="barra">
		

	</div>
	
		
			
		
  

        <div class="container">


        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Administrativo</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <?php 
                                            if($adm == 1)
                                            {
                                                echo "<span class=\"glyphicon glyphicon-pencil \"></span><a href=\"#\" onclick=\"carrega_pagina('usuarios.php')\">Usuarios</a>";
                                            }
                                            else
                                            {
                                                echo "<span class=\"glyphicon glyphicon-pencil \"></span><a href=\"#\" >Editar Informações</a>";
                                            }
                                         ?>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                            if($adm == 1)
                                            {
                                                echo "<span class=\"glyphicon glyphicon-eye-open\"></span><a href=\"#\" onclick=\"carrega_pagina('permissoes.php')\">Permissões</a>";
                                            }
                                            else
                                            {
                                                echo "<span class=\"glyphicon glyphicon-pencil text-primary\"></span><a href=\"#\" >Newsletters</a>";
                                            }
                                         ?>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file"></span><a href="#" onclick="carrega_pagina('grupos.php')">Grupos de Pesquisa</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Modules</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Alterar Senha</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="well" id="conteudo">
                <h1>
                    Accordion Menu With Icon</h1>
                Admin Dashboard Accordion Menu
            </div>
                
            </div>
        </div>
    </div>
</div>
		
</body>
</html>