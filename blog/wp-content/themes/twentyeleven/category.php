<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

include $_SERVER ['DOCUMENT_ROOT'].'header.php';?>


			<div id="noticias">

			<?php if ( have_posts() ) : ?>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

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
						<div class="meta">
							<p>Escrito por: <?php the_author() ?> en categoria(s): <?php the_category(', ') ?></p>
							<p><?php the_tags(); ?></p>
						</div>

					</div>
					<!-- FIN INFO POST -->

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<h2>Lo que buscas no se encuentra</h2>

			<?php endif; ?>

			</div><!-- #content -->

<?php include $_SERVER ['DOCUMENT_ROOT'].'footer.php'; ?>

