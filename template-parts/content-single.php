<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<img class="w-100 img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">
	
	
	
	<header class="container">
	<span>
		
	<?php if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta container text-center">
				<?php
				templatebase_posted_on();
				templatebase_posted_by();
				?>
	</span>
	<?php endif; ?>
<h1 class="text-center"> <?php echo get_the_title();?></h1>
<p class="text-center"> <?php echo get_the_excerpt();?></p>
	</header><!-- .entry-header -->
	<div class="container">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'templatebase' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'templatebase' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="container text-center">
		<?php templatebase_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
