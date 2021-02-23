<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0,">

	<meta property="og:title" content="<?php echo get_bloginfo('title'); ?>" />
	<meta property="og:description" content="<?php echo get_bloginfo('description') ?>" />
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri() . '/screenshot.png' ; ?>" />

	<link rel="stylesheet" href="https://test.gisehaag.com/assets/css/icons.css" />

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-P8TG4WVFS4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-P8TG4WVFS4');
	</script>
</head>

<body <?php body_class(); ?>>
	<header class="header-footer-bgc">
		<div class="header-container box-width">
			<div class="main-menu">
					<ul>
						<li><a class="uppercase-text" href="<?php echo home_url('/about-me'); ?>"><?php _e('about me', 'gisehaag'); ?></a></li>
						<li><a class="uppercase-text" href="<?php echo home_url('/projects'); ?>"><?php _e('my projects', 'gisehaag'); ?></a></li>
						<li><a class="uppercase-text" href="<?php echo home_url('/contact'); ?>"><?php _e('contact me', 'gisehaag'); ?></a></li>
					</ul>
			</div>
			<div class="social-menu">
				<ul>
					<li><a href="https://www.instagram.com/gise_h/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/in/gisela-haag-a0504330/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="https://github.com/gisehaag" target="_blank"><i class="fab fa-github"></i></a></li>
					<li><a href="https://twitter.com/gisehaag" target="_blank"><i class="icon-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</header>

