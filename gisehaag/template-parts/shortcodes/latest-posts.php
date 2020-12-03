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
		<?php get_template_part('template-parts/main-loop'); ?>
	<?php endwhile; wp_reset_postdata(); ?>
<?php endif ?>