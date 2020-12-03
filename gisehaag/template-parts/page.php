<div class="blog-article">
	<?php while (have_posts()) : the_post(); ?>
		<?php if (is_front_page()) : ?>

			<?php the_content(); ?>

		<?php else : ?>

			<article class="white-box">
				<h1 class="post-title uppercase-text">
					<?php the_title(); ?>
				</h1>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</article>

		<?php endif; ?>
	<?php endwhile; ?>
</div>