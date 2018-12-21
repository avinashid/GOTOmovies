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
define('DB_NAME', 'gotomovies_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8+$aRf+X 0^KbGt3yXQKs.zMR3kcoWi]*7vleiId[;4>kPGBFexsq`l]vEAs*K]7');
define('SECURE_AUTH_KEY',  '| q(-$3 dv^Az[kCB{8Ef;.[0<:T7|`Ng4#hISE/38zwM-nPU,q1Kia`,AQ]2BN ');
define('LOGGED_IN_KEY',    '1lZ(Rrrijsbdj33=HB^y;#0x]R}H+;f0<P{yS4|@KP@}5wqe;-2hJsA(9fU;,+aj');
define('NONCE_KEY',        '$A8{_5)=|QjcJ!%/fmf:/]|b&dfB(AJ?)RUBhmUc?p<x4R**CJTOLD%(if=mvx%U');
define('AUTH_SALT',        ' Z47yU{))A_[^ys_GK3GHO@3)mjnsM;(xYgsnZF$#v;Io.6*Ts&m(0T+W]cj_6Cz');
define('SECURE_AUTH_SALT', 'SmV7;8Kra[)1ItND)%,{Ljb|TUPt!~i#q;oO,cnHG)ORW_w[dx.c3UiE57;(W^~8');
define('LOGGED_IN_SALT',   'h%O=rT`QuX10r3::x]RNH=37{$6~U},rwEn)!Zk%/,;}B&jeFUVt@6=h-7rz#x.5');
define('NONCE_SALT',       '=.K(A`eG6YRG$oCh7/yDT+6jt>*m9%%,~g,JUm`C%Ywp(889%L4w,DszM^izelE(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
