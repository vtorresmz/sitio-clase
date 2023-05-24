<?php

function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );

/*widget assets*/
function zona_widget()
{
//widget 1    
register_sidebar(array(
    'name' => 'Footer columna 1', 
    'id' => 'footer_uno',//le damos ID y nombre al footer
    'before_widget' => '<div id="%1$s" class="col-12 col-md-4">', //añadimos clases y contenedores
    'after_widget' => '</div>',//cerramos los contenedores 
    'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title' => '</h5>'//cerramos los contenedores de titulo
));
//widget 1


//widget 2    
register_sidebar(array(
    'name' => 'Footer columna 2', 
    'id' => 'footer_dos',//le damos ID y nombre al footer
    'before_widget' => '<div id="%1$s" class="col-12 col-md-4">', //añadimos clases y contenedores
    'after_widget' => '</div>',//cerramos los contenedores 
    'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title' => '</h5>'//cerramos los contenedores de titulo
));
//widget 2

//widget 2    
register_sidebar(array(
    'name' => 'Footer columna 3', 
    'id' => 'footer_tres',//le damos ID y nombre al footer
    'before_widget' => '<div id="%1$s" class="col-12 col-md-4">', //añadimos clases y contenedores
    'after_widget' => '</div>',//cerramos los contenedores 
    'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title' => '</h5>'//cerramos los contenedores de titulo
));
//widget 2


}

add_action('widgets_init', 'zona_widget');
/*widget assets*/