<?php

/*
 * Custom Login Page Logo
 *
 
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*
 * Custom CSS
 *
 
function my_column_width() {
    echo '<style type="text/css">';
    echo ''; // STYLES GO HERE 
    echo '</style>';
}
add_action('admin_head', 'my_column_width'); */

/*
 * Removes categories and tags if not being used in blog posts
 *

function remove_post_fields() {
	remove_meta_box( 'categorydiv' , 'post' , 'normal' ); 
	remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' ); 
}
add_action( 'admin_menu' , 'remove_post_fields' ); 

/*
 * Removes columns from blog posts list in dashboard
 *

function set_columns($columns) {
    unset( $columns['author'] );
    unset( $columns['categories'] );
    unset( $columns['tags'] );
    return $columns;
}
add_filter( 'manage_edit-post_columns', 'set_columns' ); 

/*
 * Removes widgets from Dashboard
 *
 
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
//	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
//	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
//	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
//	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' ); 

/*
 * Removes menu items from Dashboard
 *
 
function remove_menus () {
global $menu;
	$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus'); 