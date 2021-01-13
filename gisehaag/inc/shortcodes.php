<?php


// Add Shortcode
function gh_latest_post_shortcode() {
	ob_start();
	get_template_part('template-parts/shortcodes/latest-posts');
	return ob_get_clean();
}

add_shortcode( 'latest-post', 'gh_latest_post_shortcode' );