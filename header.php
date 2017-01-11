<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php get_bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif|Montserrat|News+Cycle" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">

	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<header id="header">

        <?php if ( is_front_page() ) : ?>
        <div id="homepage-ribbon">
            <video preload="preload" id="video" autoplay="autoplay" loop="loop">
                <source src="<?php bloginfo('template_url'); ?>/images/bg.mp4" type="video/mp4"></source>
            </video>
            <div class="menu-button"></div>
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">JOHNSEXTON</a></h1>
			<nav id="header-menu">
				<h1>Main Menu</h1>
				<div class="visuallyhidden skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'theme' ); ?>"><?php _e( 'Skip to content', 'theme' ); ?></a></div>
				<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
                <div class="cancel-menu"></div>
			</nav><!-- #header-menu -->
            <div id="site-description-wrapper"><div id="site-description"><p>Bringing <em>awesome</em> to the table.</p></div></div>
        </div><!-- #homepage-ribbon -->

        <?php else : ?>

        <div id="ribbon">
            <div class="menu-button"></div>
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">JOHNSEXTON</a></h1>
			<nav id="header-menu" role="navigation">
				<h1>Main Menu</h1>
				<div class="visuallyhidden skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'theme' ); ?>"><?php _e( 'Skip to content', 'theme' ); ?></a></div>
				<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
			</nav><!-- #header-menu -->
        </div><!-- #robbon -->
    <?php endif; // if is_front_page() ?>

    </header><!-- #header -->

    <div id="content" role="main">
