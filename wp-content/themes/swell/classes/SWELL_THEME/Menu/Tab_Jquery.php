<?php
namespace SWELL_THEME\Menu;

if ( ! defined( 'ABSPATH' ) ) exit;
class Tab_Jquery {

	/**
	 * jQuery
	 */
	public static function jquery_settings( $page_name, $cb ) {

		$section_name  = 'swell_section_jquery';
		$load_settings = [
			'jquery_to_foot'   => [
				__( 'jQueryをwp_footerで登録する', 'swell' ),
				'',
			],
			'remove_jqmigrate' => [
				__( 'jquery-migrateを読み込まない', 'swell' ),
				'',
			],
			'load_jquery'      => [
				__( 'jQueryを強制的に読み込む', 'swell' ),
				__( '※ jQueryに依存したスクリプトを読み込んでいなくても、jQueryを読み込むことができます。', 'swell' ),
			],
		];

		add_settings_section(
			$section_name,
			__( 'jQueryの読み込み', 'swell' ),
			'',
			$page_name
		);

		foreach ( $load_settings as $key => $data ) {
			add_settings_field(
				$key,
				'', // $data[0],
				$cb,
				$page_name,
				$section_name,
				[
					'id'    => $key,
					'type'  => 'checkbox',
					'label' => $data[0],
					'desc'  => $data[1],
				]
			);
		}
	}
}
