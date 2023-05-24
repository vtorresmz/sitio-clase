<?php
/**
 * Template Name: Pagina de Inicio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */

get_header();
?>

	<main id="primary" class="container-fluid">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<?php include get_template_directory() . '/assets/modulos/modulo-autos/loop-autos.php';?>

	<?php include get_template_directory() . '/assets/modulos/modulo-noticias/loop-noticias.php';?>
<?php
//get_sidebar();

