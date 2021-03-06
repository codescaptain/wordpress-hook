<?php
add_action ( 'wp_head', 'hook_inHeader' );
function hook_inHeader() {
    if ( is_single() ) {
        // Get the post id using the get_the_ID(); function:
        echo get_post_meta( get_the_ID(), 'meta-head', true );

        /* Or, globalize $post so that we're accessing the global $post variable: */
        //global $post;
        //echo get_post_meta( $post->ID, 'meta-head', true );

        /* Or, access the global $post variable directly: */
        // echo get_post_meta( $GLOBALS['post']->ID, 'meta-head', true );
    }
}
