<?php	

	/*Datos para el correo*/
	$destinatario = 'jkarloz2903@gmail.com';	
	$asunto = 'Mensaja enviado desde KarlozWeb';	
	$contenido = '<html>
						<head>
							<title>' . $asunto . '</title>
						</head>
						<body>
							<h1>Haz recibido un mensaje de la web: <a href="www.karloz.esy.es">Karloz Web</a></h1>
							<p>El visitante <strong>' . $_POST['name'] . '</strong> te ha enviado el siguiente mensaje: </p>
							<br>
							<p>Mensaje: ' . $_POST['msj'].'</p>
							<p>Puedes ponerte en contacto al email: ' . $_POST['mail'] . '</p>
							<p>Tambien puedes contactarlo por celular: ' . $_POST['phone']. '</p>
							<hr>
							<p>Este mensaje ha sido generado automáticamente desde karlozweb.esy.es</p>
						</body>
					</html>';
	
	$encabezado = 'MIME-Version: 1.0'."\r\n";
	$encabezado .= 'Content-type: text/html; charset=UTF-8'."\r\n";
	$encabezado .= 'From: '. $_POST['mail'] ."\r\n";

	$correoEnviado = mail($destinatario, $asunto, $contenido, $encabezado);

	if($correoEnviado){
		echo 1;
	}
	else{
		echo 2;
	}
?>