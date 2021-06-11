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
		'title'      => esc_html__( 'Секция выбора', 'your-textdomain-here' ),
		'id'         => 'home-watch-of-choise',
		'desc'       => esc_html__( 'Редактировать секцию выбора', 'your-textdomain-here' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'top-section-start',
				'type'     => 'section',
				'title'    => esc_html__( 'Верхний блок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование верхнего блока', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'home-watch-of-choise-title-top',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок верхнего блока', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-watch-of-choise-desc-top',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание верхнего блока', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'       => 'home-watch-of-choise-link-top',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка кнопки верхнего блока', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'           => 'home-watch-of-choise-image-top',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение верхнего блока', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
                
			),
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'bottom-section-start',
				'type'     => 'section',
				'title'    => esc_html__( 'Нижний блок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактирование нижнего блока', 'your-textdomain-here' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'       => 'home-watch-of-choise-title-bottom',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок нижнего блока', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'       => 'home-watch-of-choise-desc-bottom',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание нижнего блока', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'       => 'home-watch-of-choise-link-bottom',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка кнопки нижнего блока', 'your-textdomain-here' ),
				'default'  => 'Default Text',
                
			),
			array(
				'id'           => 'home-watch-of-choise-image-bottom',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение нижнего блока', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
                
			),
			array(
				'id'     => 'section-end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			
		),
	)
);















