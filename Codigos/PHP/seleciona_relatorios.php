

<!DOCTYPE html>
<html>
<head>

<?php include("conexao.php");
       include("funcoes.php");
     
    // $logado = logado();
     //if($logado == NULL)
     //{
     // header("location: inicial.php");
     //}
    



       $lider = lider();
       $adm = dado(); 
        
             
      
  ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
    <script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/perm.css">
<script type="text/javascript" src="../JS/scripts.js"></script>

    <title></title>

</head>
<body onload="barra();">


  <div id="barra"></div>
  
<form method="post" action="seleciona_grupoR.php">
    <div id = "conteudo">    

      <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr>
                                      
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>
                                    <select name="ano" class="form-control">
                                     <option disabled selected="selected" >Selecionar Ano</option>
                                     <option>2018</option>
                                     <option>2017</option>
                                     <option>2016</option>
                                     <option>2015</option>
                                     <option>2014</option>
                                     <option>2013</option>
                                     <option>2012</option>
                                     <option>2011</option>
                                     <option>2010</option>

                                  </select>
                                </td>

                                
                            </tr> 
                             <tr>
                                 
                                <td align="center"><a href=""><button type="submit" name="rel_linha" class="btn btn-primary btn-block">Relatorio de Linha de Pesquisa por ano</button>
                                
                                </td>
                                

                              </tr> 

                                <tr>
                                 
                                <td align="center"><a href=""><button type="submit" name="rel_docente_grupo" class="btn btn-primary btn-block">Relatorio de docentes que participaram de um grupo</button>
                                
                                </td>
                                </tr>

                                <tr>
                                 
                                <td align="center"><a href=""><button type="submit" name="rel_docente_linha" class="btn btn-primary btn-block">Relatorio de docentes e suas linhas</button>
                                
                                </td>
                                </tr>
                                 
                                 <tr>

                                <td align="center"><a href=""><button type="submit" name="rel_discente_grupo" class="btn btn-primary btn-block">Relatorio de Discentes que participaram de um grupo</button>
                                
                                </td>
                                </tr>
                                
                                <tr> 
                                <td align="center"><a href=""><button type="submit" name="rel_discente_orientador" class="btn btn-primary btn-block">Relatorio de Discente e Docente orientador</button>
                                
                                </td>
                                </tr>

                                <tr> 
                                <td align="center"><a href=""><button type="submit" name="rel_discente_orientador_linha" class="btn btn-primary btn-block">Relatorio de Discente e Docente com linha de pesquisa do projeto</button>
                                
                                </td>
                                </tr>

                                <tr> 
                                <td align="center"><a href=""><button type="submit" name="rel_discente_orientador_linha" class="btn btn-primary btn-block">Discente e Docente com linha de pesquisa do projeto</button>
                                
                                </td>
                                </tr>

                                <tr> 
                                <td align="center"><a href=""><button type="submit" name="rel_tecnico_grupo" class="btn btn-primary btn-block">Relatorio de Tecnico do grupo</button>
                                
                                </td>
                                </tr>

                                <tr> 
                                <td align="center"><a href=""><button type="submit" name="rel_equip_grupo" class="btn btn-primary btn-block">Relatorio de Equipamentos do grupo</button>
                                
                                </td>
                                </tr>

                                <tr> 
                                <td align="center"><a href=""><button type="submit" name="rel_pub_grupo" class="btn btn-primary btn-block">Relatorio de Publicações do grupo</button>
                                
                                </td>
                                </tr>

                                <tr> 
                                <td align="center"><a href=""><button type="submit" name="rel_projeto_fim" class="btn btn-primary btn-block">Relatorio de Projetos finalizados do grupo</button>
                                
                                </td>
                                </tr>
                                                                 
                                
                      

                    </tbody>

                </table>
               
               
            
    

</div>   

</form>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
</html>

            