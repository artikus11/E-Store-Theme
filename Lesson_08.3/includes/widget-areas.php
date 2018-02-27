<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'widgets_init', 'estore_widgets_init' );
function estore_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'estore' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<section id="%1$s" class="widget w3ls_mobiles_grid_left_grid %2$s">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="w3ls_mobiles_grid_left_grid_sub">',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Сайдбар магазина', 'estore' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<section id="%1$s" class="widget w3ls_mobiles_grid_left_grid %2$s">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="w3ls_mobiles_grid_left_grid_sub">',
	) );
	register_sidebar( array(
		'name'          => 'Подвал левый',
		'id'            => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget info %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Подвал центр левый',
		'id'            => 'footer-2',
		'before_widget' => '<section id="%1$s" class="widget info %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Подвал центр правый',
		'id'            => 'footer-3',
		'before_widget' => '<section id="%1$s" class="widget info %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Подвал правый',
		'id'            => 'footer-4',
		'before_widget' => '<section id="%1$s" class="widget info %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
