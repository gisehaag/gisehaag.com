<?php $list_elements = get_field( 'list' ); ?>

<section id="section">
	<?php if ( get_field( 'title' ) ) : ?>

		<div class="background">
			<div class="subtitle">
				<h1><?php the_field( 'title' ); ?></h1>
			</div>
		</div>

	<?php else : ?>

		<div class="social">
			<ul class="background">
				<?php foreach ( $list_elements as $element ) : ?>
					<li>
						<a href="<?php echo $element['link']; ?>" target="_blank">
							<span class="<?php echo $element['icon']; ?>"></span><?php echo $element['title']; ?>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>

	<?php endif ?>
</section>
