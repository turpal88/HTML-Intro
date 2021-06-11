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
		'title'      => esc_html__( 'Вторая секция', 'your-textdomain-here' ),
		'id'         => 'about-second-section',
		'desc'       => esc_html__( 'Редактировать вторую секцию', 'your-textdomain-here' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'about-second-section-our-mission',
				'type'     => 'section',
				'title'    => esc_html__( 'Блок миссии', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование блока миссии', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'about-second-section-our-mission-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок блока миссии', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-second-section-our-mission-desc-1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание блока миссии первая часть', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
            array(
				'id'       => 'about-second-section-our-mission-desc-2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание блока миссии вторая часть', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
            array(
				'id'       => 'about-second-section-our-vision',
				'type'     => 'section',
				'title'    => esc_html__( 'Блок видения', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование блока видения', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'about-second-section-our-vision-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок блока видения', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-second-section-our-vision-desc-1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание блока видения первая часть', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'       => 'about-second-section-our-vision-desc-2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание блока видения вторая часть', 'your-textdomain-here' ),
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
