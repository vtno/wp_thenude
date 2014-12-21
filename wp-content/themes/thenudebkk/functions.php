<?php

//create nav menu
if (function_exists('register_nav_menus')) {
    register_nav_menus(array('primary' => 'Header Navigation'));
}
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
}
if (function_exists('add_image_size')) {
    add_image_size('featured', 400, 250, true);
    add_image_size('post-thumb', 200, 125, true);
}
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
/**
 * 	Use latest jQuery release
 */
if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false, '');
    wp_enqueue_script('jquery');
}
//remove css from woocommerce
// Remove each style one by one
/*
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );