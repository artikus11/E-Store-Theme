<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки темы' )
	->set_icon( 'dashicons-carrot' )
	->add_tab( 'Шапка', array(
		Field::make( 'select', 'est_header_logic', 'Будет использоваться логотип?' )
			->add_options(array(
				'yes' => 'Да, буду использовать логотип',
				'no' => 'Нет, буду использовать текст',
			)),
		Field::make( 'image', 'est_header_logo', 'Логотип' )
			->set_conditional_logic(array(
				'relation' => 'AND',
				array(
					'field' => 'est_header_logic',
					'value' => 'yes',
					'compare' => '=',
				)
			)),
		Field::make( 'text', 'est_header_site_name', 'Название сайта' )
			
				->set_default_value('Сайт')
				->set_conditional_logic(array(
					'relation' => 'AND',
					array(
						'field' => 'est_header_logic',
						'value' => 'no',
						'compare' => '=',
					)
				)),
		Field::make( 'text', 'est_header_site_desc', 'Описание сайта' )
			->set_conditional_logic(array(
				'relation' => 'AND',
				array(
					'field' => 'est_header_logic',
					'value' => 'no',
					'compare' => '=',
				)
			))
			->set_default_value(get_bloginfo('description')),

	) )
	->add_tab( 'Подвал', array(
		Field::make( 'text', 'est_footer_copy', 'Копирайта' )
			->set_default_value('&copy; 2017 Electronic Store. All rights reserved')
			->set_width( 30 ),
		Field::make( 'radio', 'est_footer_newsletter_show', 'Показывать блок подписки' )
			->add_options( array(
				'on' => 'Включить',
				'off' => 'Выключить',
			) )
			->set_width( 30 ),
		Field::make( 'radio', 'est_footer_widgets_show', 'Показывать блок виджетов' )
			->add_options( array(
				'on' => 'Включить',
				'off' => 'Выключить',
			) )
			->set_width( 30 ),
	) );

