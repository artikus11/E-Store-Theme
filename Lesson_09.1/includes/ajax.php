<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'wp_ajax_search_action', 'esp_search_ajax_action_callback' );
add_action( 'wp_ajax_nopriv_search_action', 'esp_search_ajax_action_callback' );
function esp_search_ajax_action_callback() {
	
	if ( ! wp_verify_nonce( $_POST['nonce'], 'search-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}
	$arg              = array(
		'post_type'   => array( 'post', 'product' ),
		'post_status' => 'publish',
		's'           => sanitize_post($_POST['s']),
	);
	$query_ajax       = new WP_Query( $arg );
	$json_data['out'] = ob_start( PHP_OUTPUT_HANDLER_CLEANABLE );
	if ( $query_ajax->have_posts() ) {
		while ( $query_ajax->have_posts() ) {
			$query_ajax->the_post();
			?>
			<div class="search-result-text">
				<div class="title-searche">
					<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
				</div>
			</div>
			<?php
		}
	} else {
		?>
		<div class="search-result-text">
			Ничего не найдено
		</div>
		<?php
	}
	$json_data['out'] .= ob_get_clean();
	wp_send_json( $json_data );
	wp_die();
}

add_action( 'wp_ajax_ajax_quick_view', 'estore_quick_view_product_callback' );
add_action( 'wp_ajax_nopriv_ajax_quick_view', 'estore_quick_view_product_callback' );
function estore_quick_view_product_callback(){
	
	if ( ! wp_verify_nonce( $_POST['nonce'], 'quick-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}
	$product = wc_get_product(esc_attr($_POST['id']));
	ob_start();
	?>
	<div class="modal-body">
		<div class="col-md-5 modal_body_left">
			<?php
			$attachment_id = get_post_thumbnail_id( $product->get_id() );
			$product_thumb = wp_get_attachment_image_url( $attachment_id, 'shop_single');
			?>
			<img src="<?php echo $product_thumb; ?>" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-7 modal_body_right">
			<h4><?php echo $product->get_name(); ?></h4>
			<p><?php echo $product->get_description(); ?></p>
			<div class="simpleCart_shelfItem">
				<span class="price"><?php echo $product->get_price_html();?></span>
				
				<?php
				printf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
					esc_url( $product->add_to_cart_url() ),
					esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
					'button product_type_'. $product->get_type() .' add_to_cart_button ajax_add_to_cart w3ls-cart',
					'data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '" aria-label="'. $product->get_description() .'"',
					esc_html( $product->add_to_cart_text() )
				)?>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<?php
	$data['product'] = ob_get_clean();
	wp_send_json($data);
	wp_die();
}
