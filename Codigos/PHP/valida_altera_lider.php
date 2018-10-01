<?php
	include("conexao.php");
	session_start();
	$idgrupo = $_SESSION['idgrupo'];
	$lider_antigo = $_POST['lideratual'];
	$lider_novo	= $_POST['lider'];
	$data_saida = $_POST['data_saida'];
	$data_novo = $_POST['data_novo'];

	if(strlen($lider_antigo) == 0){
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Líder Antigo não existe ou está incorreto.</div>"; 
		header("location: altera_lider.php?cod=0&id=$idgrupo");
		exit();
	}
	elseif (strlen($lider_novo) == 0) {
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Líder Antigo não existe ou está incorreto.</div>"; 
		header("location: altera_lider.php?cod=0&id=$idgrupo");
		exit();
	}
	elseif (strlen($data_novo) == 0) {
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Data de Entrada não pode ser vazia.</div>"; 
		header("location: altera_lider.php?cod=0&id=$idgrupo");
		exit();
	}
	elseif (strlen($data_saida) == 0) {
		$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Data de Saída não pode ser vazia.</div>"; 
		header("location: altera_lider.php?cod=0&id=$idgrupo");
		exit();
	}

	$consulta = "SELECT id FROM usuarios WHERE nome = '$lider_antigo'";
    $result = $mysqli->query($consulta) or die($mysqli->error);

    if($result->num_rows != 1){
        $_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Líder Antigo não existe ou está incorreto.</div>";
        header("location: altera_lider.php?cod=0&id=$idgrupo");
        exit();
    }
    $dado = mysqli_fetch_assoc($result);

	$consulta = "INSERT INTO mudancas_lider(id_lider_antigo, data_saida, id_lider_novo, data_entrada) 
		VALUES ('$dado[id]', '$data_saida', '$lider_novo', '$data_novo')";
    $result = $mysqli->query($consulta) or die($mysqli->error);
    if ($result) {
        	$consulta = "UPDATE grupo_pesquisa SET id_lider = '$lider_novo' WHERE id ='$idgrupo' ";
			$result = $mysqli->query($consulta) or die($mysqli->error);
			if($result){

				$_SESSION['informaerro'] = "<div class=\"alert alert-success\" role=\"alert\">Líder Alterado com Sucesso</div>"; 

				header("location: enviaemail_cadastrogrupo.php?id=$lider_novo");

		
			}
        }
        else{
        	$_SESSION['informaerro'] = "<div class=\"alert alert-danger\" role=\"alert\">Ocorreu um erro, verifique os dados.</div>"; 
		header("location: altera_lider.php?cod=0&id=$idgrupo");
		exit();
        }    

  ?>