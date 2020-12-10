<?php

// Add Shortcode
function latest_post_shortcode() {
	ob_start();
	get_template_part( 'template-parts/shortcodes/latest-posts' );
	return ob_get_clean();
}

add_shortcode( 'latest-post', 'latest_post_shortcode' );
