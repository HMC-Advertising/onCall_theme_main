<?php
//custom post for the carosoul
	add_action( 'init', 'alert' );

//creating new post type for the template

function alert(){
	$labels = array(
		'name'               => _x( 'Alert', 'post type general name' ),
		'singular_name'      => _x( 'Alert', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'car' ),
		'add_new_item'       => __( 'Add New Alert' ),
		'edit_item'          => __( 'Edit Alert' ),
		'new_item'           => __( 'New Alerts' ),
		'all_items'          => __( 'All Alerts' ),
		'view_item'          => __( 'View Alert' ),
		'search_items'       => __( 'Search Alerts' ),
		'not_found'          => __( 'No Alerts Found' ),
		'not_found_in_trash' => __( 'No Alerts Found In The Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Alerts'
		);
	$args = array(
		'menu_icon'     => 'dashicons-images-alt2',
		'labels'        => $labels,
		'description'   => 'These are for the Alerts',
		'public'        => true,
		'menu_position' => 3,
		//'show_in_menu'  => 'edit.php',
		'has_archive'   => true,
		"hierarchical" => false,
		"supports" => array('title', 'editor',"thumbnail")
		//might take out the thumbnail
		
	);
	register_post_type( 'alert', $args );	
}


add_action("manage_alert_posts_custom_column",  "alert_custom_columns");
add_filter("manage_edit-alert_columns", "alert_edit_columns");

function alert_edit_columns($columns){
  $columns = array(
  	'cb' => '<input type="checkbox" />',
  	"title" => "Title",
  	"description" => "Excerpt",
    "feat" => "On Site?",
    "date" => "Date Created"
  );
 
  return $columns;
}


function alert_custom_columns($columns){
	global $post;
	
	$on = get_post_meta($post->ID,  'on_site', true  );
	
	
	switch ($columns) {

		case "title":
			the_title();
		break;
		
		case "description":
			the_excerpt();
      	break;
    	case "feat":
    		if($on == "on"){
    			_e("Yes");
    		}
      		else{
      			_e("No");
      		}
      	break;
    	
      	case "date":
      		 the_date();
      	break;
    }
}

add_action( 'add_meta_boxes', 'on_site_box' );
function on_site_box() {
    add_meta_box( 
        'on_site_box',
        __( 'On Site', 'myplugin_textdomain' ),
        'on_site_box_content',
        'alert',
        'side',
        'high'
    );
}

function on_site_box_content($post){
	wp_nonce_field( plugin_basename( __FILE__ ), 'on_site_box_nonce' );
	$on = get_post_meta($post->ID,  'on_site', true  );
  	echo '<label for="product_price"></label>';
  	echo '<input type="radio" name="on_site" value="on"';
  	
  	if($on == "on"){
  		echo 'checked';
  	}

  	echo '>On<br><input type="radio" name="on_site"';

  	if($on == "off"){
  		echo 'checked';
  	}
  	
  	echo ' value="off">Off';

}

add_action( 'save_post', 'on_site_box_save' );
function on_site_box_save( $post_id ) {

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
  return;

  if ( !wp_verify_nonce( $_POST['on_site_box_nonce'], plugin_basename( __FILE__ ) ) )
  return;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
  }
  $on_site = $_POST['on_site'];
  update_post_meta( $post_id, 'on_site', $on_site );
}




?>