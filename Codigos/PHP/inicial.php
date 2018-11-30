<!DOCTYPE html>
<html>
<head>
	<?php include("conexao.php");
        $consulta = "SELECT gp.id, gp.nome,sigla,id_lider,data_inicio,descricao,gp.lattes as link_grupo,u.nome as lider FROM grupo_pesquisa as gp,usuarios as u WHERE ativacao = 1 and id_lider = u.id";
        $con = $mysqli->query($consulta) or die ($mysqli->error);
  ?>


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




	  <link rel="stylesheet" type="text/css" href="../CSS/test.css">
      <script type="text/javascript" src="../JS/scripts.js"></script> 

	<title>INICIO</title>
</head>


<body onload="barra()">

	<div id="barra">
		
	</div>
	<div class="container">
    <div class="row">
        <div class="center-box">
             <?php 
        while($dados = $con->fetch_array()){?>
             

            
                    <div class="borda">
                                <h2><?php echo $dados["nome"]." - ". $dados["sigla"]; ?></h2>
                                <br>
                                <p>Data de inicio do grupo: <?php echo date('d/m/Y', strtotime($dados["data_inicio"])); ?></p>
                                <br>
                                <?php echo "<a href='".$dados["link_grupo"]."'>Saiba mais</a>"; ?>
                                <br><br>
                                <p>Lider atual do grupo: <?php echo $dados["lider"]; ?></p>
                                <?php 
                                    $id = $dados["id"];
                                    $querry = "SELECT `nome_especialidade` as linha FROM `especialidade`,grupos_linhas WHERE cod_especialidade = fk_cod_linha and fk_cod_grupo = '$id'";
                                    $code = $mysqli->query($querry) or die ($mysqli->error);

                                    

                                    echo "<p>Linhas do grupo: <br>";

                                    while ($linha = $code->fetch_array()) {
                                        echo $linha["linha"]."<br>";
                                    }
                                    echo "</p>";
                                    

                                 ?>
                                <br><br>
                                <div class="text">
                                    <p><?php echo $dados["descricao"]; ?></p>
                                </div>

                                <br><br>

                                <div>
                                    <?php 

                                    //
                                        echo "<a href=\"mostra_grupo.php?id=".$dados["id"]."\"><button \" class=\"btn btn-info btn-center\">Ver Mais</button></a>";
                                     ?>
                                </div>
                                <br><br><br>
                                
                            </div>
                            <br>

             
                            
                                            

                        <?php } ?> 

                        <div class="borda">
                                <h2>Cadastramento de grupos de pesquisa</h2>
                                <br>
                                
                                <br><br>
                                <div class="text" style="text-align: left">
                                    <p>A Pró-Reitoria de Pesquisa, Inovação e Pós-Graduação (PRP) é a responsável pelo cadastramento no Diretório dos Grupos de Pesquisa no Brasil, no Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq), e mantém a relação dos grupos cadastrados no link Grupos de Pesquisa do IFSP.</p>
                                    <br>
                                    <br>
                                   <p> A Portaria nº 1.718, de 5 de maio de 2017, estabeleceu o novo regulamento dos Grupos de Pesquisa Institucionais e está disponível para consulta no link Grupos de Pesquisa da PRP. Conforme o Art. 17 desta Portaria, para a proposta de criação de grupo deverá ser utilizado o formulário de Grupo de Pesquisa Institucional, disponível no link supracitado, a ser encaminhado pelo primeiro líder ao presidente do Compesq do câmpus por e-mail para pesquisa.brt@ifsp.edu.br, com a indicação do assunto “Criação de Grupo de Pesquisa”. Devem constar as seguintes informações no corpo da mensagem:</p>
                                   <br>
                                    <p>• nome do grupo de pesquisa;</p>
                                    <p>• nome do primeiro líder, titulação, câmpus de lotação e n.º do CPF;</p>
                                    <p>• nome e titulação dos membros pesquisadores;</p>
                                    <p>• linhas de pesquisa;</p>
                                    <p>• justificativa para a formação do grupo, demonstrando a relevância e as perspectivas de contribuição científica, tecnológica, artística ou cultural em até 600 caracteres, incluindo os espaços;</p>
                                    <p>• justificativa para atipicidade, se for o caso, considerando os termos do Art. 23 da referida Portaria, em até 200 caracteres, incluindo os espaços;</p>
                                    <p>• descrição do grupo de, no máximo, 400 caracteres, incluindo os espaços, para ser apresentada na página da PRP, junto com a logomarca.</p>
                                    <br>
                                    <br>
                                    <p>É importante que o primeiro líder, antes de enviar a proposta, observe o disposto no Art. 9.º e no Art. 30 da referida Portaria.</p>
                                </div>

                                <br><br><br>
                                
                            </div>
                            <br>


                            <div class="borda">
                                <h2>Produção Científica e Tecnológica</h2>
                                <br>
                                
                                <br><br>
                                <div class="text" style="text-align: left">
                                    <p>Dados referentes às produções científica e tecnológica dos servidores do câmpus podem ser consultados na pasta abaixo. Essas informações foram extraídas da Plataforma Lattes do CNPq, a partir da Plataforma Stela Experta, e são válidas até a data indicada no nome do arquivo.</p>
                                </div>

                                <br><br><br>
                                
                            </div>
                            <br>
        </div>
    </div>
</div>
    
	
</body>
</html>