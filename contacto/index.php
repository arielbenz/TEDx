<?php include "../header.php";?>

	<section>
		<div class="text">
			<p>Para ponerte en contacto con nosotros sobre cualquier duda que no sea sobre cuestiones de Sponsors o Prensa, podés completar el siguiente formulario.</p>
		</div>
	</section>

	<section class="formulario">
		<form class="contact_form" action="email.php" method="post">
		    <ul>
		       <li>
		           <label for="name">Nombre:</label>
		           <input type="text"  placeholder="Juan Carlos" required />
		       </li>
		       <li>
		           <label for="email">Email:</label>
		           <input type="email" name="email" placeholder="juacarlos@ejemplo.com" required />
		       </li>
		       <li>
		           <label for="website">Sitio Web:</label>
		           <input type="url" name="website" placeholder="http://ejemplo.com" />
		       </li>
		       <li>
		           <label for="mensaje">Mensaje:</label>
		           <textarea name="mensaje" cols="40" rows="6" required ></textarea>
		       </li>
		        <li>
		          <button class="submit" type="submit">Enviar</button>
		        </li>
		    </ul>
		</form>
	</section>

<?php include "../footer.php";?>