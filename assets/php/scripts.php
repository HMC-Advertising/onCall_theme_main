<?php
    add_action("admin_init", "postTypeScripts");

function postTypeScripts($typenow){
    
    if( $typenow != 'post' ) {
       
        // Registers and enqueues the required javascript.
        wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . 'meta-box-image.js', array( 'jquery' ) );
        wp_localize_script( 'meta-box-image', 'meta_image',
            array(
                'title' => __( 'Choose or Upload an Image', 'prfx-textdomain' ),
                'button' => __( 'Use this image', 'prfx-textdomain' ),
            )
        );
        wp_enqueue_script( 'meta-box-image' );
        wp_enqueue_style('thickbox');
        wp_enqueue_script('thickbox');
    }

 

}


?>