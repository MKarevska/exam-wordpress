<?php

function shop_parent_style() {
	$parenthandle = 'shop';
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' )
	);

}

add_action( 'wp_enqueue_scripts', 'shop_parent_style' );