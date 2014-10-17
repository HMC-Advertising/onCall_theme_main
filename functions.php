<?php
	
require("assets/php/scripts.php");
require("assets/php/shortcode.php");
require("assets/php/widget.php");
require("assets/php/post_types.php");
	
//Register Navigation
function register_navigation() {

	$locations = array(
		'main_menu' => __( 'Main Menu', 'text_domain' ),
		'footer_menu' => __( 'Footer Menu', 'text_domain' ),
		'emc_menu' => __( 'EMC Menu', 'text_domain' ),
		'mrc_menu' => __( 'MRC Menu', 'text_domain' ),
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'register_navigation' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );	

//featured image

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)



?>