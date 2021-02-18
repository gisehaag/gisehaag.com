<?php
/**
* Template name: Projects
*/

$args = array(
	'post_type'      => 'project-item',
	'posts_per_page' => -1,
	'order'          => 'ASC',
	'order_by'       => 'date',

);

$projects = new WP_Query($args);

get_header('projects'); ?>

<main id="main">
	<header id="logo">
		<div class="background">
			<div class="logo-wrapper">
				<h1>Hello World 🌎</h1>
				<p>I'm Gise Haag, a web developer in develop</p>
			</div>
		</div>
	</header>

	<section id="projects">
		<div class="background">
			<div class="projects-title">
				<h1>these are some of my projects</h1>
			</div>
		</div>
		<?php if( $projects->have_posts() ): ?>
			<div class="projects">
				<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
					<div class="project-item" data-name="<?php echo $post->post_name ?>">
						<a href="<?php echo get_field('project_url'); ?>" target="_blank">
							<img
								class="project-img"
								src="<?php echo get_field('image'); ?>"
								alt="<?php echo get_field('image_alt'); ?>"
							/>
						</a>
						<h1 class="project-title"> <span class="icon-chevron-down"></span> <?php the_title(); ?></h1>
						<div class="details-project"></div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		</section>
</main>


<?php get_footer(); ?>


