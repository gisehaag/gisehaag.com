<?php

// Register new sidebar

function gh_sidebar_init() {
	register_sidebar(
		array(
			'name'          => __( 'Main Sidebar', 'gisehaag' ),
			'id'            => 'main-sidebar',
			'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'gisehaag' ),
			'before_widget' => '<li id="%1$s" class="white-box widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Contact Sidebar', 'gisehaag' ),
			'id'            => 'contact-sidebar',
			'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'gisehaag' ),
			'before_widget' => '<li id="%1$s" class="white-box widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gh_sidebar_init' );
