<?php get_header(); ?>

<section class="section-content">

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
        // Call Content
        get_template_part( 'content', 'single' );
        // Load up the comment template if comments exist.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    // End the loop.
    endwhile;
    ?>

</section><!-- .section-content -->

<?php get_footer(); ?>
