<?php 
			
				$senha = $_POST["senhadeteste"];

				$RegExAZ = preg_match('/[A-Z]/', $senha);
				$RegExaz = preg_match('/[a-z]/', $senha);
				$RegEx09 = preg_match('/[0-9]/', $senha);
				$RegExes = preg_match('/[!@#$%&*]/', $senha);

				if($RegExAZ && $RegExaz && $RegEx09 && $RegExes && strlen($senha) >= 6)
				{
					echo "Contem numeros, maiuscula, minuscula e caracteres especiais!";
				}
				else
				{
					echo "Não contem numeros, maiuscula, minuscula e caracteres especiais!";
				}
			
			
		 ?>