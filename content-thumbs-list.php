<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>" class="preview-link" title="<?php echo 'Permalink to ' . the_title_attribute( 'echo=0' ); ?>" rel="bookmark">
        <img src="<?php the_post_thumbnail_url('preview'); ?>"/>
        <div class="meta">
            <?php if ( get_post_type( get_the_ID() ) != 'projects' ) : ?>
            <div class="date"><?php echo get_the_date(); ?></div>
            <?php endif; ?>
            <div class="preview-title"><?php the_title(); ?></div>
        </div>
    </a>
</li>
