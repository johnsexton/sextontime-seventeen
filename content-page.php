<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title">
            <div class="header-meta">
                <?php if ( get_post_type( get_the_ID() ) == 'projects' ) : ?>
                Project Name:</div>
                <?php elseif ( get_post_type( get_the_ID() ) == 'fishing' ) : ?>
                Fishing Update:
                <?php else : ?>
                Journal Entry:
                <?php endif; ?>
            </div>
            <?php the_title(); ?>
        </h1>
        <div class="entry-date"><?php get_the_date() ?></div>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
        <div class="entry-thumbnail"><?php the_post_thumbnail('header'); ?></div>
        <?php endif; ?>
        <?php the_content(); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
