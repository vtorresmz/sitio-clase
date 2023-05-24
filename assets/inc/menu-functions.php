<?php
/*customizar la clase y el link del logo de wordpress*/
function add_class_to_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="col-12 col-md-2" rel="home" itemprop="url">%2$s</a>',
    esc_url( home_url( '/' ) ),
    wp_get_attachment_image( $custom_logo_id, 'full', false, array(
    'class' => 'img-fluid',
    ) )
    );
    return $html;
    }
    add_filter( 'get_custom_logo', 'add_class_to_custom_logo' );
/*customizar la clase y el link del logo de wordpress*/

    /*sub menu*/
function change_submenu_class($menu)
{
    $menu = preg_replace('/class="sub-menu"/', '/ class="nav-item dropdown" /', $menu);
    return $menu;
}
add_filter('wp_nav_menu', 'change_submenu_class');

/*sub menu*/


/*menu superior*/
if (!function_exists('menu_superior')) {

    // Register Navigation Menus
    function menu_superior()
    {

        $locations = array(
            'menu-superior' => __('menu-superior', 'menu-superior'),
        );
        register_nav_menus($locations);
    }
    add_action('init', 'menu_superior');
}

/*clases para li item */
function atg_menu_classes($classes, $item, $args)
{
    if ($args->theme_location == 'menu-superior') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
/*clases para li item */

/*menu superior*/

/*menu categorias*/
// Register Navigation Menus
function menu_categoria()
{

    $locations = array(
        'menu-categoria' => __('menu-categoria', 'menu-categoria'),
    );
    register_nav_menus($locations);
}
add_action('init', 'menu_categoria');
/*menu categorias*/

/*menu RRSS*/
// Register Navigation Menus
function menu_rrss()
{

    $locations = array(
        'menu-rrss' => __('menu-rrss', 'menu-rrss'),
    );
    register_nav_menus($locations);
}
add_action('init', 'menu_rrss');
/*menu RRSS*/


/*menu mobile*/
// Register Navigation Menus
function menu_mobile()
{

    $locations = array(
        'menu-mobile' => __('menu-mobile', 'menu-mobile'),
    );
    register_nav_menus($locations);
}
add_action('init', 'menu_mobile');
/*menu mobile*/