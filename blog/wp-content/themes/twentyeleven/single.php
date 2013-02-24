<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

include $_SERVER ['DOCUMENT_ROOT'].'TEDx/header.php';?>

	<div id="noticias">
		<!--loop-->
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<!-- INICIO POST -->

			<div class="post">
				<!--titulo-->
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<!--fin titulo-->

				<h3><?php the_time('j F Y') ?></h3>

				<!--post-->
				<div class="post-info">
					<?php the_content(); ?>
				</div>
				<!--fin post-->

				<div class="meta-single">
					<p>Escrito por: <?php the_author() ?> en categoria(s): <?php the_category(', ') ?></p>
					<p><?php the_tags(); ?></p>
				</div>

			</div>

			<nav id="nav-single">
				<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
				<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
			</nav><!-- #nav-single -->
		<!-- FIN INFO POST -->
		<?php endwhile; ?>

		<?php else : ?>
			<h2>Lo que buscas no se encuentra</h2>
		<?php endif; ?>
		<!--fin loop-->
	</div>


<?php include $_SERVER ['DOCUMENT_ROOT'].'TEDx/footer.php'; ?>



