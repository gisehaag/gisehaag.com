<div class="blog-article">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/main-loop'); ?>
	<?php endwhile; ?>
</div>