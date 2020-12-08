<?php get_header(); ?>

<main>
	<div class="flex box-width post-section">
		<?php get_template_part('template-parts/main'); ?>
		<?php get_sidebar(); ?>
	</div>

	<div class="box-width flex-navigation">
		<?php if(is_single()) : ?>
			<?php get_template_part('template-parts/post-navigation'); ?>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>