<?php $query = new WP_Query( array( 'pagename' => 'mis-fotos' ) ); ?>

<div class="box-sidebar white-box" id="about-me">
	<?php if ( $query->have_posts() ) : ?>

		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<h1 class="title uppercase-text monserrat-font">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>

			<div class="sidebar-content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>

	<?php endif ?>
</div>
