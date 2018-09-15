<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">email</th>
      <th scope="col">senha</th>

    </tr>
  </thead>
<tbody>
        <?php 
        include("conexao.php");
        $sql = "SELECT nome, sigla FROM grupo_pesquisa";
        $resultado = mysqli_query($mysqli,$sql);

        while($dados = mysqli_fetch_array($resultado)){
          $email = $dados['email'];
          $senha = $dados['senha']; ?>
         <tr>
              <th scope="row"></th>
              <td><?php $email ?></td>
              <td><?php $senha ?></td>

            </tr> 
         <?php } ?>
 </tbody>
</table>
  </div>
</body>
</html>