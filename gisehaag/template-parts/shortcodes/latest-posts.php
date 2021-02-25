<?php

$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 1,
	'order'          => 'DESC',
	'order_by'       => 'date',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) { $query->the_post();
		get_template_part( 'template-parts/main-loop' );
	} wp_reset_postdata();
}
