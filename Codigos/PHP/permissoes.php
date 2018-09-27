<?php include("funcoes.php");
     
     $logado = logado();
     if($logado == NULL)
     {
      header("location: inicial.php");
     }
?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="../CSS/perm.css">




            <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr>
                            
                            <th align="center">Nome</th>
                            <th align="center">Senha</th>
                            <th align="center">Permissão</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Usuario 1</td>
                            <td align="center"><button class="btn btn-warning btn-block">Alterar Senha</button></td>
                            <td ><label class="switch ">
          <input type="checkbox" class="default">
          <span class="slider round"></span>
        </label></td>
                        </tr>
                    </tbody>
                </table>
            