<?php
/**
 * Shop Enqueue
 */
function shop_enqueue_scripts() {
	wp_enqueue_script( 'shop-script', plugins_url( 'assets/scripts/scripts.js', __FILE__ ), array( 'jquery' ), 1.1 );
	wp_localize_script( 'shop-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'shop_enqueue_scripts' );



/**
 * Display a single post term
 *
 * @param integer $post_id
 * @param [type] $taxonomy
 * @return void
 */
function shop_display_single_term( $post_id, $taxonomy ) {

    if ( empty( $post_id ) || empty( $taxonomy ) ) {
        return;
    }

    $terms = get_the_terms( $post_id, $taxonomy );

    $output = '';
    if ( ! empty( $terms ) && is_array( $terms ) ) {
        foreach( $terms as $term ) {
            $output .= $term->name . ', ' ;
        }
    }

    return $output;
}
/**
 * Function about visits count
 *
 * @param integer $post_id
 * @return void
 */
function shop_update_job_visit_count( $post_id = 0 ) {
    if ( empty( $post_id ) ) {
        return;
    }

    $visit_count = get_post_meta( $post_id, 'visits_count', true );

    if ( ! empty( $visit_count ) ) {
        $visit_count = $visit_count + 1;

        update_post_meta( $post_id, 'visits_count', $visit_count );
    } else {
        update_post_meta( $post_id, 'visits_count', 1 );
    }
}


/**
 * Functions takes care of the like of the product
 *
 * @return void
 */
function product_like() {
	$product_id = esc_attr( $_POST['product_id'] );

	$like_number = get_post_meta( $product_id, 'likes', true );

    if ( empty( $like_number ) ) {
        update_post_meta( $product_id, 'likes', 1 );
    } else {
        $like_number = $like_number + 1;
        update_post_meta( $product_id, 'likes', $like_number );
    }

    wp_die();
}
add_action( 'wp_ajax_nopriv_job_like', 'job_like' );
add_action( 'wp_ajax_product_like', 'job_like' );

/**
 *Displays the  current user name is user logged
 * 
 * @return void 
 */

function mnk_display_username() {
    $output = '';

    if ( is_user_logged_in() == true ) {
        $current_user = wp_get_current_user();
        $user_display_name = $current_user-> data-> display_name;
        $output = 'Hello, ' . $user_display_name . ', enjoy the article!';
    }

    return $output;
}
add_shortcode( 'display_username', 'mnk_display_username' );

/**
 * function for share button
 *
 * @param [type] $content
 * @return void
 */
function display_twitter_share( $content ) {

    $post_title = get_the_title( get_the_ID() );

    
    $twitter = '<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text='. $post_title .'">Tweet</a>';

    $content .= '<div>'. $twitter .'</div>';

    return $content;
}
add_filter( 'the_content', 'display_twitter_share' );