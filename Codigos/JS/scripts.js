function carrega_pagina(pagina)
	  	{
	  		$("#conteudo").load(pagina);
	  	}

function barra()
	  	{
	  		$("#barra").load("barra.php");
	  	}

function carrega_pagina_id(pagina,id)
	  	{

	  		var pagina_id = pagina+"?id="+id;

	  		$("#conteudo").load(pagina_id);
	  	}