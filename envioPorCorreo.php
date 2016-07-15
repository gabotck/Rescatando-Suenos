<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript">
		function redireccionar(){
		  window.location="index.html";
		} 
		setTimeout ("redireccionar()", 3000); //tiempo expresado en milisegundos
	</script>
	
	<title>Document</title>
</head>
<body>
	
	<?php
		if(isset($_POST['name'])) {

		// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_to = "gabotck@hotmail.com";
		$email_subject = "Contacto desde el sitio web Rescatando Sueños";
		$email_from = "";

		// Aquí se deberían validar los datos ingresados por el usuario
		if(!isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['mensaje'])) {

		echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
		echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
		die();
		}

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['name'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

		echo "¡El formulario se ha enviado con éxito!";
		}
	?>

</body>
</html>
