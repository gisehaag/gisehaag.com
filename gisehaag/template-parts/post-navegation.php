<div class="white-box">
	<p>
		<?php
		$prev_post = get_previous_post();
		if (!empty($prev_post)) : ?>
			<a class="post-content" href="<?php echo get_permalink($prev_post->ID); ?>">
				👈🏻 Post anterior
				<!-- <br> -->
				<!-- <?php echo apply_filters('the_title', $prev_post->post_title); ?> -->
			</a>
		<?php endif; ?>
	</p>

	<p>
		<?php
		$next_post = get_next_post();
		if (!empty($next_post)) : ?>
			<a class="post-content" href="<?php echo get_permalink($next_post->ID); ?>">
				Post siguiente 👉🏻
				<!-- <br> -->
				<!-- <?php echo apply_filters('the_title', $next_post->post_title); ?> -->
			</a>
		<?php endif; ?>
	</p>
</div>