<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row bg-personalizado'); ?>>
    <!---foto--->
    <div class="col-12 col-md-6">
        <figure>
            <?php templatebase_post_thumbnail(); ?>
        </figure>
    </div>
    <!---foto--->

    <!---contenido--->
    <div class="col-12 col-md-6">
        <p><?php echo get_the_excerpt();?> </p>
        <h1><?php echo get_the_title();?></h1>
        <span>
            <?php the_content();?>
        </span>


        <!---footer del layout-->
        <div class="container-fluid">
            <div class="row">
                <?php if (is_active_sidebar('footer_uno')) : 
            dynamic_sidebar('footer_uno'); endif; ?>

                <?php if (is_active_sidebar('footer_dos')) : 
                dynamic_sidebar('footer_dos'); endif; ?>


                <?php if (is_active_sidebar('footer_tres')) : 
                dynamic_sidebar('footer_tres'); endif; ?>
            </div>
        </div>
        <!---footer del layout-->
<?php get_footer();?>


    </div>
    <!---contenido--->


</article><!-- #post-<?php the_ID(); ?> -->