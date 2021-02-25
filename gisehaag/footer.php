<footer class="header-footer-bgc">
	<div class="footer-content">
		<?php echo sprintf(
			'<i>✏</i> %s<i>❤</i>%s <a href="%s">%s</a><i>⭐</i> |<i> 2020 - %s </i>',
			__( 'Developed with', 'gisehaag' ),
			__( 'by', 'gisehaag' ),
			home_url(),
			__( 'GisehaaG', 'gisehaag' ),
			date( 'Y' )
		); ?>

	</div>

	<?php wp_footer(); ?>

</body>

</html>
