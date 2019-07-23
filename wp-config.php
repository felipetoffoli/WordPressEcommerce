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
define( 'DB_NAME', 'centrooesteshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&Y1VS2LhN6RmGQ~h}Ca6JU2HlEuQx*[=U~2A=DpW+@ <#3#/2, (@9jOuWvG5l+%' );
define( 'SECURE_AUTH_KEY',  '9}hy-/(+-6RD|.HL?3|Y:(|CW|81^@l~`=SAzf|xw#6vI3@}58HFW2Fui$|3lo0P' );
define( 'LOGGED_IN_KEY',    '8}84cX]e?IjCvI>}m>a`3J]=<T7C#E!18wFW/f>SQx}?CNLy,kUUAInPa+>^ws4a' );
define( 'NONCE_KEY',        'gI! +R6NM~%f $asnp>Ly<Q.:]k6|Yu>q[-Osp-TY=9+8x;?Yzlapln/V>B0Q+NJ' );
define( 'AUTH_SALT',        'FiD68t]g*oR4)fW{,RyFxc{IeXxH7,_RdPSi}9E8YQl%iKimA%ku1P,^Cn/xGW62' );
define( 'SECURE_AUTH_SALT', ':: XS9/>XJ#S4UH<jUgwX2bFS2PeR&3[7-[@N;7vhp9{@JFNj|uA,Sw%GMmCCP[:' );
define( 'LOGGED_IN_SALT',   ';vwM~pDQ7mgc<(bh%g/UU#3mR8,NLI7NCq@_r9S{?l{d(]q.NyBi8|JpjY`FAe3+' );
define( 'NONCE_SALT',       'Ph#So5!:=U$ noCZIzyfPa2*KvRT[CZ]D9*Q-M8#45k{IF6~pUM9ANCVdUGy+oAx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
