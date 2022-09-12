<?php
namespace SWELL_THEME\Menu;

if ( ! defined( 'ABSPATH' ) ) exit;

class Tab_Structure {

	/**
	 * 構造化データ
	 */
	public static function jsonld_settings( $page_name, $cb ) {

		$section_name = 'swell_section_json_ld';
		add_settings_section(
			$section_name,
			__( 'JSON-LD', 'swell' ),
			'',
			$page_name
		);
		add_settings_field(
			'use_json_ld',
			'', // $label,
			$cb,
			$page_name,
			$section_name,
			[
				'id'    => 'use_json_ld',
				'type'  => 'checkbox',
				'label' => __( 'JSON-LDを自動生成する', 'swell' ),
			]
		);

		// 非AMPでも必要になったら実装する
		// add_settings_field(
		// 	'publisher_logo_url',
		// 	'',
		// 	$cb,
		// 	$page_name,
		// 	$section_name,
		// 	[
		// 		'id'     => 'publisher_logo_url',
		// 		'type'   => 'input',
		// 		'before' => '<p>' . __( 'Articleのpublisher.logo.url', 'swell' ) . '</p>',
		// 	]
		// );
	}
}
