<!DOCTYPE html>
<html lang="es">

	<?php
		require_once($_SERVER ['DOCUMENT_ROOT'].'TEDx/blog/wp-config.php');
		$my_query = new WP_Query('showposts=5');
		$url = "http://localhost/TEDx";
	?>

<head>
	<title>TEDxLagunaSetúbal</title>

	<meta charset = "utf-8"/>
	<meta description = "TEDxLagunaSetúbal - Ideas que siembran ideas"/>

	<meta name="keywords" content="TEDx, TEDxLagunaSetubal, Santa Fe, TED" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<meta property="fb:admins" content="100001785373137"/>
	<meta property="fb:app_id" content="241787079253349"/>

	<link rel="shorcut icon" type="image/x-icon" href="http://tedxlagunasetubal.org/img/favicon.ico" />

	<link rel="stylesheet" href="<?php echo $url?>/js/normalize.css" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo $url?>/style.css"/>
	<script src="<?php echo $url?>/js/prefixfree.min.js"></script>


	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28811670-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</head>

<body>

	<?php
		$actual = explode("/",strrev($_SERVER['PHP_SELF']), -1);
		$actual = strrev($actual[1]);
	?>

	<header>
		<div id="page-header">
			<div id="logo">
				<a href="<?php echo $url?>/"><img alt="TEDx" src="<?php echo $url?>/img/logo.jpg"></a>
			</div>

			<div id="frase">
				<a href="<?php echo $url?>/"><img alt="TEDx" src="<?php echo $url?>/img/frase2.jpg"></a>
			</div>
		</div>
	</header>

	<nav>
		<ul>
			<li <?php if ($actual == "TEDx") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/">X</a></li>
			<li <?php if ($actual == "blog") echo 'class="menu-actual">'; else echo '>'?> <a href="<?php echo $url?>/blog">Noticias</a></li>
			<li <?php if ($actual == "organizadores") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/organizadores">Organizadores</a></li>
			<li <?php if ($actual == "oradores") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/oradores">Oradores</a></li>
			<li <?php if ($actual == "propuesta-oradores") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/propuesta-oradores">Proponer Oradores</a></li>
			<li <?php if ($actual == "quiero-colaborar") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/quiero-colaborar">Quiero Colaborar</a></li>
			<li <?php if ($actual == "sponsors") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/sponsors">Sponsors</a></li>
			<li <?php if ($actual == "prensa") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/prensa">Prensa</a></li>
			<li <?php if ($actual == "contacto") echo 'class="menu-actual">'; else echo '>' ?> <a href="<?php echo $url?>/contacto">Contacto</a></li>
		</ul>
	</nav>