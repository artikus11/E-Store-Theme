<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'woocommerce_before_main_content', 'estore_archive_wrapper_start', 40 );
function estore_archive_wrapper_start(){
?>
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
<?php
}
add_action( 'woocommerce_after_main_content', 'estore_archive_wrapper_end', 30 );
function estore_archive_wrapper_end(){
?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php
}

add_action( 'woocommerce_before_main_content', 'estore_archive_content_wrapper_start', 60 );
function estore_archive_content_wrapper_start(){
	?>
	<div class="col-md-8 w3ls_mobiles_grid_right">
	<?php
}
add_action( 'woocommerce_after_main_content', 'estore_archive_content_wrapper_end', 25 );
function estore_archive_content_wrapper_end(){
	?>
	</div>
	<?php
}
remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories');
add_action( 'woocommerce_before_shop_loop', 'estore_out_subcategories',40 );
function estore_out_subcategories() {
	$cat_out = woocommerce_output_product_categories( array(
		'before'    => '<ul class="w3ls_mobiles_grid_right_grid2">',
		'after'     => '<div class="clearfix"></div></ul>',
		'parent_id' => is_product_category() ? get_queried_object_id() : 0,
	) );
	return $cat_out;
}
add_filter( 'product_cat_class', 'estore_add_classes_product_cat' );
function estore_add_classes_product_cat($classes){
	$classes[] = 'col-md-6 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
return $classes;
}
add_filter( 'woocommerce_show_page_title', 'estore_hide_title_shop' );
function estore_hide_title_shop( $hide ) {
	if ( is_shop() ) {
		$hide = false;
	}
	
	return $hide;
}