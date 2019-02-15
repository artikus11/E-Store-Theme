<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);





