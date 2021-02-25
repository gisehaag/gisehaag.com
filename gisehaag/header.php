<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
						<!-- <li><a class="uppercase-text" href="#">home</a></li> -->
						<li><a class="uppercase-text" href="<?php echo home_url( '/blog' ); ?>"><?php _e( 'blog', 'gisehaag' ); ?></a></li>
						<li><a class="uppercase-text" href="<?php echo home_url( '/projects' ); ?>" target="_blank"><?php _e( 'portfolio', 'gisehaag' ); ?></a></li>
						<li><a class="uppercase-text" href="<?php echo home_url( '/contactame' ); ?>"><?php _e( 'contactame', 'gisehaag' ); ?></a></li>
					</ul>
			</div>
			<div class="social-menu">
				<ul>
					<li><a href="https://www.instagram.com/gise_h/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/in/gisela-haag-a0504330/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="https://github.com/gisehaag" target="_blank"><i class="fab fa-github"></i></a></li>
				</ul>
			</div>
		</div>
	</header>

	<section>
		<a href="<?php echo home_url(); ?>">
			<div class="site-title">
				<h1 class="title-logo"><?php _e( 'gisehaag', 'gisehaag' ); ?></h1>
				<p class="subtitle-logo uppercase-text"><?php _e( '__un subtitulo muy copado va acá__', 'gisehaag' ); ?></p>
			</div>
		</a>
		<div class="box-width img-bgc">
			<div class="main-img">
				<img  src="https://cdn.pixabay.com/photo/2016/07/31/11/52/table-1558811_1280.jpg" alt="">
			</div>
		</div>
	</section>

	<?php if ( is_front_page() ) : ?>
		<section>
			<div class="flex box-width">
				<a class="link-box" href="<?php echo home_url( '/blog' ); ?>">
					<div class="box-image">
						<img src="https://cdn.pixabay.com/photo/2015/09/20/02/03/sunglasses-947892_1280.jpg" alt="">
						<h2 class="uppercase-text"><?php _e( 'blog', 'gisehaag' ); ?></h2>
					</div>
				</a>

				<a class="link-box" href="<?php echo home_url( 'projects' ); ?>" target="_blank">
					<div class="box-image">
						<img src="https://cdn.pixabay.com/photo/2017/02/15/16/16/converse-2069209_1280.jpg" alt="">
						<h2 class="uppercase-text"><?php _e( 'portfolio', 'gisehaag' ); ?></h2>
					</div>
				</a>
				<a class="link-box" href="<?php echo home_url( '/contact' ); ?>">
					<div class="box-image">
						<img src="https://cdn.pixabay.com/photo/2015/04/24/18/04/stamps-738059_1280.jpg" alt="">
						<h2 class="uppercase-text"><?php _e( 'contactame', 'gisehaag' ); ?></h2>
					</div>
				</a>
			</div>
		</section>
	<?php endif ?>
