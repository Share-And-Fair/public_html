<?php
if ( ! defined( 'ABSPATH' ) ) exit;

$date     = $variable['date'] ?? null;
$modified = $variable['modified'] ?? null;

// 両方表示する設定の時、公開日＝更新日であれば更新日は表示しない。
if ( ( $date && $modified ) && ( $date >= $modified ) ) {
	$modified = null;
}

$date_format = get_option( 'date_format' );

?>
<div class="p-articleMetas__times c-postTimes u-thin">
	<?php if ( $date ) : ?>
		<span class="c-postTimes__posted icon-posted" aria-label="<?=esc_attr__( '公開日', 'swell' )?>">
			<?=esc_html( $date->format( $date_format ) )?>
		</span>
	<?php endif; ?>
	<?php if ( $modified ) : ?>
		<time class="c-postTimes__modified icon-modified" datetime="<?=esc_attr( $modified->format( 'Y-m-d' ) )?>" aria-label="<?=esc_attr__( '更新日', 'swell' )?>">
			<?=esc_html( $modified->format( $date_format ) )?>
		</time>
	<?php endif; ?>
</div>
