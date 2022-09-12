<?php
namespace SWELL_THEME\Menu;

if ( ! defined( 'ABSPATH' ) ) exit;

class Tab_Ad {

	/**
	 * 広告
	 */
	public static function ad_settings( $page_name, $cb ) {

		$section_name = 'swell_section_ad';
		add_settings_section(
			$section_name,
			__( '広告コードの設定', 'swell' ),
			'',
			$page_name
		);

		$ad_settings = [
			'sc_ad_code' => [
				__( '記事内広告 [ad]', 'swell' ),
				__( 'ここで入力したコードは、ショートコード<code>[ad]</code>で簡単に呼び出せるようになります。', 'swell' ),
			],
			'before_h2_addcode' => [
				__( '目次広告', 'swell' ),
				__( '目次の直前または直後に挿入する広告コード。（目次が非表示の場合は最初のH2タグの直前に表示されます。)<br>', 'swell' ) .
				sprintf( __( '目次の前後どちらに設置するかは、<a href="%s" target="_blank">カスタマイザー</a>の「投稿・固定ページ」>「目次」から設定できます。', 'swell' ), admin_url( 'customize.php' ) ),
			],

			'auto_ad_code' => [
				__( '自動広告', 'swell' ),
				__( 'Google AdSenseの自動広告コード。ここで設定した自動広告は、ページごとに非表示にすることが可能です。', 'swell' ),
			],
		];

		foreach ( $ad_settings as $key => $field ) {
			add_settings_field(
				$key,
				$field[0],
				$cb,
				$page_name,
				$section_name,
				[
					'id'    => $key,
					'type'  => 'textarea',
					// 'label' => $field[0],
					'desc'  => $field[1],
					'class' => 'ad_code',
				]
			);
		}

		$section_name = 'swell_section_infeed';
		add_settings_section(
			$section_name,
			__( 'インフィード広告の設定', 'swell' ),
			function() {
				echo '<p class="description">' . esc_html__( 'トップページの投稿リスト・カテゴリーページの投稿リストに表示するインフィード広告に関する設定', 'swell' ) . '</p>';
			},
			$page_name
		);

		$ad_settings = [
			'infeed_code_pc' => [
				__( 'PC・Tabサイズ用', 'swell' ),
				'',
			],
			'infeed_code_sp' => [
				__( 'スマホサイズ用', 'swell' ),
				'',
			],

		];
		foreach ( $ad_settings as $key => $field ) {
			add_settings_field(
				$key,
				$field[0],
				$cb,
				$page_name,
				$section_name,
				[
					'id'    => $key,
					'type'  => 'textarea',
					// 'label' => $field[0],
					'desc'  => $field[1],
					'class' => 'ad_code',
				]
			);
		}

		add_settings_field(
			'infeed_interval',
			__( 'インフィード広告の間隔', 'swell' ),
			$cb,
			$page_name,
			$section_name,
			[
				'id'         => 'infeed_interval',
				'type'       => 'input',
				'input_type' => 'number',
				// 'label' => __( 'インフィード広告を表示する間隔', 'swell' ),
				// 'desc' => '',
				'class'      => 'infeed_ad',
			]
		);

		// 'infeed_interval'    => 4,
	}

}
