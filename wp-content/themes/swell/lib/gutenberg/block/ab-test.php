<?php
namespace SWELL_Theme\Block;

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * ABテストブロック用の処理を登録
 */
add_filter( 'render_block_data', __NAMESPACE__ . '\hook_render_ab_block_data', 10, 2 );
add_filter( 'render_block_loos/ab-test-a', __NAMESPACE__ . '\hook_render_ab_block', 99, 2 );
add_filter( 'render_block_loos/ab-test-b', __NAMESPACE__ . '\hook_render_ab_block', 99, 2 );

// A, Bのどちらかランダムに isHide をセット
function hook_render_ab_block_data( $block, $source_block ) {
	if ( 'loos/ab-test' !== $block['blockName'] ) return $block;

	$abBlocks = $block['innerBlocks'];
	$attrs    = $block['attrs'];
	$flag_num = rand( 1, 100 ); // phpcs:ignore WordPress.WP.AlternativeFunctions.rand_rand
	$rate_A   = $attrs['rate'] ?? 50; // 0 ~ 100
	$show_A   = $rate_A >= $flag_num;

	if ( $show_A ) {
		// Bを削除（Aを表示）
		$abBlocks[1]['attrs'] = ['isHide' => true ];
	} else {
		// Aを削除（Bを表示）
		$abBlocks[0]['attrs'] = ['isHide' => true ];
	}

	$block['innerBlocks'] = $abBlocks;
	return $block;
}


// isHide がついている方は何も出力しない
function hook_render_ab_block( $block_content, $block ) {
	$attrs = $block['attrs'];
	if ( isset( $attrs['isHide'] ) && $attrs['isHide'] ) {
		return '';
	}

	return $block_content;
}
