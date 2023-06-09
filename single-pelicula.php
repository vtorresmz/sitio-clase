<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package templatebase
 */

get_header();
?>

	<main id="primary" class="site-main demo  ">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single-peliculas', get_post_type() );

		
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
