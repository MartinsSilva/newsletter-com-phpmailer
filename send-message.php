<?php

include_once 'database.php';
include_once 'config-mail.php';

if(isset($_POST['submit'])):
	$message = $_POST['message'];

	// estamos fazendo um select de emails que estão cadastro no banco
	$query = $pdo->query("SELECT tua-coluna-email FROM tua-tabela");
	$data = $query->fetchAll();

	// percorre a lista de email e jogamos na variavel email
	foreach($data as $subscribers):
		$emails = $subscribers->email;
		// chamamos a nossa funcão de envio de email que está no arquivo config-mail.php
		// note que nesta função estamos passando parâmetros (os emails e a messagem)
		email($emails, $message);
	endforeach;
endif;