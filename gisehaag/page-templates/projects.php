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
	<div class="logo">
		<h1>gisehaag</h1>
		<p>a web developer girl in develop</p>
	</div>

	<section class="container" id="projects">
		<h1 class="projects-title">These are some of my projects</h1>

		<?php if( $projects->have_posts() ): ?>
			<div class="projects">
				<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
					<div class="project-item" data-name="<?php echo the_title(); ?>">
						<a href="<?php echo get_field('project_url'); ?>" target="_blank">
							<div class="project-tile">
								<img
									class="project-img"
									src="<?php echo get_field('image'); ?>"
									alt="<?php echo get_field('image_alt'); ?>"
								/>
							</div>
						</a>
						<h1 class="project-title"><?php echo get_field('title'); ?></h1>
						<div class="icon-chevron-down"></div>
					</div>

				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</section>
</main>





<!-- <main>
	<div class="flex box-width post-section">
		<?php get_template_part('template-parts/page'); ?>
	</div>
</main> -->

<?php get_footer(); ?>


