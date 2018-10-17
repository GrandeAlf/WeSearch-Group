<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<select>
		 <?php
            include ("conexao.php");

            /* check connection */
              if ($mysqli->connect_errno) {
                  printf("A conexão falhou: %s\n", $ligacao->connect_error);
                  exit();
              }
                               

                $query = "SELECT cod_grande_area,nome_grande_area FROM `grande_area` ";
                               

                               
                if ($stmt = $mysqli->prepare($query)) {

                    /* execute statement */
                    $stmt->execute();

                    /* bind result variables */
                    $stmt->bind_result($id, $nome);

                    /* fetch values */
                    while ($stmt->fetch()) {        
                        printf ("<option value='%s'>%s</option>\n", $id, $nome);
                    }

                /* close statement */
                  $stmt->close();
                }                     
          ?>

      </select>
</body>
</html>