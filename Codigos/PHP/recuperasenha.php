<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
     
       <link rel="stylesheet" type="text/css" href="../CSS/recuperasenha.css">

    <title>Recuperar Senha</title>
  </head>
  <body>
   
   <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="recovery-panel panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Recuperação de Senha</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="mostrasenha.php">
                <fieldset>
                    <input id="textinput" name="email" placeholder="email@email.com" class="form-control input-md" required="" type="email">
                    <span class="help-block">Insira o email cadastrado no sistema</span>       
                     
                    <button id="recupera" name="recupera" class="btn btn-success" type="submit">Recuperar</button>
                    <button id="cancela" name="cancela" class="btn btn-danger" onclick="Cancela_rsenha()">Cancelar</button>
                </fieldset>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../JS/scripts.js"></script>
       
  </body>
</html>