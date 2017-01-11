<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>" class="entry-title" title="<?php echo 'Permalink to ' . the_title_attribute( 'echo=0' ); ?>" rel="bookmark"><?php the_title(); ?></a>
    <div class="entry-date"><?php get_the_date() ?></div>
</li><!-- #post-<?php the_ID(); ?> -->
