<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

include $_SERVER ['DOCUMENT_ROOT'].'TEDx/header.php';?>

	<div class="text">
		<p>Parece que no podemos encontrar lo que estás buscando. Tal vez uno de los enlaces que aparecen a continuación, pueden ayudarte.</p>

		<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
	</div>


<?php include $_SERVER ['DOCUMENT_ROOT'].'TEDx/footer.php'; ?>