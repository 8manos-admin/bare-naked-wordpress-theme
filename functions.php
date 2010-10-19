<?php 

// Desactivar el reporte de version de WordPress para evitar ataques automáticos
function sin_generators()
{
return '';
}
add_filter('the_generator','sin_generators');

//Agregar soporte para cosas de WP
add_theme_support('menus');
add_theme_support('post-thumbnails');

?>
