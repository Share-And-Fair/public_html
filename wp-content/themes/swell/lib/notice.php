<?php
/**
 * 管理画面での通知系
 * ( 管理者権限でのみインクルードされる。)
 *
 * @package swell
 */
namespace SWELL_Theme\Hooks;

if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * notice追加
 */
add_action( 'admin_notices', function() {
	if ( ! empty( \SWELL_Theme::$active_plugins ) ) {
		if ( in_array( 'gutenberg/gutenberg.php', array_keys( \SWELL_Theme::$active_plugins ), true ) ) {
			echo ( '<div class="notice notice-error notce--swl-use-guten">' .
				'<p>' . wp_kses_post( __( 'SWELL: <b>Gutenberg</b>プラグインが有効化されています。基本的には必要ありませんので、無効化してください。', 'swell' ) ) . '</p>' .
			'</div>' );
		}
	}

	if ( 'ok' === \SWELL_Theme::$licence_status ) return;
	$licence_check_url = admin_url( 'admin.php?page=swell_settings_swellers' );

	echo '<div class="notice notice-error notce--swlr-no-activated">' .
			'<p>' . wp_kses_post( sprintf( __( 'SWELLの<a href="%s">ユーザー認証</a>が完了していません。現在、バージョンアップデート機能が制限されています。', 'swell' ), esc_url( $licence_check_url ) ) ) . '</p>' .
		'</div>';
} );


/**
 * ダッシュボードに追加
 */
add_action( 'wp_dashboard_setup', function() {

	wp_add_dashboard_widget(
		'swell-update-info',
		'<i class="icon-swell"></i>' . __( 'SWELLアップデート情報', 'swell' ),
		__NAMESPACE__ . '\dashboard_update_info',
		null,
		null,
		'normal',
		'high'
	);

	if ( current_user_can( 'manage_options' ) ) {
		wp_add_dashboard_widget(
			'swell-site-status',
			'<i class="icon-swell"></i>' . __( 'サイト情報', 'swell' ),
			__NAMESPACE__ . '\dashboard_site_status',
			null,
			null,
			'normal',
			'high'
		);
	}
} );


function dashboard_update_info() {

	// delete_transient( 'swell-upate-posts' );
	$update_posts = get_transient( 'swell-upate-posts' );

	// キャッシュなければ
	if ( ! $update_posts ) {
		$response = wp_remote_get( 'https://swell-theme.com/wp-json/wp/v2/posts?categories=2&per_page=5' );

		if ( is_wp_error( $response ) ) {
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo $response->get_error_code(), __( 'WP HTTP Error: ', 'swell' ) . $response->get_error_message();
			return;
		}

		$response_code = wp_remote_retrieve_response_code( $response );
		if ( $response_code !== 200 ) return;

		$update_posts = json_decode( wp_remote_retrieve_body( $response ) );

		set_transient( 'swell-upate-posts', $update_posts, 4 * HOUR_IN_SECONDS );
	}

	if ( empty( $update_posts ) ) return;

	?>
	<div class="wordpress-news hide-if-no-js">
		<div class="rss-widget">
			<ul>
				<?php foreach ( $update_posts as $item ) : ?>
					<li><a href="<?php echo esc_url( $item->link ); ?>" target="_blank" rel="noreferrer"><?php echo esc_html( $item->title->rendered ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<?php
}


function dashboard_site_status() {

	echo '<h3>' . esc_html__( 'バージョン情報', 'swell' ) . '</h3>';
	echo '<div class="__row"><span>WordPress</span>: <b>' . esc_html( get_bloginfo( 'version' ) ) . '</b></div>';
	echo '<div class="__row"><span>SWELL</span>: <b>' . esc_html( \SWELL_Theme::$swell_version ) . '</b></div>';
	echo '<div class="__row"><span>PHP</span>: <b>' . esc_html( phpversion() ) . '</b></div>';

	echo '<hr>';
	echo '<h3>' . esc_html__( '有効化中のプラグイン一覧', 'swell' ) . '</h3>';
	if ( empty( \SWELL_Theme::$active_plugins ) ) {
		echo esc_html__( '有効なプラグインはありません。', 'swell' );
	} else {
		$all = '';
		foreach ( \SWELL_Theme::$active_plugins as $path => $plugin ) {
			$all .= '<div class="__plugin">' . $plugin['name'] . ' <small>(v.' . $plugin['ver'] . ')</small></div>';
		}
		echo $all; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

}
