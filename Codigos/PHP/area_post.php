<?php 
	include ("conexao.php");

	$cod_grande_area = $_REQUEST['cod_grande_area'];

	if ($mysqli->connect_errno) {
                  printf("A conexão falhou: %s\n", $ligacao->connect_error);
                  exit();
              }
                               

                $query = "SELECT `cod_area_conhecimento`, `nome_area` FROM `area` WHERE `fk_grande_area` = $cod_grande_area ";
                 if ($stmt = $mysqli->prepare($query)) {

                    /* execute statement */
                    $stmt->execute();

                    /* bind result variables */
                    $stmt->bind_result($cod_grande_area, $nome_grande_area);

                    /* fetch values */
                    while ($stmt->fetch()) {        
                        printf ("<option value='%s'>%s</option>\n", $cod_grande_area, $nome_grande_area);
                    }

                /* close statement */
                  $stmt->close();
                }         
 ?>