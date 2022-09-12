<?php
namespace SWELL_Theme\Gutenberg;

if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * render_hook
 */
require __DIR__ . '/gutenberg/render_hook.php';


/**
 * SWELLブロックの登録
 */
require __DIR__ . '/gutenberg/register_blocks.php';


/**
 * init: ブロックパターン
 */
if ( is_admin() && function_exists( 'register_block_pattern' ) ) {
	require __DIR__ . '/gutenberg/block_patterns.php';
}


/**
 * ブロック制御
 */
require __DIR__ . '/gutenberg/block_control.php';



/**
 * 5.8~ に初期配置されているウィジェットのタイトル（h2 タグ）
 */
add_action( 'dynamic_sidebar', function() {
	add_filter( 'render_block_core/group', __NAMESPACE__ . '\render_core_group', 10, 2 );
} );
function render_core_group( $block_content, $block ) {
	$title_class = 'c-widget__title';
	if ( str_contains( \SWELL_Theme::$widget_area_in_output, 'sidebar' ) ) {
		$title_class .= ' -side';
	} elseif ( str_contains( \SWELL_Theme::$widget_area_in_output, 'footer' ) ) {
		$title_class .= ' -footer';
	} elseif ( str_contains( \SWELL_Theme::$widget_area_in_output, 'sp_menu' ) ) {
		$title_class .= ' -spmenu';
	}

	// 5.8のころの初期実装
	$block_content = preg_replace( '/<h2>(.*?)<\/h2>/i', '<div class="' . $title_class . '">$1</div>', $block_content );
	return $block_content;
}
