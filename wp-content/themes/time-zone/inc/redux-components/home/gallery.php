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
		'title'            => esc_html__( 'Галерея', 'your-textdomain-here' ),
		'id'               => 'home-gallery',
		'desc'			   => 'Редактировать галерею',
		'subsection'       => true,
		'fields'           => array(
			array(
				'id'       => 'home-gallery-list',
				'type'     => 'gallery',
				'title'    => esc_html__( 'Добавить/Редактировать галерею', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Здесь можно редактировать галерею', 'your-textdomain-here' ),
			),
			
		),
	)
);
