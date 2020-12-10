<?php get_header(); ?>

<main>
	<div class="flex box-width post-section">
		<?php get_template_part( 'template-parts/page' ); ?>

		<?php if ( is_page( 'contact' ) ) : ?>
			<?php get_template_part( 'template-parts/contact-sidebar' ); ?>
		<?php else : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
