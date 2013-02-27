<!DOCTYPE html>
<html lang="es">

<head>
	<title>TEDxLagunaSetúbal</title>

	<meta charset = "utf-8"/>
	<meta description = "TEDxLagunaSetúbal - Ideas que siembran ideas"/>

	<meta name="keywords" content="TEDx, TEDxLagunaSetubal, Santa Fe, TED" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<meta property="fb:admins" content="100001785373137"/>
	<meta property="fb:app_id" content="241787079253349"/>

	<link rel="shorcut icon" type="image/x-icon" href="http://localhost/TEDx/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://localhost/TEDx/style.css"/>

</head>

<body>

	<?php
		$actual = explode("/",strrev($_SERVER['PHP_SELF']), -1);
		$actual = strrev($actual[1]);
	?>

	<header>
		<div id="page-header">
			<div id="logo">
				<a href="http://localhost/TEDx/"><img alt="TEDx" src="http://localhost/TEDx/img/logo.jpg"></a>
			</div>

			<div id="frase">
				<a href="http://localhost/TEDx/"><img alt="TEDx" src="http://localhost/TEDx/img/frase2.jpg"></a>
			</div>
		</div>
	</header>

	<nav>
		<ul>
			<li <?php if ($actual == "TEDx") echo 'class="menu-actual">'; else echo '>' ?> <a href="http://localhost/TEDx/">X</a></li>
			<li <?php if ($actual == "blog") echo 'class="menu-actual">'; else echo '>'?> <a href="http://localhost/TEDx/blog">Noticias</a></li>
			<li <?php if ($actual == "organizadores") echo 'class="menu-actual">'; else echo '>' ?> <a href="http://localhost/TEDx/organizadores">Organizadores</a></li>
			<li <?php if ($actual == "oradores") echo 'class="menu-actual">'; else echo '>' ?> <a href="http://localhost/TEDx/oradores">Oradores</a></li>
			<li <?php if ($actual == "propuesta-oradores") echo 'class="menu-actual">'; else echo '>' ?> <a href="http://localhost/TEDx/propuesta-oradores">Proponer Oradores</a></li>
			<li <?php if ($actual == "sponsors") echo 'class="menu-actual">'; else echo '>' ?> <a href="http://localhost/TEDx/sponsors">Sponsors</a></li>
			<li <?php if ($actual == "prensa") echo 'class="menu-actual">'; else echo '>' ?> <a href="http://localhost/TEDx/prensa">Prensa</a></li>
			<li <?php if ($actual == "contacto") echo 'class="menu-actual">'; else echo '>' ?> <a href="http://localhost/TEDx/contacto">Contacto</a></li>
		</ul>
	</nav>