<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * ユーザープロフィールに項目追加
 */
if ( ! function_exists( 'swl__add_user_meta' ) ) :
function swl__add_user_meta( $prof_items ) {
	// 項目の追加
	$prof_items['site2']         = __( 'サイト2', 'swell' );
	$prof_items['schema_url']    = __( '構造化データ用URL', 'swell' );
	$prof_items['position']      = __( '役職・肩書き', 'swell' );
	$prof_items['facebook_url']  = __( 'Facebook URL', 'swell' );
	$prof_items['twitter_url']   = __( 'Twitter URL', 'swell' );
	$prof_items['instagram_url'] = __( 'Instagram URL', 'swell' );
	$prof_items['tiktok_url']    = __( 'TikTok URL', 'swell' );
	$prof_items['room_url']      = __( '楽天ROOM URL', 'swell' );
	$prof_items['pinterest_url'] = __( 'Pinterest URL', 'swell' );
	$prof_items['github_url']    = __( 'Github URL', 'swell' );
	$prof_items['youtube_url']   = __( 'YouTube URL', 'swell' );
	$prof_items['amazon_url']    = __( 'Amazon欲しいものリストURL', 'swell' );
	$prof_items['blog_parts_id'] = __( 'ブログパーツのID', 'swell' );

	return $prof_items;
}
endif;
add_filter( 'user_contactmethods', 'swl__add_user_meta' );
