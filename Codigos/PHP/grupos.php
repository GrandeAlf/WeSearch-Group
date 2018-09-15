


<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
        $consulta = "SELECT id, sigla, nome FROM grupo_pesquisa";
        $con = $mysqli->query($consulta) or die ($mysqli->error);
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
                            
                            <th align="center">Nome</th>
                            <th align="center">Sigla</th>
                            <th align="center">#</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($dados = $con->fetch_array()){?>
                             <tr>
                                 
                                <td align="center"><?php echo $dados["nome"]; ?></td>
                                <td align="center"><?php echo $dados["sigla"]; ?></td>
                                <td align="center"><a href="edita_grupos.php?id=<?php echo $dados["id"]; ?>"><button " class="btn btn-warning">Alterar</button>
                                </td>

                                </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            
    
</body>
</html>

            