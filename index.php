<?php get_header(); ?>

<section class="section-content">

	<header class="section-header">
		<h1 class="section-title">Recent Entries</h1>
	</header>

	<?php if ( have_posts() ) : ?>

	<ul>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		// Call Content in List Format
		get_template_part( 'content', 'list' );
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
