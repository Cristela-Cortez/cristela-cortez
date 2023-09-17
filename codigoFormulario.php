<?php

	$destinatario= 'cristela.cortez@outlook.com';
	//correo que recibira todos los comentarios


		$nombre = $_POST['nombre'];
		$email = $_POST['mail'];
		$asunto= $_POST['asunto'];
		$comentarios = $_POST['comentarios'];

	$header = "Enviado desde el sitio de Marca Personal";
	$bodyMenssage = "Mensaje:". $comentarios . "\r\n"."Atentamente:". $nombre . "\r\n". "E-mail:". $email . "\r\n";


	mail($destinatario, $asunto,$bodyMenssage, $header);
	echo "<script> alert('Correo enviado correctamente')</script>";
	echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";

?>