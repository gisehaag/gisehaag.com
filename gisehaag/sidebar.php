<div class="box-sidebar">
	<?php if ( is_page( 'contactame' ) ) : ?>

		<?php if ( is_active_sidebar( 'contact-sidebar' ) ) { ?>
			<ul class="sidebar-wrapper" id="sidebar">
				<?php dynamic_sidebar( 'contact-sidebar' ); ?>
			</ul>
		<?php } ?>

	<?php else : ?>

		<?php if ( is_active_sidebar( 'main-sidebar' ) ) { ?>
			<ul class="sidebar-wrapper" id="sidebar">
				<?php dynamic_sidebar( 'main-sidebar' ); ?>
			</ul>
		<?php } ?>

	<?php endif; ?>

</div>
