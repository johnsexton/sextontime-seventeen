<?php get_header(); ?>

<section class="section-content latest-thumbs">

	<?php if ( have_posts() ) : ?>

	<header class="section-header">
		<h1 class="section-title"><?php post_type_archive_title(); ?></h1>
	</header>

	<?php rewind_posts(); ?>

	<ul class="clearfix">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		// Call Content in List Format.
		get_template_part( 'content', 'thumbs-list' );
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
