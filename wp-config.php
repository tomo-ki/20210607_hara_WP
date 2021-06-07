<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'WP_Assignment' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's0~xy1 lOUufEz6p6L8=F!A:eXvNss4EMN]./FB =swm!q0~8n6I[$}Pp}-[Gy8}' );
define( 'SECURE_AUTH_KEY',  '~k:rC``b8]war99exXB@( TR4LvLc_PU}dr$baT1dk4Im;:=~Zeon!x$8a3|d5x9' );
define( 'LOGGED_IN_KEY',    'H3FZJ.rI0kXtAIY2oqeP9RDt3OE88ItGwX9xsmP|93`];4>v2^Xmbg;uh@rlLUrH' );
define( 'NONCE_KEY',        'a8bsiOz/~9I[W@v?fr`Ps0%q:u1p#|Xt^3j&pjPZ!)13@+K168CK.D}cwtcFheYw' );
define( 'AUTH_SALT',        ')%3R<?1l~;@[#}#@FdUdO(-P=-xV_DI>*h-WV&I>#79s+hc.o<5Y[hYQHNaiE1^K' );
define( 'SECURE_AUTH_SALT', 'kT@=<bW)$Y6 k1Lnlqy0r3q:L@L.DP!U<oh`4U AFK`P;;4ij <x$HaW!6TzIGYy' );
define( 'LOGGED_IN_SALT',   'IR.x)BOtuhNB?Bzh8`d>[N(p=NnQ`kciF]YH(6nGN-y)?t3SAg@Bj[E,zw^~potz' );
define( 'NONCE_SALT',       'c5BEK7T>dg[kvhj*9k/iU][p~![!b&2=;5`49Bd92l,FWMQCq[>c;pr<zQ<9Umno' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
