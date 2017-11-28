<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header header">
		<?php
		/**
		 * header_parts hook.
		 *
		 * @hooked estore_header_modal - 10
		 * @hooked estore_container_start - 15
		 * @hooked estore_header_icon_login - 20
		 * @hooked estore_header_logo - 30
		 * @hooked estore_header_search - 40
		 * @hooked estore_header_card - 50
		 * @hooked estore_container_end - 55
		 * @hooked estore_header_navi - 60
		 *
		 */
		do_action('est_header_parts');
		?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
