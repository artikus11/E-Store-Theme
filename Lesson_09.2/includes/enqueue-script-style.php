<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'estore_scripts' );
function estore_scripts() {
	wp_enqueue_style( 'estore-style', get_stylesheet_uri(), array('bootstrap-style') , THEME_VER, 'all');
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array() , THEME_VER, 'all');
	wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array() , THEME_VER, 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array() , THEME_VER, 'all');
	wp_enqueue_style('countdown', get_template_directory_uri() . '/assets/css/jquery.countdown.css', array() , THEME_VER, 'all');
	wp_enqueue_style('popuo-box', get_template_directory_uri() . '/assets/css/popuo-box.css', array() , THEME_VER, 'all');
	wp_enqueue_style('fasthover', get_template_directory_uri() . '/assets/css/fasthover.css', array() , THEME_VER, 'all');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:400,400i,700,700i&amp;subset=cyrillic', array() , THEME_VER, 'all');


}

add_action( 'wp_enqueue_scripts', 'estore_styles' );
function estore_styles() {
	
	wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), THEME_VER, true );
	
	wp_enqueue_script( 'estore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), THEME_VER, true );
	
	wp_enqueue_script('bootstrap-script' , get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('imagezoom' , get_template_directory_uri() . '/assets/js/imagezoom.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('countdown' , get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('easyResponsiveTabs' , get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('flexisel' , get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('flexslider' , get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('magnific-popup' , get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('wmuSlider' , get_template_directory_uri() . '/assets/js/jquery.wmuSlider.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('minicart' , get_template_directory_uri() . '/assets/js/minicart.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('easyTabs' , get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('ajax-search' , get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), THEME_VER, true);
	wp_localize_script('ajax-search', 'search_form' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('search-nonce')
	));
	wp_enqueue_script('ajax-quick' , get_template_directory_uri() . '/assets/js/ajax-quick-veiw.js', array('jquery'), THEME_VER, true);
	wp_localize_script('ajax-quick', 'ajax_quick' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('quick-nonce')
	));
	wp_enqueue_script('script' , get_template_directory_uri() . '/assets/js/script.js', array('jquery'), THEME_VER);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_dequeue_style( 'wcqi-css' );
}
