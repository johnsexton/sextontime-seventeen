<?php get_header(); ?>

<section class="section-content">

	<?php if ( have_posts() ) : ?>

	<header class="section-header">
		<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
	</header>

	<?php rewind_posts(); ?>

	<ul>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		// Call Content in List Format.
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
