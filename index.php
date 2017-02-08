<?php get_header(); ?>

<section class="section-content latest-journal">

	<header class="section-header">
		<h1 class="section-title">Journal Entries</h1>
	</header>

	<div class="alert">At this time, most journal posts are hidden as the site just went through a major redesign. Sorry for the inconvenience.</div>

	<?php if ( have_posts() ) : ?>

	<ul class="clearfix">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		// Call Content in List Format
		get_template_part( 'content', 'journal-list' );
		// End the loop.
		endwhile;
		?>
	</ul>

	<?php theme_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</section><!-- .section-content -->

<?php get_footer(); ?>
