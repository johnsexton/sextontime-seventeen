<?php get_header(); ?>

<section class="section-content">

	<header class="section-header">
		<h1 class="section-title">Journal Entries</h1>
	</header>

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
