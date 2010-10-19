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

//REGISTRA AREAS CON WIDGETS
if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'name' => 'sidebar-pruebas',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'footer',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

?>
