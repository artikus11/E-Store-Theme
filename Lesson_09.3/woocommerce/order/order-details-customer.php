<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<section class="woocommerce-customer-details panel panel-primary">

	<?php if ( $show_shipping ) : ?>

	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
		<div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

	<?php endif; ?>

	<h2 class="woocommerce-column__title panel-heading"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h2>

	<address class="panel-body">
		<?php if ( $order->get_billing_first_name() ) : ?>
		<p class="woocommerce-customer-details--name"> Имя:
		<?php echo $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();	?>
		</p>
		<?php endif; ?>

		<?php if ( $order->get_billing_company() ) : ?>
		<p class="woocommerce-customer-details--company">Компания:
		<?php echo $order->get_billing_company();	?>
		</p>
		<?php endif; ?>

		<?php if ( $order->get_billing_city() ) : ?>
			<p class="woocommerce-customer-details--addres">Адрес:</br>
		<?php echo $order->get_billing_postcode() . ', ' . $order->get_billing_country() . ', ' . $order->get_billing_state() . ', ' . $order->get_billing_city() . ', ' . $order->get_billing_address_1() . ' ' . $order->get_billing_address_2(); ?>
		</p>
		<?php endif; ?>

		<?php if ( $order->get_billing_phone() ) : ?>
			<p class="woocommerce-customer-details--phone"><?php echo esc_html( $order->get_billing_phone() ); ?></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_email() ) : ?>
			<p class="woocommerce-customer-details--email"><?php echo esc_html( $order->get_billing_email() ); ?></p>
		<?php endif; ?>
	</address>

	<?php if ( $show_shipping ) : ?>

		</div><!-- /.col-1 -->

		<div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
			<h2 class="woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h2>
			<address>
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( __( 'N/A', 'woocommerce' ) ) ); ?>
			</address>
		</div><!-- /.col-2 -->

	</section><!-- /.col2-set -->

	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
