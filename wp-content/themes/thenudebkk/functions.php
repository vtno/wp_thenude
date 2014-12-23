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

//customize display of product in collection page
function product_collection_page($atts) {
    if (empty($atts))
        return '';

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 1,
        'no_found_rows' => 1,
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => '_visibility',
                'value' => array('catalog', 'visible'),
                'compare' => 'IN'
            )
        )
    );

    if (isset($atts['sku'])) {
        $args['meta_query'][] = array(
            'key' => '_sku',
            'value' => $atts['sku'],
            'compare' => '='
        );
    }

    if (isset($atts['id'])) {
        $args['p'] = $atts['id'];
    }

    ob_start();

    $products = new WP_Query(apply_filters('woocommerce_shortcode_products_query', $args, $atts));

    if ($products->have_posts()) :
        ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php while ($products->have_posts()) : $products->the_post(); ?>

            <?php wc_get_template_part('content', 'product'); ?>

        <?php endwhile; // end of the loop. ?>

        <?php woocommerce_product_loop_end(); ?>

        <?php
    endif;

    wp_reset_postdata();

    return '<div class="col-lg-4"><div style = "width:80%">' . ob_get_clean() . '</div></div>';
}

add_shortcode('collection-product', 'product_collection_page');

function custom_recent_products($atts) {
    global $woocommerce_loop;

    extract(shortcode_atts(array(
        'per_page' => '12',
        'columns' => '4',
        'orderby' => 'date',
        'order' => 'desc'
                    ), $atts));

    $meta_query = WC()->query->get_meta_query();

    $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page' => $per_page,
        'orderby' => $orderby,
        'order' => $order,
        'meta_query' => $meta_query
    );

    ob_start();

    $products = new WP_Query(apply_filters('woocommerce_shortcode_products_query', $args, $atts));

    $woocommerce_loop['columns'] = $columns;

    if ($products->have_posts()) :
        ?>

        <ul style ="display:inline;">

            <?php while ($products->have_posts()) : $products->the_post(); ?>

                <div class="col-lg-3"><?php wc_get_template_part('content', 'product'); ?></div>
                
            <?php endwhile; // end of the loop. ?>

        </ul>

        <?php
    endif;

    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode('home_recent_products', 'custom_recent_products');
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