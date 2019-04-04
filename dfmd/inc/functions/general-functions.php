<?php 
defined( 'ABSPATH' ) or die();

/* get post publish date */
if ( ! function_exists( 'wl_theme_get_post_publish_date' ) ) {
	function wl_theme_get_post_publish_date( $post_id ) {
		$posts = get_posts( array( 'post_type' => 'post', 'post__in' => array( $post_id ), 'numberposts' => -1 ) ); //Get all published posts
		foreach ( $posts as $post ) {
		    return get_the_time( 'F', $post->ID ).' '.get_the_time( 'd', $post->ID ).', '.get_the_time( 'Y', $post->ID );
		}
	}
}

/* get post Author name */
if ( ! function_exists( 'wl_theme_get_post_author_name' ) ) {
	function wl_theme_get_post_author_name( $post_id ) {
		$posts = get_posts( array( 'post_type' => 'post', 'post__in' => array( $post_id ), 'numberposts' => -1 ) ); //Get all published posts
		foreach ( $posts as $post ) {
		    return '<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ).'">'.get_the_author().'</a>';
		}
	}
}

/* Get the pagination */
if ( ! function_exists( 'wl_theme_get_the_pagination' ) ) {
	function wl_theme_get_the_pagination() {
		?>
	    <div class="text-center wl-theme-pagination">
	        <?php echo esc_html( the_posts_pagination( array( 'mid_size' => 2 ) ) ); ?>
	        <div class="clearfix"></div>
	    </div>
	<?php
	}
}

/* Get the pagination */
if ( ! function_exists( 'wl_theme_is_companion_active' ) ) {
	function wl_theme_is_companion_active() {
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    	if ( is_plugin_active(  'weblizar-companion/weblizar-companion.php' ) ) {
    		return true;
    	} else {
    		return false;
    	}
	}
}

//comment-reply js //
function wp_construction_enqueue_comments_reply() {

    if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
        // Load comment-reply.js (into footer)
        wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
    }
}
add_action(  'wp_enqueue_scripts', 'wp_construction_enqueue_comments_reply' );

