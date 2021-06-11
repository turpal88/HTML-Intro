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
		'title'            => esc_html__( 'Видео', 'your-textdomain-here' ),
		'id'               => 'home-video',
		'desc'			   => 'Редактировать блок с видео',
		'subsection'       => true,
		'fields'           => array(
			array(
				'id'           => 'home-video-image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'       => 'home-video-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на видеоролик', 'your-textdomain-here' ),
				'default'  => '#',
			),
			
		),
	)
);