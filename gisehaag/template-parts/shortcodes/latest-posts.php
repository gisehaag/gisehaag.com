<?php

$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 1,
	'order'          => 'DESC',
	'order_by'       => 'date'
);

$query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
	<?php while ($query->have_posts()) : $query->the_post(); ?>
		<div class="white-box">
			<p class="post-category uppercase-text">
				<?php the_category(); ?>
			</p>
			<h1 class="post-title uppercase-text">
				<?php the_title(); ?>
			</h1>
			<p class="post-meta">
				<span><i class="fas fa-user"></i> <?php the_author(); ?> </span><span id="separator">/</span><span><i class="fas fa-calendar-day"></i><?php the_date(''); ?></span>
			</p>
			<?php the_post_thumbnail('large', array('class' => 'post-image', 'alt' => get_the_title())); ?>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>
<?php endif ?>