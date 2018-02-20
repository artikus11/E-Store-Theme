<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'est_footer_parts', 'estore_newsletter_callback', 10 );
function estore_newsletter_callback() {
	get_template_part( 'template-parts/footer/newsletter' );
}
add_action( 'est_footer_parts', 'estore_footer_start', 15 );
function estore_footer_start() {
	?>
	<footer class="footer">
	<?php
}
add_action( 'est_footer_parts', 'estore_widgets_callback', 20 );
function estore_widgets_callback() {
	get_template_part( 'template-parts/footer/widgets' );
}
add_action( 'est_footer_parts', 'estore_copyright_callback', 30 );
function estore_copyright_callback() {
	get_template_part( 'template-parts/footer/copyright' );
}
add_action( 'est_footer_parts', 'estore_footer_end', 40 );
function estore_footer_end() {
	?>
	</footer>
	<?php
}