<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
register_nav_menus(array(
	'primary' => 'Основное',
	'secodary' => 'Вторичное'

));

function estore_primary_menu(){
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
		'menu_class'        => 'nav navbar-nav',
		'walker' => new EST_Walker_Nav,
	) );
}
class EST_Walker_Nav extends Walker_Nav_Menu{
	public $star_row = '';
	public $end_row = '';
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		
		$classes = array( 'sub-menu');
		//get_pr($depth, false);
		if ($depth === 0){
			$classes[] = 'dropdown-menu';
		}
		if ($depth >=1){
			$classes[] = 'multi-column-dropdown';
		}
		if (isset($this->star_row) && !empty($this->star_row)){
			$classes[] = 'multi-column columns-3';
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul $class_names>{$n}{$this->star_row}";
	}
	
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		$output .= "$indent{$this->end_row}</ul>{$n}";
	}
	

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
		
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		if (in_array('menu-item-has-children',$classes )){
			$classes[] = 'dropdown';
		}
		if (in_array('columns',$classes ) && $args->walker->has_children == 1){
			$this->star_row = '<div class="row">';
			$this->end_row = '</div>';
		} else {
			$this->star_row = '';
			$this->end_row = '';
		}
		//get_pr($classes,false);
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
		
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		$atts['data-toggle']   = $args->walker->has_children == 1 ? 'dropdown' : '';
		$atts['class']   = $args->walker->has_children == 1 ? 'dropdown-toggle' : '';
		$atts['role']   = $args->walker->has_children == 1 ? 'button' : '';
		$atts['aria-haspopup']   = $args->walker->has_children == 1 ? 'true' : '';
		$atts['aria-expanded']   = $args->walker->has_children == 1 ? 'false' : '';
		
		
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		
		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
			
		}
		$caret = $args->walker->has_children == 1 && $depth === 0 ? ' <span class="caret"></span>' : '';
		$title = apply_filters( 'the_title', $item->title, $item->ID );
		//get_pr($item->classes , false);
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after . $caret;
		$item_output .= '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}

		$output .= "</li>{$n}";
	}
	
}

add_filter( 'widget_nav_menu_args', 'est_add_classes_widget_footer', 10);
function est_add_classes_widget_footer($nav_menu_args){
	$nav_menu_args['menu_class'] = 'info';
	return $nav_menu_args;
}