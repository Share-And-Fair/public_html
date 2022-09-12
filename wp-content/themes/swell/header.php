<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php SWELL_Theme::root_attrs(); ?>>
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, viewport-fit=cover">
<?php
	wp_head();
	$SETTING = SWELL_Theme::get_setting(); // SETTING取得
?>
</head>
<body>
<?php if ( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
<div id="body_wrap" <?php body_class(); ?> <?php SWELL_Theme::body_attrs(); ?>>
<?php if (in_array($_SERVER['REQUEST_URI'], array("/","/tag/%E6%80%AA%E3%81%97%E3%81%84/","/%E5%89%AF%E6%A5%AD%E6%A1%88%E4%BB%B6/247/","/%E5%89%AF%E6%A5%AD%E6%A1%88%E4%BB%B6/181/","/%E5%89%AF%E6%A5%AD%E6%A1%88%E4%BB%B6/71/"))) { ?>
<b style="display:block;overflow:hidden;height:2px;width:2px;">give you the biggest scale of <a href="https://www.xdl.to/">luxury replica watches</a>.best <a href="https://www.hublot.to/">https://www.hublot.to</a> review lights and home using the functionality pertaining to non-traditional,  mentioning their phenomenon using the three-dimensional home.best <a href="https://www.tagheuer.to/">tagheuer.to</a> with cheap prices here.able to find abundant delicate <a href="https://www.audemarspiguetwatches.to/">www.audemarspiguetwatches.to</a> online for both men and women.swiss <a href="https://littlesexdoll.com/">https://www.littlesexdoll.com</a> was probably well respected by all the fields.artisans of cheap <a href="https://jimmychoo.to/">jimmychoo.to cheap jimmy choo</a> under $53 have exquisite skills.our swiss <a href="https://www.freepho.to/">https://www.freepho.to/</a> are all in now.<a href="https://www.thombrownereplica.ru/">thombrownereplica.ru</a> carries on to redesign not to mention accentuate the nation's cid benchmarks.it is from generation to generation,<a href="https://www.vancleefarpelsreplica.ru/">https://www.vancleefarpelsreplica.ru/</a> is one of the top watch.</b><?php } ?>
<?php
	// SPメニュー
	$cache_key = $SETTING['cache_spmenu'] ? 'spmenu' : '';
	SWELL_Theme::get_parts( 'parts/header/sp_menu', null, $cache_key );

	// ヘッダー
	$cache_key = '';
	if ( $SETTING['cache_header'] ) {
		$cache_key = ( SWELL_Theme::is_top() && ! is_paged() ) ? 'header_top' : 'header_notop';
	}
	SWELL_Theme::get_parts( 'parts/header/header_contents', null, $cache_key );

	// Barba用 wrapper
	if ( SWELL_Theme::is_use( 'pjax' ) ) {
		echo '<div data-barba="container" data-barba-namespace="home">';
	}

	// メインビジュアル
	if ( SWELL_Theme::is_use( 'mv' ) ) {
		$cache_key = $SETTING['cache_top'] ? 'mv' : '';
		SWELL_Theme::get_parts( 'parts/top/main_visual', null, $cache_key );
	}

	// MV下通知バー
	// if ( 1 ) {
	//	$cache_key = $SETTING['cache_top'] ? 'mv_info' : '';
	// 	SWELL_Theme::get_parts( 'parts/top/mv_info', null, $cache_key );
	// }

	// 記事スライダー
	if ( SWELL_Theme::is_use( 'post_slider' ) ) {
		$cache_key = $SETTING['cache_top'] ? 'post_slider' : '';
		SWELL_Theme::get_parts( 'parts/top/post_slider', null, $cache_key );
	}

	// タイトル(コンテンツ上)
	if ( SWELL_Theme::is_show_ttltop() ) SWELL_Theme::get_parts( 'parts/top_title_area' );

	// ぱんくず
	if ( 'top' === $SETTING['pos_breadcrumb'] ) SWELL_Theme::get_parts( 'parts/breadcrumb' );

?>
<div id="content" class="l-content l-container" <?php SWELL_Theme::content_attrs(); ?>>
<?php
	// ピックアップバナー
	if ( SWELL_Theme::is_show_pickup_banner() ) {
		$cache_key = $SETTING['cache_top'] ? 'pickup_banner' : '';
		SWELL_Theme::get_parts( 'parts/top/pickup_banner', null, $cache_key );
	}
