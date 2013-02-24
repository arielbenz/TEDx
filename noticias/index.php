<?php include "../header.php";?>


<?php
	require_once($_SERVER ['DOCUMENT_ROOT'].'TEDx/blog/wp-config.php');
	//require_once($_SERVER ['DOCUMENT_ROOT'].'TEDx/blog/wp-content/themes/twentyeleven/functions.php');
	$my_query = new WP_Query('showposts=5');
?>

<div id="noticias">
	<?php while ($my_query->have_posts()) : $my_query->the_post();
		$do_not_duplicate = $post->ID;
	?>

		<div class="post">
	 		<!--titulo-->
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<!--fin titulo-->

			<h3><?php the_time('j F Y') ?></h3>

			<!--post-->
			<div class="post-info">
				<?php the_content(); ?>
			</div>

			<div class="meta">
				<p><?php the_tags(); ?></p>
			</div>
		</div>

	<?php endwhile; ?>

</div>

<?php include "../footer.php";?>