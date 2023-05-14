<?php
/**
 * Register a custom post type called "technique".
 *
 * @see get_post_type_labels() for label keys.
 */
function mnk_techniques_cpt() {
	$labels = array(
		'name'                  => _x( 'Techniques', 'Post type general name', 'mnk' ),
		'singular_name'         => _x( 'Technique', 'Post type singular name', 'mnk' ),
		'menu_name'             => _x( 'Techniques', 'Admin Menu text', 'mnk' ),
		'name_admin_bar'        => _x( 'Technique', 'Add New on Toolbar', 'mnk' ),
		'add_new'               => __( 'Add New', 'mnk' ),
		'add_new_item'          => __( 'Add New Technique', 'mnk' ),
		'new_item'              => __( 'New Technique', 'mnk' ),
		'edit_item'             => __( 'Edit Technique', 'mnk' ),
		'view_item'             => __( 'View Technique', 'mnk' ),
		'all_items'             => __( 'All Techniques', 'mnk' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'technique' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true
	);

	register_post_type( 'technique', $args );

    // flush_rewrite_rules();
}
add_action( 'init', 'mnk_techniques_cpt' );

/**
 * Register a 'model' taxonomy for post type 'technique', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function mnk_techniques_model_taxonomy() {
    $labels = array(
		'name'              => _x( 'Model', 'taxonomy general name', 'mnk' ),
		'singular_name'     => _x( 'Model', 'taxonomy singular name', 'mnk' ),
		'search_items'      => __( 'Search Model', 'mnk' ),
		'all_items'         => __( 'All Model', 'mnk' ),
		'parent_item'       => __( 'Parent Model', 'mnk' ),
		'parent_item_colon' => __( 'Parent Model:', 'mnk' ),
		'edit_item'         => __( 'Edit Model', 'mnk' ),
		'update_item'       => __( 'Update Model', 'mnk' ),
		'add_new_item'      => __( 'Add New Model', 'mnk' ),
		'new_item_name'     => __( 'New Model Name', 'mnk' ),
		'menu_name'         => __( 'Model', 'mnk' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);


    register_taxonomy( 'model', 'technique', $args );
}
add_action( 'init', 'mnk_techniques_model_taxonomy' );

/**
 * This is a function registering a custom technique brand taxonomy
 *
 * @return void
 */
function mnk_techniques_brand_taxonomy() {
    $labels = array(
		'name'              => _x( 'Brand', 'taxonomy general name', 'mnk' ),
		'singular_name'     => _x( 'Brand', 'taxonomy singular name', 'mnk' ),
		'search_items'      => __( 'Search Brands', 'mnk' ),
		'all_items'         => __( 'All Brands', 'mnk' ),
		'parent_item'       => __( 'Parent Brand', 'mnk' ),
		'parent_item_colon' => __( 'Parent Brand:', 'mnk' ),
		'edit_item'         => __( 'Edit Brand', 'mnk' ),
		'update_item'       => __( 'Update Brands', 'mnk' ),
		'add_new_item'      => __( 'Add New Brand', 'mnk' ),
		'new_item_name'     => __( 'New Brand Name', 'mnk' ),
		'menu_name'         => __( 'Brand', 'mnk' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'brand', 'technique', $args );
}
add_action( 'init', 'mnk_techniques_brand_taxonomy' );

