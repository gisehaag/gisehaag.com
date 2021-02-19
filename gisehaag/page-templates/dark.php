<?php
/**
 * Template name: Dark
 */

get_header('dark'); ?>

<main id="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>


