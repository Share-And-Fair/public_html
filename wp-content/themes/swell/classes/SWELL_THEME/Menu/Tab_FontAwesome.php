<?php
namespace SWELL_THEME\Menu;

if ( ! defined( 'ABSPATH' ) ) exit;
class Tab_FontAwesome {

	/**
	 * Font Awesome
	 */
	public static function fa_settings( $page_name, $cb ) {

		$section_name = 'swell_section_fa';

		add_settings_section(
			$section_name,
			__( 'Font Awesomeの読み込み', 'swell' ),
			'',
			$page_name
		);

		add_settings_field(
			'load_font_awesome',
			__( '読み込み方', 'swell' ),
			$cb,
			$page_name,
			$section_name,
			[
				'id'      => 'load_font_awesome',
				'type'    => 'radio',
				'choices' => [
					''    => __( '読み込まない', 'swell' ),
					'css' => __( 'CSSで読み込む', 'swell' ),
					'js'  => __( 'JSで読み込む', 'swell' ),
				],
			]
		);

		add_settings_field(
			'fa_version',
			__( 'バージョン', 'swell' ),
			$cb,
			$page_name,
			$section_name,
			[
				'id'      => 'fa_version',
				'type'    => 'radio',
				'choices' => [
					'v6' => 'v6',
					'v5' => 'v5',
				],
			]
		);
	}
}
