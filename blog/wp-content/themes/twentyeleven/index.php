<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

include $_SERVER ['DOCUMENT_ROOT'].'TEDx/header.php';?>

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

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>
	</div><!-- #primary -->

<?php include $_SERVER ['DOCUMENT_ROOT'].'TEDx/footer.php'; ?>