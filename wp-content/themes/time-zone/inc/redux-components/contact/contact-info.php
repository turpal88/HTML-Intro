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
		'title'      => esc_html__( 'Контакты', 'your-textdomain-here' ),
		'id'         => 'contact-info',
		'desc'       => esc_html__( 'Редактировать список контактов', 'your-textdomain-here' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'contact-info-1',
				'type'     => 'section',
				'title'    => esc_html__( 'Блок контактов', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование блока контактов', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'contact-info-addr-1',
				'type'     => 'text',
				'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'contact-info-place-1',
				'type'     => 'text',
				'title'    => esc_html__( 'Место', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'contact-info-icon-1',
				'type'     => 'text',
				'title'    => esc_html__( 'Класс иконки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
            array(
				'id'       => 'contact-info-2',
				'type'     => 'section',
				'title'    => esc_html__( 'Блок контактов', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование блока контактов', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'contact-info-addr-2',
				'type'     => 'text',
				'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'contact-info-place-2',
				'type'     => 'text',
				'title'    => esc_html__( 'Место', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'contact-info-icon-2',
				'type'     => 'text',
				'title'    => esc_html__( 'Класс иконки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
            array(
				'id'       => 'contact-info-3',
				'type'     => 'section',
				'title'    => esc_html__( 'Блок контактов', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование блока контактов', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'contact-info-addr-3',
				'type'     => 'text',
				'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'contact-info-place-3',
				'type'     => 'text',
				'title'    => esc_html__( 'Место', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'contact-info-icon-3',
				'type'     => 'text',
				'title'    => esc_html__( 'Класс иконки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			
			
		),
	)
);