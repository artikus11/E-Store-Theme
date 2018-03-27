<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="cart cart-box box_1 site-header-cart">
	<?php estore_woocommerce_cart_link();?>
	<div class="mini-card-content ">
		<?php the_widget('WC_Widget_Cart', 'title=');?>
	</div>
</div>
