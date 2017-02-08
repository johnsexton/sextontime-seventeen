<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="date"><?php echo get_the_date(); ?></div>
    <a href="<?php the_permalink(); ?>" class="preview-link" title="<?php echo 'Permalink to ' . the_title_attribute( 'echo=0' ); ?>" rel="bookmark">
        <div class="title"><?php the_title(); ?></div>
    </a>
</li>
