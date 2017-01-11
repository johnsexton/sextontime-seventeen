<?php

/**
 * Display navigation to next/previous pages when applicable
 */

function theme_content_nav( $nav_id ) {
	global $wp_query;

	?>
	<nav id="<?php echo $nav_id; ?>" class="clearfix">
		<h1 class="visuallyhidden"><?php _e( 'Post navigation', 'theme' ); ?></h1>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-prev"><?php previous_posts_link( __( 'Back', 'theme' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-next"><?php next_posts_link( __( 'Next', 'theme' ) ); ?></div>
		<?php endif; ?>

	</nav><!-- #<?php echo $nav_id; ?> -->
	<?php
}
