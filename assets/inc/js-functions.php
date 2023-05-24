<?php
/*assets scripts*/

function comercio_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:

    
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', false, false);
    wp_register_script('miarchivo-js', get_bloginfo('template_directory') . '/assets/librerias/js/mi-archivo.js', array('jquery'), '1', false);    
        
        /*encolamos los JS*/
        wp_enqueue_script('miarchivo-js', array('jquery'), true);
        wp_enqueue_script('bootstrap-js');
        

        
        
        
    }
}
add_action("wp_enqueue_scripts", "comercio_script", 1);
