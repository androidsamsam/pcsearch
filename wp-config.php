<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'v4x6f_33j83b64' );

/** MySQL database username */
define( 'DB_USER', 'v4x6f_576da78c' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aBE38Y$7eu7' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql73.conoha.ne.jp' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'O/JrD{.^Qb](7lnPYpflg!#M}P0GmiMEPC^ajmkPx#zuLnd+uqRb`I:z0v,*?bA ' );
define( 'SECURE_AUTH_KEY',   '-!v(Blm^[Fr}O* tRUSNY)[MX#<&h<j5q t)Fx,p`z:(D$GzZdG|LKS%&1(PlCbZ' );
define( 'LOGGED_IN_KEY',     '@m(2KgQ^78-bVlnmq,4&b?X?DVADn?`YZ&)&!s`r 7mcUtH-|Wr,8j J#*+*Ri= ' );
define( 'NONCE_KEY',         'i*5Q))Fe=/9Q[>OM**zch^%Zt%YSQc!5lO=CAUrX;t0eRqUd%ft+^We`GeeBMero' );
define( 'AUTH_SALT',         '6m75k0(Jil(bPkmr52eFb`>3ut`!5aGFC.q|a=a#*.Ejv)&)g[2;gb~l$Cr{`x%1' );
define( 'SECURE_AUTH_SALT',  'P[4ZTg[/FvD{M7lNu?}Nl:bx`:FTz|d5SQ>Yv|``oQTOr~ek*9D03AfJRM]#$tt3' );
define( 'LOGGED_IN_SALT',    '3a/V~<qSi9B,g&=M67Z$bcY:^3|XPBb?J]Ou`EmA4,2$<Y2sO8J9.^2(TBen]c%V' );
define( 'NONCE_SALT',        'K#n;fMZ/Ws;ymhynN38%s.Z45}Fsj!4OP6aDQM[nhKWR^n^NowQI={c]TT@/j@6@' );
define( 'WP_CACHE_KEY_SALT', 'VMG`T>5m]CQm-=F2E-m9]0ptwd=&hPZ}{ISI%@s+YBub2Pp--|YkA%1>jq:NS5FY' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'CW_DASHBOARD_PLUGIN_SID', 'ZH6x7LYLoj_nQEMOcAjhZWPUFV7LHu9aT_dB4mse1CBr9pR2TsME15INONiV6AU9423AsrvCz3Q8NGE4ksOp33SSOZSo-HofxsngJ87UEfQ.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'NT5Ll2WitXdfGZKQ7PsokhsmoYwWSHe3YLQ-B3SKw5JSabF4rN4QaJgG77VEEa2jxXYXxzNuVycgw-qxdebnQqq3y-XKQ3t-asrZnLY3Nl8.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
