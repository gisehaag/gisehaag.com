<?php get_header(); ?>

<main>
	<div class="flex box-width post-section">
		<?php get_template_part( 'template-parts/main' ); ?>
		<?php get_sidebar(); ?>
	</div>

	<?php if ( ! empty( get_previous_post() ) && ! empty( get_next_post() ) ) : ?>
		<div class="box-width flex-navigation">
			<?php if ( is_single() ) : ?>
				<?php get_template_part( 'template-parts/post-navigation' ); ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
