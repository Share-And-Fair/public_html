<?php
namespace SWELL_Theme;

use \SWELL_Theme as SWELL;

if ( ! defined( 'ABSPATH' ) ) exit;

class License {

	public static $status_transient_key  = 'swlr_user_status';
	public static $waiting_transient_key = 'swlr_is_waiting_activate';


	/**
	 * ステータスキャッシュ削除
	 */
	public static function delete_status_cache() {
		delete_transient( self::$status_transient_key );
	}


	/**
	 * ユーザー照合
	 */
	public static function check_swlr( $email = '' ) {

		$email = $email ?: get_option( 'sweller_email' );

		// キャッシュをチェック
		$cached_data = get_transient( self::$status_transient_key );
		if ( false !== $cached_data ) {
			SWELL::$licence_status  = $cached_data['status'] ?? '';
			SWELL::$update_dir_path = $cached_data['path'] ?? '';

			// waitingの時間から３分経過した場合
			if ( 'waiting' === SWELL::$licence_status && ! get_transient( self::$waiting_transient_key ) ) {
				SWELL::$licence_status = 'timeout';
			}
		} elseif ( $email ) {

			// API接続
			$response = wp_remote_post(
				'https://users.swell-theme.com/?swlr-api=activation',
				[
					'timeout'     => 3,
					'redirection' => 5,
					'sslverify'   => false,
					'headers'     => [ 'Content-Type: application/json' ],
					'body'        => [
						'email'  => $email,
						'domain' => str_replace( [ 'http://', 'https://' ], '', home_url() ),
					],
				]
			);

			if ( ! is_wp_error( $response ) ) {
				$response_data = json_decode( $response['body'], true );

				SWELL::$licence_status  = $response_data['status'] ?? '';
				SWELL::$update_dir_path = $response_data['path'] ?? '';

				// ワンタイム認証待ちの時
				if ( 'waiting' === SWELL::$licence_status ) {
					// まだ有効期間中は上書きしない
					if ( ! get_transient( self::$waiting_transient_key ) ) {
						set_transient( self::$waiting_transient_key, 1, 3 * MINUTE_IN_SECONDS );
					}
				}
				set_transient( self::$status_transient_key, $response_data, 30 * DAY_IN_SECONDS );
			}
		} else {

			// email空の時
			SWELL::$licence_status  = '';
			SWELL::$update_dir_path = '';
		}

		// SWELL::$update_dir_path セットした上で、パス変更をチェック
		if ( self::is_change_update_dir() ) {
			delete_transient( self::$status_transient_key );
		}
	}


	/**
	 * update pathに変更がないかチェック
	 */
	public static function is_change_update_dir() {

		// 未認証でパスが取得できていない場合
		if ( ! SWELL::$update_dir_path ) return false;

		$dir_ver = '';

		// キャッシュ
		$cached_ver = get_transient( 'swl_update_dir_ver' );

		if ( false !== $cached_ver ) {
			$dir_ver = $cached_ver;
		} else {
			$response = wp_remote_post(
				'https://users.swell-theme.com/?swlr-api=get_dir_ver',
				[
					'timeout'     => 3,
					'redirection' => 5,
					'sslverify'   => false,
					'headers'     => [ 'Content-Type: application/json' ],
					'body'        => [],
				]
			);
			if ( ! is_wp_error( $response ) ) {
				$dir_ver = json_decode( $response['body'], true );
				set_transient( 'swl_update_dir_ver', $dir_ver, DAY_IN_SECONDS * 3 );
			};
		}

		// /v1-hoge → /v2-hoge などに変わってるかどうか
		if ( false === strpos( SWELL::$update_dir_path, "swell-theme/{$dir_ver}" ) ) {
			return true;
		}

		return false;
	}


	/**
	 * 認証削除
	 */
	public static function delete_swlr( $email = '' ) {
		update_option( 'sweller_email', '' );
		self::delete_status_cache();

		SWELL::$licence_status  = '';
		SWELL::$update_dir_path = '';

		// SWELLERS側でも削除
		if ( $email ) {
			$response = wp_remote_post(
				'https://users.swell-theme.com/?swlr-api=deactivate',
				[
					'timeout'     => 3,
					'redirection' => 5,
					'sslverify'   => false,
					'headers'     => [ 'Content-Type: application/json' ],
					'body'        => [
						'email' => $email,
						'url'   => str_replace( [ 'http://', 'https://' ], '', home_url() ),
					],
				]
			);
		}
	}
}
