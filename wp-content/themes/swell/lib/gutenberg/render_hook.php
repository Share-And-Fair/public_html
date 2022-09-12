<?php
namespace SWELL_Theme\Gutenberg;

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * render_hook
 */
require __DIR__ . '/render_hook/core_table.php';
require __DIR__ . '/render_hook/faq.php';


/**
 * SVGの属性値がsaveでおかしくなるバグへの対応
 */
add_filter( 'render_block_loos/box-menu-item', __NAMESPACE__ . '\render_fix_svg_props', 10, 2 );
function render_fix_svg_props( $block_content, $block ) {
	$block_content = str_replace( 'strokewidth=', 'stroke-width=', $block_content );
	$block_content = str_replace( 'strokelinecap=', 'stroke-linecap=', $block_content );
	$block_content = str_replace( 'strokelinejoin=', 'stroke-linejoin=', $block_content );
	return $block_content;
}


/**
 * リッチカラムCSS変数名の後方互換
 */
add_filter( 'render_block_loos/columns', __NAMESPACE__ . '\replace_columns_css_prop', 10, 2 );
function replace_columns_css_prop( $block_content, $block ) {
	$block_content = str_replace( '--swl-fb_pc:', '--clmn-w--pc:', $block_content );
	$block_content = str_replace( '--swl-fb_tab:', '--clmn-w--tab:', $block_content );
	$block_content = str_replace( '--swl-fb:', '--clmn-w--mobile:', $block_content );
	return $block_content;
}

/**
 * ボックスCSS変数名の後方互換
 */
add_filter( 'render_block_loos/box-menu', __NAMESPACE__ . '\replace_box_menu_css_prop', 10, 2 );
function replace_box_menu_css_prop( $block_content, $block ) {
	$block_content = str_replace( '--swl-fb_pc:', '--the-box-width--pc:', $block_content );
	$block_content = str_replace( '--swl-fb_tab:', '--the-box-width--tab:', $block_content );
	$block_content = str_replace( '--swl-fb:', '--the-box-width--mb:', $block_content );
	return $block_content;
}


/**
 * タブブロックのid重複時の追加処理
 */
add_filter( 'render_block_loos/tab', __NAMESPACE__ . '\check_duplicate_tab_id', 10, 2 );
function check_duplicate_tab_id( $block_content, $block ) {
	if ( ! isset( $block['attrs']['tabId'] ) ) {
		return $block_content;
	}

	$tab_id    = $block['attrs']['tabId'];
	$check_key = 'swl-tab-id-' . $tab_id;

	// 同じidが使用済みの場合
	if ( isset( $GLOBALS[ $check_key ] ) ) {
		$GLOBALS[ $check_key ] += 1;
		return str_replace( 'tab-' . $tab_id, 'tab-' . $tab_id . $GLOBALS[ $check_key ], $block_content );
	}

	$GLOBALS[ $check_key ] = 1;
	return $block_content;
}
