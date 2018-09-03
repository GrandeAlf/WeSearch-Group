<?php 
	# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
	require_once("PHPMailer/class.phpmailer.php");
	require_once("PHPMailer/class.smtp.php");
	require 'PHPMailer/PHPMailerAutoload.php';

	# Inicia a classe PHPMailer
	$mail = new PHPMailer();

	# Define os dados do servidor e tipo de conexão
	$mail->IsSMTP(); // Define que a mensagem será SMTP
	//$mail->SMTPDebug =0;
	$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
	$mail->Port = 465; // Porta TCP para a conexão
	$mail->SMTPAutoTLS = true; // Utiliza TLS Automaticamente se disponível
	$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
	$mail->SMTPSecure = 'ssl';
	$mail->Username = 'group.wesearch@gmail.com'; # Usuário de e-mail
	$mail->Password = 'WSG#2018'; // # Senha do usuário de e-mail

	# Define o remetente (você)
	$mail->From = "group.wesearch@gmail.com"; # Seu e-mail
	$mail->FromName = "WeSearch"; // Seu nome

	# Define os destinatário(s)
	$mail->AddAddress('eric.gmoreira98@gmail.com', 'Eric Moreira'); # Os campos podem ser substituidos por variáveis
	$mail->AddAddress('danillomodesto5@gmail.com', 'Dan Fidelis');
	#$mail->AddAddress('webmaster@nomedoseudominio.com'); # Caso queira receber uma copia
	#$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
	#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

	# Define os dados técnicos da Mensagem
	$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
	#$mail->CharSet = 'iso-8859-1'; # Charset da mensagem (opcional)

	# Define a mensagem (Texto e Assunto)
	$mail->Subject = "Mensagem Teste"; # Assunto da mensagem
	$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>! :)";
	$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";

	# Define os anexos (opcional)
	#$mail->AddAttachment("c:/temp/documento.pdf", "documento.pdf"); # Insere um anexo

	# Envia o e-mail
	$enviado = $mail->Send();

	# Limpa os destinatários e os anexos
	$mail->ClearAllRecipients();
	$mail->ClearAttachments();

	# Exibe uma mensagem de resultado (opcional)
	if ($enviado) {
	 echo "E-mail enviado com sucesso!";
	} else {
	 echo "Não foi possível enviar o e-mail.";
	 echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
	}

	
	
?>