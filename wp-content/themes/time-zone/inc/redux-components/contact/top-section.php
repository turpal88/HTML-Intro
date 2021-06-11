<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Верхняя секция', 'your-textdomain-here' ),
		'id'         => 'contact-top-section',
		'desc'       => esc_html__( 'Редактировать верхнюю секцию страницы "Contact"', 'your-textdomain-here' ),
		'subsection' => true,
		'fields'     => array(
			
			array(
				'id'       => 'contact-top-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок верхней секции', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			

            ),
	)
);