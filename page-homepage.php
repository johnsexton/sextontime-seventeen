<?php
/**
 * Template Name: Homepage Template
 */

get_header(); ?>

<section class="section-content profile clearfix">
    <h1 class="section-title">About Me</h1>
    <img src="<?php bloginfo('template_url'); ?>/images/portrait.png" class="portrait" alt="Portrait of John Sexton" />
    I currently work as an Instructional Technologist @ <a href="https://erau.edu/">Embry-Riddle Aeronautical University</a>. I enjoy learning about, keeping up with, and teaching others how to use technology. I am an alumnus of the <a href="http://www.ucf.edu/">University of Central Florida</a>. In my free time I build websites for side projects. <a href="<?php echo home_url( '/profile/' );?>">View my full profile</a>.
</section>

<section class="latest-thumbs section-content">
    <header class="section-header">
        <h1 class="section-title">Latest Projects</h1>
        Over the years I've produced many projects that I want to put on display! Take a look at some of my featured projects below. Feel free to contact me about them if you have any questions. I can talk about this stuff all day! <a href="<?php echo home_url( '/projects/' );?>">View all projects</a>.
    </header>

    <ul class="clearfix">
        <?php
        $wargs = array( 'post_count' => 4, 'post_type' => 'projects' );
        $works = new WP_Query( $wargs );
        if ( $works->have_posts() ) { while ( $works->have_posts() ) {
            $works->the_post();
            get_template_part( 'content', 'thumbs-list' );
        }
        wp_reset_postdata(); }
        ?>
    </ul>
</section>

<section class="latest-thumbs section-content">
    <header class="section-header">
        <h1 class="section-title">Latest Fishing Updates</h1>
        Fishing is the greatest pastime a person can learn. I love it because it puts me in a wonderful state of mind. All the day-to-day distractions go away so there is nothing to worry about. There is no better feeling than the one you get the moment a fish grabs your onto bait and light tightens up and your fishing rod bends. In my fishing journal I like to share a lot of the pictures I take and maybe a story here and there. Check below for my latest fishing updates or <a href="<?php echo home_url( '/fishing/' );?>">view all my fishing entries</a>.
    </header>

    <ul class="clearfix">
        <?php
        $sargs = array( 'post_count' => 4, 'post_type' => 'fishing' );
        $shares = new WP_Query( $sargs );
        if ( $shares->have_posts() ) { while ( $shares->have_posts() ) {
            $shares->the_post();
            get_template_part( 'content', 'thumbs-list' );
        }
        wp_reset_postdata(); }
        ?>
    </ul>
</section>

<?php get_footer(); ?>
