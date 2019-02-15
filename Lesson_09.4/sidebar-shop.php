<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4 w3ls_mobiles_grid_left">
	<?php dynamic_sidebar( 'sidebar-shop' ); ?>
</aside><!-- #secondary -->
