<?php
function comercio_framework(){
    
   
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Blinker:wght@100;200;300;400;600;700;800;900&display=swap', 'all');
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');


    

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fuentes');
    wp_enqueue_style('estilos');
    
    
}


add_action('wp_enqueue_scripts', 'comercio_framework');


/*assets styles*/