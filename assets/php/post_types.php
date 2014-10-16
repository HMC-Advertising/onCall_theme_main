<?php
//custom post for the carosoul
	add_action( 'init', 'bootstrapCarosoul' );

//creating new post type for the template

function bootstrapCarosoul(){
	$labels = array(
		'name'               => _x( 'Carosoul Slides', 'post type general name' ),
		'singular_name'      => _x( 'Carosoul', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'car' ),
		'add_new_item'       => __( 'Add New Slide' ),
		'edit_item'          => __( 'Edit Slide' ),
		'new_item'           => __( 'New Slides' ),
		'all_items'          => __( 'All Slides' ),
		'view_item'          => __( 'View Carosoul Slide' ),
		'search_items'       => __( 'Search Carosoul' ),
		'not_found'          => __( 'No Carosoul Slides Found' ),
		'not_found_in_trash' => __( 'No Carosoul Slides Found In The Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Carosoul Slides'
		);
	$args = array(
		'menu_icon'     => 'dashicons-images-alt2',
		'labels'        => $labels,
		'description'   => 'This is the for the Template Front Page Carosoul',
		'public'        => true,
		'menu_position' => 3,
		//'show_in_menu'  => 'edit.php',
		'has_archive'   => true,
		"hierarchical" => false,
		"supports" => array('title', 'editor', 'page-attributes',"thumbnail")
		
	);
	register_post_type( 'bootstrapcarosoul', $args );	
}


add_action("manage_bootstrapcarosoul_posts_custom_column",  "carosoul_custom_columns");
add_filter("manage_edit-bootstrapcarosoul_columns", "carosoul_edit_columns");

function carosoul_edit_columns($columns){
  $columns = array(
  	'cb' => '<input type="checkbox" />',
  	"title" => "Title",
  	"description" => "Description",
    "feat" => "Background Image",
    "order" => "Order",
    "date" => "Date Created"
  );
 
  return $columns;
}


function carosoul_custom_columns($columns){
	global $post;
	
	$bgURL = esc_html( get_post_meta($post->ID,  'bgURL', true ) );
	$order = $post->menu_order;
	
	switch ($columns) {

		case "title":
			the_title();
		break;
		
		case "description":
			the_excerpt();
      	break;
    	case "feat":
      		the_post_thumbnail("thumb") ;
      	break;
    	case "order":
      		_e( $order );
      	break;
      	case "date":
      		 the_date();
      	break;
    }
}


?>