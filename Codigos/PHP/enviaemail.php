<?php 
	date_default_timezone_set('America/Sao_Paulo');
	require_once("PHPMailer/class.phpmailer.php");
	require_once("PHPMailer/class.smtp.php");
	require 'PHPMailer/PHPMailerAutoload.php';
	include("conexao.php");
	session_start();

	$prontuario = $_POST['prontuario'];

	$consulta = "SELECT email, nome FROM usuarios WHERE prontuario = '$prontuario'";
    $result = $mysqli->query($consulta) or die($mysqli->error);

    if($result->num_rows != 1){
        $_SESSION['loginErro'] = "<div class=\"alert alert-danger\" role=\"alert\">Prontuário não Existe</div>";
        header("location: recuperasenha.php");
        exit();
    }

    while($dado = $result->fetch_array()){
        //echo $dado['email'] . "<br>";
        //echo $dado['nome'];
        $cod = hash("sha256", $dado['email']);
        

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
		$mail->AddAddress($dado['email'], $dado['nome']); # Os campos podem ser substituidos por variáveis
		//$mail->AddAddress('danillomodesto5@gmail.com', 'Dan Fidelis');
		#$mail->AddAddress('webmaster@nomedoseudominio.com'); # Caso queira receber uma copia
		#$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
		#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

		# Define os dados técnicos da Mensagem
		$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
		#$mail->CharSet = 'iso-8859-1'; # Charset da mensagem (opcional)

		# Define a mensagem (Texto e Assunto)
		$mail->Subject = "Email de Recuperacao de Senha WeSearch"; # Assunto da mensagem
		$mail->Body = 'Recuperação! <a href="http://localhost/teste/codigos/php/validaexpiracao.php?texto='.$cod.'">Recuperar!</a> :)';
		$mail->AltBody = "Recuperação! \r\n :)";

		# Define os anexos (opcional)
		#$mail->AddAttachment("c:/temp/documento.pdf", "documento.pdf"); # Insere um anexo

		# Envia o e-mail
		$enviado = $mail->Send();

		# Limpa os destinatários e os anexos
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();

		# Exibe uma mensagem de resultado (opcional)
		if ($enviado) {
		$_SESSION['loginErro'] = "<div class=\"alert alert-info\" role=\"alert\">Email enviado!</div>";
        header("location: login.php");
		 $date = date('Y-m-d H:i:s');

		 $consulta = "SELECT chave FROM links WHERE chave = '$cod'";
    	 $resultado = $mysqli->query($consulta) or die($mysqli->error);
    	 if($resultado->num_rows == 1){
    	 	$consulta = "UPDATE links SET data = '$date' WHERE chave = '$cod'";
    	 	$resultado = $mysqli->query($consulta) or die($mysqli->error);
    	 }
    	 else{
    	 	$consulta = "INSERT INTO links( chave, data) 
			VALUES ('$cod', '$date')";
			$resultado = $mysqli->query($consulta) or die($mysqli->error);
    	 }

		} else {
		 echo "Não foi possível enviar o e-mail.";
		 echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
		}
    }

?>