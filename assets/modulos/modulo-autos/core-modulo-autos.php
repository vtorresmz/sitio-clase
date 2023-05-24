<?php  /*  autos */

function autos_register() {

    $labels = array(
        'name' => _x('autos', 'post type general name'),
        'singular_name' => _x('autos', 'post type singular name'),
        'add_new' => _x('Agregar auto', 'slideshow_two item'),
        'add_new_item' => __('Agregar auto'),
        'edit_item' => __('Editar auto'),
        'new_item' => __('Nueva auto'),
        'view_item' => __('Ver el auto'),
        'search_items' => __('Buscar auto'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-car',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'autos', 'with_front' => false)
      ); 

    register_post_type( 'autos' , $args );
}

add_action('init', 'autos_register');

 /*categorias personalizadas para autos*/
 function categoria_autos() {

	register_taxonomy(
		'categoria-autos',
		'autos',
		array(
			'label' => __( 'Categoria autos' ),
			'rewrite' => array( 'slug' => 'categoria-autos' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_autos' );


function etiqueta_autos() {

register_taxonomy(
			'etiqueta-autos','autos',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta autos' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'autosquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-autos' ),
		)
	);

 


}
add_action( 'init', 'etiqueta_autos' );
