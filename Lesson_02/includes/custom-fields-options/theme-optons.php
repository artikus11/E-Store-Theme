<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make( 'theme_options', 'Basic Options' )
                                    ->add_fields( array(
	                                    Field::make( 'header_scripts', 'crb_header_script' ),
	                                    Field::make( 'footer_scripts', 'crb_footer_script' ),
                                    ) );

// Add second options page under 'Basic Options'
Container::make( 'theme_options', 'Social Links' )
         ->set_page_parent( $basic_options_container ) // reference to a top level container
         ->add_fields( array(
		Field::make( 'text', 'crb_facebook_link' ),
		Field::make( 'text', 'crb_twitter_link' ),
	) );

// Add third options page under "Appearance"
Container::make( 'theme_options', 'Customize Background' )
         ->set_page_parent( 'themes.php' ) // identificator of the "Appearance" admin section
         ->add_fields( array(
		Field::make( 'color', 'crb_background_color' ),
		Field::make( 'image', 'crb_background_image' ),
	) );