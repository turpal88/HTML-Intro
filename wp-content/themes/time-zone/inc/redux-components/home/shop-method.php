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
		'title'      => esc_html__( 'Блок с преимуществами', 'your-textdomain-here' ),
		'id'         => 'home-shop-method',
		'desc'       => esc_html__( 'Редактировать блок с преимуществами', 'your-textdomain-here' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'shipping-method',
				'type'     => 'section',
				'title'    => esc_html__( 'Первый блок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование первого блока', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'home-shop-method-icon-shipping',
				'type'     => 'text',
				'title'    => esc_html__( 'Класс иконки способа доставки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-shop-method-shipping-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок блока способа доставки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'       => 'home-shop-method-shipping-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание способа доставки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'secure-payment',
				'type'     => 'section',
				'title'    => esc_html__( 'Второй блок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование второго блока', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'home-shop-method-icon-secure-payment',
				'type'     => 'text',
				'title'    => esc_html__( 'Класс иконки защищенного платежа', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
            array(
				'id'       => 'home-shop-method-secure-payment-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок блока защищенного платежа', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
            array(
				'id'       => 'home-shop-method-secure-payment-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание блока защищенного платежа', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'secure-payment-system',
				'type'     => 'section',
				'title'    => esc_html__( 'Третий блок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование третьего блока', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'home-shop-method-icon-secure-payment-system',
				'type'     => 'text',
				'title'    => esc_html__( 'Класс иконки системы защищенного платежа', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
            array(
				'id'       => 'home-shop-method-secure-payment-system-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок блока системы защищенного платежа', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
            array(
				'id'       => 'home-shop-method-secure-payment-system-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание блока системы защищенного платежа', 'your-textdomain-here' ),
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








