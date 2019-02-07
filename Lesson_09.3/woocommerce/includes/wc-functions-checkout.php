<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_filter( 'woocommerce_form_field_args', 'estore_woocommerce_custom_checkout_fields' );
function estore_woocommerce_custom_checkout_fields( $fields ) {

	$fields['input_class'] = array( 'form-control' , 'margin-bottom-md');

	return $fields;
}
add_filter( 'woocommerce_default_address_fields', 'estore_woocommerce_custom_checkout_default_fields' );
function estore_woocommerce_custom_checkout_default_fields($fields){
	$fields['address_2']['label'] = 'Квартира, дом';
	return $fields;
}

add_filter( 'woocommerce_billing_fields', 'estore_woocommerce_custom_checkout_billing_fields', 10, 2 );
function estore_woocommerce_custom_checkout_billing_fields( $address_fields, $country ) {

	$address_fields['billing_address_1']['class'] = array( 'form-row-first' );
	$address_fields['billing_address_2']['class'] = array( 'form-row-last' );

	$address_fields['billing_city']['class']      = array( 'row col-sm-4' );
	$address_fields['billing_state']['class']     = array( 'row col-sm-4 margin-y-md' );
	$address_fields['billing_postcode']['class']  = array( 'row col-sm-4' );
	$address_fields['billing_phone']['class']     = array( 'form-row-first' );
	$address_fields['billing_email']['class']     = array( 'form-row-last' );
	$address_fields['billing_country']['class']     = array( 'margin-bottom-md' );

	return $address_fields;
}
add_action( 'woocommerce_before_checkout_form', 'estore_checkout_form_start' );
function estore_checkout_form_start(){

	?>
	<div class="row">
	<?php

}
add_action( 'woocommerce_after_checkout_form', 'estore_checkout_form_close' );
function estore_checkout_form_close(){

	?>
	</div>
	<?php

}
add_action( 'woocommerce_checkout_before_customer_details', 'estore_customer_details_start' );
function estore_customer_details_start(){

	?>
	<div class="col-md-8">
	<?php

}
add_action( 'woocommerce_checkout_after_customer_details', 'estore_customer_details_close' );
function estore_customer_details_close(){

	?>
	</div>
	<?php

}

add_action( 'woocommerce_checkout_before_order_review_heading', 'estore_order_review_start' );
function estore_order_review_start(){

	?>
	<div class="col-md-4">
	<?php

}
add_action( 'woocommerce_checkout_after_order_review', 'estore_order_review_close' );
function estore_order_review_close(){

	?>
	</div>
	<?php

}

