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
define( 'DB_NAME', 'id14804176_wp_33852123c4f22e18d396610af2dc694c' );

/** MySQL database username */
define( 'DB_USER', 'id14804176_wp_33852123c4f22e18d396610af2dc694c' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b7f48d8fa2a331be5791838d0106904ae9c1d0c3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'lZ#56Jf0nBuA w0!6tI78lhdB.Y~_l5J#u$B|5u}9w(A3}1!euV,5h+|a}_N%LK+' );
define( 'SECURE_AUTH_KEY',   'sa,-C/6,3P@sr5Q[>.:!cE,>Fbxan,3D-X1Z8ne#<Fpp{l2{pZnXMuM`YzQ_|=EO' );
define( 'LOGGED_IN_KEY',     '?iT)Qg|ul&EX4g[}mcbQQjW)mzTosTQs(evPtu+&hA?1Rx~8w8P#AIT#xnOJkROM' );
define( 'NONCE_KEY',         '/C%3y${ ,)SmO~-&<;d|oSq9tS/Kj+b|1=[LbyJvl[Tu.W<On%sWH6G2a~M:cSFk' );
define( 'AUTH_SALT',         'jMq*E41ss0~/|pVrEaP&?F2c` F[gX^+4>!B8:=KXJtP0#K>#>S6,WrlnKPa+r@-' );
define( 'SECURE_AUTH_SALT',  'Qe=96B6zxfE[[p]%=ck;78%7K7rqGK/*wBgnB#;X<Z2^Zj$-TZ}$lM(16l5/6~C%' );
define( 'LOGGED_IN_SALT',    '[[*d7Ob,bR=_<s%+ZZ`Z8a66l5|GT>mb+szvD[c6UqVL$_|Uyj WwzY1tvr~Zdc?' );
define( 'NONCE_SALT',        'ugUaBOl|nBi2HD`;%)T)6sA1rt&(_-&]XbOILy[LE|eHw$B}?Pv<``)ecFA{%u!p' );
define( 'WP_CACHE_KEY_SALT', 'lQogCX+,bYQTGyxjSd:R8C/v/Ex;T*i1X3`&T96!YN_Fpq3? 11jtJtS98k*Quek' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
