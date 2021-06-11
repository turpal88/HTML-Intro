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
		'title'            => esc_html__( 'Блок "Все права защищены"', 'your-textdomain-here' ),
		'id'               => 'home-rights-reserved',
		'desc'			   => 'Редактировать блок "Все права защищены"',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-rights-reserved-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст блока "Все права защищены"', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			
			
		),
	)
);