<div class="white-box">
	<div class="navigation-link">
		<?php
		$prev_post = get_previous_post();
		if (!empty($prev_post)) : ?>
			<div class="post-categories uppercase-text">👈🏽 Post anterior</div>
			<a class="post-content title" href="<?php echo get_permalink($prev_post->ID); ?>">
				<?php echo apply_filters('the_title', $prev_post->post_title); ?>
			</a>
		<?php endif; ?>
	</div>

	<div class="navigation-link">
		<?php
		$next_post = get_next_post();
		if (!empty($next_post)) : ?>
			<div class="post-categories uppercase-text">Post siguiente 👉🏽</div>
			<a class="post-content title" href="<?php echo get_permalink($next_post->ID); ?>">
				<?php echo apply_filters('the_title', $next_post->post_title); ?>
			</a>
		<?php endif; ?>
	</div>
</div>