<?php

function gh_acf_init_block_types() {

	// Check function exists.
	if( function_exists('acf_register_block_type') ) {

		// register a custom block.
		acf_register_block_type(array(
			'name'              => 'title_subtitle',
			'title'             => __('Page Title and Subtitle'),
			'description'       => __('Pink background, black title and white subtitle'),
			'render_template'   => 'template-parts/blocks/title-subtitle.php',
			'category'          => 'common',
			'icon'              => 'dashicons-megaphone',
		));

		acf_register_block_type(array(
			'name'              => 'section_title',
			'title'             => __('Section title'),
			'description'       => __('Title or info, black background, white text'),
			'render_template'   => 'template-parts/blocks/section-title.php',
			'category'          => 'common',
			'icon'              => 'dashicons-editor-code',
		));
	}
}

add_action('acf/init', 'gh_acf_init_block_types');