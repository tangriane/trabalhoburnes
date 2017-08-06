<div class="container">

	<ul class="breadcrumb">
		<li><a href="home">Página Inicial</a></li>
		<li>Contato</li>
	</ul>

	<?php

	$nome = trim ( $_POST["nome"] );
	$email = trim ( $_POST["email"] );
	$mensagem = trim ( $_POST["mensagem"] );

	require 'phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->SMTPDebug = 2;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'roni@gmail.com';                 // SMTP username
	$mail->Password = 'euseivcsabe';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom($email, $nome);
	$mail->addAddress('joe@example.net', 'Geysyel'); 

	$mail->addAttachment('imgs/opala.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'E-mail enviado do site CarSale';
	$mail->Body    = $mensagem;
	$mail->AltBody = $mensagem;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
?>
</div>