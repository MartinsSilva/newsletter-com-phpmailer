<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'aqui-vai-o-autoload-do-phpmailer';

function email($to, $body) {
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	// no host se estiver usando o gmail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = 'seu-email';
	$mail->Password = 'sua-senha';
	// quem está enviando
	$mail->setFrom('seu-email', 'seu-email');
	// para quem estamos enviando
	$mail->addAddress($to, $to);
	$mail->Subject = 'assunto da mensagem';
	$mail->Body = $body;

	if (!$mail->send()) {
		echo "sucesso";
	} else {
    	echo "erro";
	}
}
