<?php
namespace SWELL_THEME\Menu;

if ( ! defined( 'ABSPATH' ) ) exit;

class Tab_Speed {

	/**
	 * キャッシュ
	 */
	public static function cache_settings( $page_name, $cb ) {

		$section_name   = 'swell_section_cache';
		$cache_settings = [
			'cache_style'       => [
				__( '動的なCSSをキャッシュする', 'swell' ),
				'',
			],
			'cache_header'      => [
				__( 'ヘッダーをキャッシュする', 'swell' ),
				'',
			],
			'cache_sidebar'     => [
				__( 'サイドバーをキャッシュする', 'swell' ),
				'',
			],
			'cache_bottom_menu' => [
				__( '下部固定メニューをキャッシュする', 'swell' ),
				'',
			],
			'cache_spmenu'      => [
				__( 'スマホ開閉メニューをキャッシュする', 'swell' ),
				__( '※ ウィジェットのページ分岐は効かなくなります', 'swell' ),
			],
			'cache_top'         => [
				__( 'トップページコンテンツをキャッシュする', 'swell' ),
				__( 'メインビジュアル・記事スライダー・ピックアップバナー・記事一覧リストがキャッシュされます', 'swell' ),
			],
			'cache_blogcard_in' => [
				__( '内部リンクのブログカードをキャッシュする', 'swell' ),
				'',
			],
			'cache_blogcard_ex' => [
				__( '外部リンクのブログカードをキャッシュする', 'swell' ),
				'',
			],
		];

		add_settings_section(
			$section_name,
			__( 'キャッシュ機能', 'swell' ),
			'',
			$page_name
		);

		foreach ( $cache_settings as $key => $data ) {
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

		add_settings_field(
			'cache_card_time',
			'', // 'ブログカードのキャッシュ期間',
			$cb,
			$page_name,
			$section_name,
			[
				'id'         => 'cache_card_time',
				'type'       => 'input',
				'input_type' => 'number',
				'before'     => '<p class="u-mb-5"><b>' . __( 'ブログカードのキャッシュ期間', 'swell' ) . '</b></p>',
				'after'      => __( '日', 'swell' ),
			]
		);
	}


	/**
	 * 遅延読み込み機能
	 */
	public static function lazyload_settings( $page_name, $cb ) {

		$section_name      = 'swell_section_lazyload';
		$lazyload_settings = [
			'ajax_after_post' => [
				__( '記事下コンテンツを遅延読み込みさせる', 'swell' ),
				'',
			],
			'ajax_footer'     => [
				__( 'フッターを遅延読み込みさせる', 'swell' ),
				__( '※ ウィジェットのページ分岐は効かなくなります。', 'swell' ),
			],
		];

		add_settings_section(
			$section_name,
			__( '遅延読み込み機能', 'swell' ),
			'',
			$page_name
		);

		foreach ( $lazyload_settings as $key => $data ) {
			if ( null === $data[1] ) {
				add_settings_field(
					$key,
					$data[0],
					'__return_false',
					$page_name,
					$section_name,
					[]
				);
			} else {
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

		add_settings_field(
			'label_lazyload',
			__( '画像等のLazyload', 'swell' ),
			'__return_false',
			$page_name,
			$section_name,
			[]
		);

		add_settings_field(
			'lazy_type',
			'',
			$cb,
			$page_name,
			$section_name,
			[
				'id'      => 'lazy_type',
				'type'    => 'radio',
				'choices' => [
					'none'      => __( '使用しない', 'swell' ),
					'lazy'      => __( '<code>loading="lazy"</code>を使用する', 'swell' ),
					'lazysizes' => __( 'スクリプト(lazysizes.js)を使って遅延読み込みさせる<br><small>※ img, video, iframeタグに適用されます。</small>', 'swell' ),
				],
			]
		);

		add_settings_field(
			'label_lazyloadscript',
			__( 'スクリプトの遅延読み込み', 'swell' ),
			'__return_false',
			$page_name,
			$section_name,
			[]
		);

		add_settings_field(
			'use_delay_js',
			'',
			$cb,
			$page_name,
			$section_name,
			[
				'id'    => 'use_delay_js',
				'type'  => 'checkbox',
				'label' => __( 'スクリプトを遅延読み込みさせる', 'swell' ),
			]
		);

		$delayjs_class = '-delay-js';
		$value         = \SWELL_Theme::$options['use_delay_js'];
		if ( ! $value ) {
			$delayjs_class .= ' -disable';
		}

		add_settings_field(
			'delay_js_list',
			'',
			$cb,
			$page_name,
			$section_name,
			[
				'id'     => 'delay_js_list',
				'class'  => $delayjs_class,
				'type'   => 'textarea',
				'rows'   => 12,
				'before' => '<p class="u-mb-5"><b> ' . __( '遅延読み込み対象にするスクリプトのキーワード', 'swell' ) . '</b></p>',
				'desc'   => __( '指定されたキーワードが含まれるscriptタグを遅延読み込みします。<br>複数の場合は「,（+改行）」で区切ってください。<br><a class="swl-helpLink" href="https://swell-theme.com/basic-setting/8864/" target="_blank">キーワードの書き方の例はこちら</a>', 'swell' ),
			]
		);

		add_settings_field(
			'delay_js_prevent_pages',
			'',
			$cb,
			$page_name,
			$section_name,
			[
				'id'     => 'delay_js_prevent_pages',
				'class'  => $delayjs_class,
				'type'   => 'textarea',
				'rows'   => 6,
				'before' => '<p class="u-mb-5"><b>' . __( 'スクリプトの遅延読み込み機能をオフにするページ', 'swell' ) . '</b></p>',
				'desc'   => __( '指定されたキーワードが含まれるページでは、スクリプトの遅延読み込み機能がオフになります。<br>複数の場合は「,（+改行）」で区切ってください。', 'swell' ),
			]
		);

		add_settings_field(
			'delay_js_time',
			'',
			$cb,
			$page_name,
			$section_name,
			[
				'id'      => 'delay_js_time',
				'class'   => $delayjs_class,
				'type'    => 'select',
				'before'  => '<p class="u-mb-5"><b>' . __( '遅延させる秒数', 'swell' ) . '</b></p>',
				'choices' => array_map( function( $i ) {
					return sprintf( __( '%s秒', 'swell' ), $i );
				}, [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15 ] ),
			]
		);
	}

	/**
	 * ページ遷移高速化
	 */
	public static function pjax_settings( $page_name, $cb ) {

		$section_name = 'swell_section_pjax';

		add_settings_section(
			$section_name,
			__( 'ページ遷移高速化', 'swell' ),
			'',
			$page_name
		);

		add_settings_field(
			'use_pjax',
			__( '高速化の種類', 'swell' ),
			$cb,
			$page_name,
			$section_name,
			[
				'id'      => 'use_pjax',
				'type'    => 'radio',
				// 'label' => $data[0],
				'desc'    => __( '※ Pjax機能についてはいくつか注意点がございます。<a href="https://swell-theme.com/function/5978/" target="_blank">こちらのページ</a>をご一読ください。', 'swell' ),
				'choices' => [
					'off'      => __( '使用しない', 'swell' ),
					'prefetch' => __( 'Prefetch', 'swell' ),
					'pjax'     => __( 'Pjaxによる遷移（非推奨）', 'swell' ),
				],
			]
		);

		$pjax_type      = \SWELL_Theme::$options['use_pjax'];
		$prefetch_class = ( 'prefetch' !== $pjax_type ) ? '-prevent-prefetch -disable' : '-prevent-prefetch';
		$pjax_class     = ( 'pjax' !== $pjax_type ) ? '-prevent-pjax -disable' : '-prevent-pjax';
		add_settings_field(
			'prefetch_prevent_keys',
			__( 'Prefetchさせないページのキーワード', 'swell' ),
			$cb,
			$page_name,
			$section_name,
			[
				'id'    => 'prefetch_prevent_keys',
				'class' => $prefetch_class,
				'type'  => 'textarea',
				'desc'  => __( '複数の場合は「,」で区切ってください。指定した文字列を含む全ページが対象となります。', 'swell' ),
			]
		);

		add_settings_field(
			'pjax_prevent_pages',
			__( 'Pjaxで遷移させないページのURL', 'swell' ),
			$cb,
			$page_name,
			$section_name,
			[
				'id'    => 'pjax_prevent_pages',
				'class' => $pjax_class,
				'type'  => 'textarea',
				'desc'  => __( '複数の場合は「,（+改行）」で区切ってください。また、「http(s)://」から指定しない場合は、その文字列を含む全ページが対象となります。', 'swell' ),
			]
		);

	}


	/**
	 * ページ遷移高速化
	 */
	public static function file_load_settings( $page_name, $cb ) {
		$section_name  = 'swell_section_file_load';
		$load_settings = [
			'load_style_inline' => [
				__( 'SWELLのCSSをインラインで読み込む', 'swell' ),
				'',
			],
			'separate_style'    => [
				__( 'コンテンツに合わせて必要なCSSだけを読み込む【β機能】', 'swell' ),
				__( '※ 全てのCSSが最適化されて読み込まれるわけではありません。', 'swell' ),
			],
			'load_style_async'  => [
				__( 'フッター付近のCSSを遅延読み込みさせる【β機能】', 'swell' ),
				__( '※「SWELLのCSSをインラインで読み込む」がオンの時は効果がありません。', 'swell' ),
			],

		];

		add_settings_section(
			$section_name,
			__( 'ファイルの読み込み', 'swell' ),
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
