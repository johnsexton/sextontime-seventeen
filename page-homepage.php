<?php
/**
 * Template Name: Homepage Template
 */

get_header(); ?>

<section class="homepage-profile">
    <header class="profile-header clearfix">
        <img src="<?php bloginfo('template_url'); ?>/images/portrait.png" class="profile-portrait" alt="Portrait of John Sexton" />
        <h1 class="portrait-title">A Little About Me</h1>
        I currently work as an Instructional Technologist @ Embry-Riddle Aeronautical University. I enjoy learning about, keeping up with, and teaching others how to use technology. I am an alumnus of the University of Central Florida #GoKnights #ChargeOn. In my free time I build websites for side projects. <a href="#">View my full profile</a>.
    </header>
</section>

<section class="latest section-content">
    <header class="section-header">
        <h1 class="section-title">Latest Works</h1>
        In my work as a freelance web designer, instructional technologist/designer, I've produced many projects that I want to put on display! Take a look at my latest works below. Feel free to contact me about them if you have any questions. I can talk about this stuff all day! <a href="#">View all works</a>.
    </header>

    <ul class="clearfix">
        <?php
        $wargs = array( 'post_count' => 5, 'post_type' => 'projects' );
        $works = new WP_Query( $wargs );
        if ( $works->have_posts() ) { while ( $works->have_posts() ) {
            $works->the_post();
            get_template_part( 'content', 'homepage-list' );
        }
        wp_reset_postdata(); }
        ?>
    </ul>
</section>

<section class="latest section-content">
    <header class="section-header">
        <h1 class="section-title">Latest Fishing Updates</h1>
        Fishing is the greatest pastime a person can learn. I love it because it puts me in a wonderful state of mind. All the day-to-day distractions go away so there is nothing to worry about. There is no better feeling than the one you get the moment a fish grabs your onto bait and light tightens up and your fishing rod bends. In my fishing journal I like to share a lot of the pictures I take and maybe a story here and there. Check below for my latest fishing updates or <a href="#">view all my fishing entries</a>.
    </header>

    <ul class="clearfix">
        <?php
        $sargs = array( 'post_count' => 5, 'post_type' => 'fishing' );
        $shares = new WP_Query( $sargs );
        if ( $shares->have_posts() ) { while ( $shares->have_posts() ) {
            $shares->the_post();
            get_template_part( 'content', 'homepage-list' );
        }
        wp_reset_postdata(); }
        ?>
    </ul>
</section>

<?php get_footer(); ?>
