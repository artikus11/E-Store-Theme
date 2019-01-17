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
	$classes[] = 'col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
return $classes;
}
add_filter( 'woocommerce_subcategory_count_html', 'estore_remove_count_categories' );
function estore_remove_count_categories($html){
	$html = '';
	return $html;
}

add_filter( 'woocommerce_show_page_title', 'estore_hide_title_shop' );
function estore_hide_title_shop( $hide ) {
	if ( is_shop() ) {
		$hide = false;
	}
	
	return $hide;
}

add_filter( 'post_class', 'estore_add_class_loop_item' );
function estore_add_class_loop_item($clasess){
	if(is_shop() || is_product_taxonomy()){
		$clasess[] = 'col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
	}

	return $clasess;
}

add_filter( 'post_class', 'estore_add_class_loop_item_cross' );
function estore_add_class_loop_item_cross($clasess){
	if(is_cart()){
		if ( in_array( 'product', $clasess ) ) {
			$clasess[] = 'col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
		}
	}

	return $clasess;
}

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

add_action( 'woocommerce_before_shop_loop_item', 'estore_loop_product_div_open' , 5);
function estore_loop_product_div_open(){
	?>
	<div class="agile_ecommerce_tab_left mobiles_grid">
	<?php
}

add_action( 'woocommerce_after_shop_loop_item', 'estore_loop_product_div_close' , 20);
function estore_loop_product_div_close(){
	?>
	</div>
	<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'estore_loop_product_div_image_open', 5 );
function estore_loop_product_div_image_open(){
?>
	<div class="hs-wrapper hs-wrapper2 mobiles_grid">
	<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'estore_loop_product_div_image_close', 30);
function estore_loop_product_div_image_close(){
	global $product;
	$attachment_ids = $product->get_gallery_image_ids();
	
	if ( $attachment_ids && has_post_thumbnail() ) {
		foreach ( $attachment_ids as $attachment_id ) {
			echo wp_get_attachment_image( $attachment_id, 'shop_catalog');
		}
	}
	?>
	<div class="w3_hs_bottom w3_hs_bottom_sub1">
		<?php woocommerce_show_product_loop_sale_flash(); ?>
		<ul>
			<li>
				<a href="#" data-toggle="modal" data-target="#modal-product" data-product-id="<?php echo $product->get_id();?>" class="modal-product-link">
					<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</div>
	</div>
	<?php
}
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title',10 );
add_action( 'woocommerce_shop_loop_item_title', 'estore_template_loop_product_title' , 10);
function estore_template_loop_product_title(){
	echo '<h5><a href="'. get_permalink() .'">' . get_the_title() . '</a></h5>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'estore_loop_product_div_price_open', 7 );
function estore_loop_product_div_price_open(){
	?>
	<div class="simpleCart_shelfItem">
	<?php
}
add_action( 'woocommerce_after_shop_loop_item', 'estore_loop_product_div_price_close', 15 );
function estore_loop_product_div_price_close(){
	?>
	</div>
	<?php
}

add_filter( 'woocommerce_loop_add_to_cart_args', 'estore_add_class_add__to_cart' );
function estore_add_class_add__to_cart($args){
	
	$args['class'] =  $args['class'] . ' w3ls-cart';

	return $args;
}
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_result_count',20  );
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30  );

add_action( 'woocommerce_before_shop_loop', 'estore_wrapper_count_and_ordering_start', 15 );
function estore_wrapper_count_and_ordering_start(){
	?>
	<div class="w3ls_mobiles_grid_right_grid2">
	<div class="w3ls_mobiles_grid_right_grid2_left">
		<?php woocommerce_result_count();?>
	</div>
	<?php
}

add_action( 'woocommerce_before_shop_loop', 'estore_wrapper_count_and_ordering_close', 35 );
function estore_wrapper_count_and_ordering_close(){
	?>
	<div class="w3ls_mobiles_grid_right_grid2_right">
		<?php woocommerce_catalog_ordering();?>
	</div>
	<div class="clearfix"></div>
	</div>
	<?php
}
