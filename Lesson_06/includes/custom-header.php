<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'est_header_parts', 'estore_header_modal', 10 );
function estore_header_modal() {
	get_template_part( 'template-parts/header/modal-login' );
}
add_action( 'est_header_parts', 'estore_container_start', 15 );
function estore_container_start() {
	?>
	<div class="container">
<?php
}

add_action( 'est_header_parts', 'estore_header_icon_login', 20 );
function estore_header_icon_login() {
	get_template_part( 'template-parts/header/login-icon' );
}

add_action( 'est_header_parts', 'estore_header_logo', 30 );
function estore_header_logo() {
	get_template_part( 'template-parts/header/logo' );
}

add_action( 'est_header_parts', 'estore_header_search', 40 );
function estore_header_search() {
	get_template_part( 'template-parts/header/search' );
}

add_action( 'est_header_parts', 'estore_header_card', 50 );
function estore_header_card() {
	get_template_part( 'template-parts/header/mini-card' );
}
add_action( 'est_header_parts', 'estore_container_end', 55 );
function estore_container_end() {
	?>
	</div>
	<?php
}
add_action( 'est_header_parts', 'estore_header_navi', 60 );
function estore_header_navi() {
	get_template_part( 'template-parts/header/navi' );
}
