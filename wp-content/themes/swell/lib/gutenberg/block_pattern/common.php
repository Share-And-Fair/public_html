<?php
namespace SWELL_Theme\Gutenberg;

if ( ! defined( 'ABSPATH' ) ) exit;

// パターンカテゴリーを登録
$pattern_category = 'swell-patterns';
register_block_pattern_category(
	$pattern_category,
	[ 'label' => '[SWELL] ' . __( '汎用パターン', 'swell' ) ]
);

$triple_list = '<!-- wp:list -->' . $n . '<ul><li>' . __( 'リスト', 'swell' ) . '</li><li>' . __( 'リスト', 'swell' ) . '</li><li>' . __( 'リスト', 'swell' ) . '</li></ul>' . $n . '<!-- /wp:list -->';

register_block_pattern(
	'swell-pattern/button-with-microcopy',
	[
		'title'         => __( 'マイクロコピーとアイコン付きのボタン', 'swell' ),
		'content'       => '<!-- wp:paragraph {"align":"center","className":"u-mb-0 u-mb-ctrl","style":{"typography":{"lineHeight":"2"}}} -->' . $n . '<p class="has-text-align-center u-mb-0 u-mb-ctrl" style="line-height:2"><span class="swl-fz u-fz-s">' . __( '＼ ぼたんだよ ／', 'swell' ) . '</span></p>' . $n . '<!-- /wp:paragraph -->' . $n . $n . '<!-- wp:loos/button {"hrefUrl":"###","iconName":"icon-cart","className":"is-style-btn_normal blue_"} -->' . $n . '<div class="swell-block-button is-style-btn_normal blue_"><a href="###" class="swell-block-button__link" data-has-icon="1"><i class="icon-cart __icon"></i><span>' . __( 'ボタン', 'swell' ) . '</span></a></div>' . $n . '<!-- /wp:loos/button -->' . $n,
		'categories'    => [ $pattern_category ],
		'description'   => '',
		'viewportWidth' => 480,
		'blockTypes'    => [ 'core/paragraph', 'loos/button' ],
	]
);

register_block_pattern(
	'swell-pattern/list-border',
	[
		'title'         => __( '枠線付きのリスト', 'swell' ),
		'content'       => '<!-- wp:group {"className":"has-border -border01"} -->' . $n . '<div class="wp-block-group has-border -border01"><div class="wp-block-group__inner-container">' . $triple_list . '</div></div>' . $n . '<!-- /wp:group -->' . $n,
		'categories'    => [ $pattern_category ],
		'description'   => '',
		'viewportWidth' => 480,
		'blockTypes'    => [ 'core/list', 'core/group' ],
		'keywords'      => [ 'list', 'group', 'リスト', 'グループ' ],
	]
);

register_block_pattern(
	'swell-pattern/list-border-bg',
	[
		'title'         => __( '薄い枠線と背景付きのリスト', 'swell' ),
		'content'       => '<!-- wp:group {"className":"has-border -border04", "backgroundColor":"swl-pale-02"} -->' . $n . '<div class="wp-block-group has-border -border04  has-swl-pale-02-background-color has-background"><div class="wp-block-group__inner-container">' . $triple_list . '</div></div>' . $n . '<!-- /wp:group -->' . $n,
		'categories'    => [ $pattern_category ],
		'description'   => '',
		'viewportWidth' => 560,
		'blockTypes'    => [ 'core/list', 'core/group' ],
		'keywords'      => [ 'list', 'group', 'リスト', 'グループ' ],
	]
);

register_block_pattern(
	'swell-pattern/point-group',
	[
		'title'         => __( 'ポイントグループ', 'swell' ),
		'content'       => '<!-- wp:group {"className":"is-style-big_icon_point"} -->' . $n . '<div class="wp-block-group is-style-big_icon_point"><div class="wp-block-group__inner-container">' . $paragraph . $n . $triple_list . '</div></div>' . $n . '<!-- /wp:group -->' . $n,
		'categories'    => [ $pattern_category ],
		'description'   => '',
		'viewportWidth' => 560,
		'blockTypes'    => [ 'core/list', 'core/group' ],
		'keywords'      => [ 'list', 'group', 'リスト', 'グループ' ],
	]
);
