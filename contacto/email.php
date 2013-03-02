<?php include "../header.php";?>

<?php

	@$nombre = addslashes($_POST['name']);
	@$email = addslashes($_POST['email']);
	@$web = addslashes($_POST['website']);
	@$mensaje = addslashes($_POST['mensaje']);


	$cabeceras = "From: $email\n"
	 . "Reply-To: $email\n";
	$asunto = "Mensaje desde TEDxLagunaSetubal";
	$email_to = "tedxlagunasetubal@gmail.com";
	$contenido = "$nombre ha enviado un mensaje desde la web www.tedxlagunasetubal.org\n"
	. "\n"
	. "Nombre: $nombre\n"
	. "Email: $email\n"
	. "Sitio Web: $web\n"
	. "Mensaje: $mensaje\n"
	. "\n";


	if (mail($email_to, $asunto ,$contenido ,$cabeceras )) {

	?>

	<section>
		<div class="text">
			<p>Gracias, su mensaje se envio correctamente.</p>
		</div>
	</section>

	<?php
		} else {
	?>

	<section>
		<div class="text">
			<p>Error: Su información no pudo ser enviada, intente más tarde.</p>
		</div>
	</section>

	<?php
	}
?>


<?php include "../footer.php";?>