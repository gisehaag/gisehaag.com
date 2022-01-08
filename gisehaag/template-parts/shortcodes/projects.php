<?php
$args = array(
	'post_type'      => 'project-item',
	'posts_per_page' => -1,
	'orderby'			=> 'menu_order',
	'order'          => 'DESC',
	// 'order_by'       => 'date',

);

$projects = new WP_Query( $args ); ?>

<section id="projects">
	<?php if ( $projects->have_posts() ) : ?>
		<div class="projects">

			<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
				<div class="project-item" data-name="<?php echo $post->post_name; ?>">
					<a href="<?php echo get_field( 'project_url' ); ?>" target="_blank">
						<img
							class="project-img"
							src="<?php echo get_field( 'image' ); ?>"
							alt="<?php echo get_field( 'image_alt' ); ?>"
						/>
					</a>
					<h1 class="project-title"> <span></span> <span class="icon-chevron-down"></span> <?php the_title(); ?></h1>
					<div class="details-project"></div>
				</div>
			<?php endwhile; ?>

		</div>
	<?php endif; ?>
</section>



