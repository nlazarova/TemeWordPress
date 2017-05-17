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
define('DB_NAME', 'yourhome');

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
define('AUTH_KEY',         'T2H7^Xh>VQ+(fb[[HN{LCUt0I~p4FdNQ-H0T:SjVMM.<gDnxu,YGe6jxoBz*foM,');
define('SECURE_AUTH_KEY',  'sg,]1xX_0_zw^,)>A+g;{m-b4|1+6)Jb<Ke8-=hsG)zlzAw5(vKGC):jSZ q2#3/');
define('LOGGED_IN_KEY',    '-R#A.So;R([Z?4_]I^(2YGnuI>xzyp-j70vy25r:Z)t)v~xrn{_6xWR=B0i`8JxT');
define('NONCE_KEY',        'U:.:I,3p($U:0UNXtah=aK0K~&kHbs%<X,_d$.EB>nf%]<MJUj3qZr:@Bf:(M8iT');
define('AUTH_SALT',        '~PGX@=*IX6KgsP8TzQl`m>ZQaBZy;c;WKP&(IIeN%w*&O!VfV{RQBD(5|SZt>%6~');
define('SECURE_AUTH_SALT', 'RRI}ly{Ou~csE:zws+*+i,vMRZ[>e]ZFgFi@V@HvZ*f>oDF?qlR4l9V=oe`&;<_}');
define('LOGGED_IN_SALT',   'R&4tBSx#xN_Y`eAt5w3hG]*.xYDlGKTYkf6}2MAZQ<U8C9|tG+w3vmcrZ!0PSGRw');
define('NONCE_SALT',       '#Q!P.8fL|X3&e~7Kc0*,@gHL=QHcYUAh}ON7k}ML01pw(]e=vjY&CTVA+D!]AM%e');

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
