<?php

/**
 * locate_template es como un require pero con posibilidad de buscar en un tema padre si así lo necesitaría.
 * El segundo parámetro es si lo encuentra, carga el shortcode.
 */

locate_template( 'inc/theme-setup.php', true );

locate_template( 'inc/shortcodes.php', true );

locate_template('inc/sidebars.php', true);
