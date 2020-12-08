<article class="white-box">
	<p class="post-category uppercase-text">
		<span class="post-categories"><?php the_category(' | '); ?></span>
	</p>
	<h1 class="title uppercase-text monserrat-font">
		<a href="<?php echo get_the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h1>
	<p class="post-meta">
		<span><i class="fas fa-user"></i> <?php the_author(); ?> </span><span id="separator">/</span><span><i class="fas fa-calendar-day"></i><?php echo get_the_date(); ?></span>
	</p>
	<a href="<?php echo get_the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail('large', array('class' => 'post-image', 'alt' => get_the_title())); ?></a>
	<div class="post-content">

		<?php if(is_singular()) : ?>
			<?php the_content(); ?>
		<?php else : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>

	</div>
</article>