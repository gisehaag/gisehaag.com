<?php

function gh_init_template() {
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'primary' => 'Main menu',
		)
	);
}

add_action( 'init', 'gh_init_template' );


function gh_assets() {
	wp_register_style( 'lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', '1.0', 'all' );

	wp_register_style( 'monserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '1.0', 'all' );

	wp_register_style( 'charmonman', 'https://fonts.googleapis.com/css2?family=Charmonman:wght@400;700&display=swap', '1.0', 'all' );

	wp_register_style( 'fontawsome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', '5.15.1', 'all' );

	wp_enqueue_style( 'estilos', get_stylesheet_uri(), array( 'lato', 'monserrat', 'charmonman', 'fontawsome' ), '1.0', 'all' );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', '', '1.0', true );

	wp_localize_script('custom', 'projectsData', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
   ));
}

add_action( 'wp_enqueue_scripts', 'gh_assets' );


function gh_excerpt_read_more_link( $output ) {
	 global $post;
	$output = '<a class="read-more" href="' . get_permalink( $post->ID ) . '">Leer más</a>';
	return $output;
}

add_filter( 'excerpt_more', 'gh_excerpt_read_more_link' );


function gh_add_body_class_if_mobile( $classes ) {
	global $post;
	$classes[] = $post->post_name;

	if ( is_front_page() ) {
		$classes[] = 'no-menu-on-mobile';
	}

	return $classes;
}

add_filter( 'body_class', 'gh_add_body_class_if_mobile' );

function gh_getProjects() {
	$args = array(
		'post_type'      => 'project-item',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'order_by'       => 'date',
	);

	$projects = new WP_Query($args);

	$return = [];

	if( $projects->have_posts() ) {
		while ( $projects->have_posts() ) {
			$projects->the_post();
			global $post;

			$return['projects'][$post->post_name] = array(
				'title' => get_the_title(),
				'image' => get_field('image'),
				'date' => get_field('date'),
				'technology' => get_field('technologies'),
				'inspirationTitle' => get_field('inspiration_title'),
				'inspirationURL' => get_field('inspiration_link'),
				'description' => get_field('description'),
				'url'=> get_field('url'),
			);
		}
	}

	$techs = get_terms(array(
		'taxonomy' => 'technologies',
	));

	foreach($techs as $key => $tech) {
		$tech->color = get_field('color', $tech);
		$tech->svg = get_field('image', $tech);

		$techs[$tech->slug] = $tech;
		unset($techs[$key]);
	}

	$return['technologies'] = $techs;

	wp_send_json($return);
}

add_action('wp_ajax_nopriv_gh_getProjects', 'gh_getProjects');
add_action('wp_ajax_gh_getProjects', 'gh_getProjects');


