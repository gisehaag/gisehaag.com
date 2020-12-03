<?php

function init_template(){
	add_theme_support('post-thumbnails');

	register_nav_menus(
      array(
         'primary' => 'Main menu',
      )
   );
}

add_action('init', 'init_template');

function assets(){

   wp_register_style('lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', '1.0', 'all');

   wp_register_style('monserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '1.0', 'all');

   wp_register_style('charmonman', 'https://fonts.googleapis.com/css2?family=Charmonman:wght@400;700&display=swap', '1.0', 'all');

   wp_register_style('fontawsome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', '5.15.1', 'all');


   wp_enqueue_style('estilos', get_stylesheet_uri(), array('lato', 'monserrat', 'charmonman', 'fontawsome'), '1.0', 'all');

   wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);

}

add_action('wp_enqueue_scripts', 'assets');

/* locate_template como un require pero con posibilidad de buscar en un tema padre si así lo necesitaría.
El segundo parámetro es si lo encuentra, carga el shortcode */

locate_template('inc/shortcodes.php', true);
