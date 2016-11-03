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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '&PvaKbsVx~~-k269Yx-!Yd,di.NgVidfcfl4QzLK=d](8zc`@|/.]i;akbwnm[cT');
define('SECURE_AUTH_KEY',  'D. stlot>?QfK}kW;N+yH f|/@{4<2q$52rvAdnp$Z)IUZSmA.PD,j3!!s5L@Bq@');
define('LOGGED_IN_KEY',    '*TnG1^Rz5M-AKNj)>)JJi1og/.KeV;]rA{/zc]z_WezQme^7l@mNA}0K!*jDwm#7');
define('NONCE_KEY',        'fiz)*.P &E5E89)NZ2v^fSt{x[ol)KNR=P4M4brck?ct!>ekw>7(-czmrZ4oz+AR');
define('AUTH_SALT',        'qM:va^IVe#.e3Ni E_UE!!j$zf4OUtt6vjdYu/i2(F>nLGJw_QyapSOv}3*PfN>q');
define('SECURE_AUTH_SALT', 'ztOBTo01vXX%!hoT8t0L18kosJ|aUX:,iC%9;LHP_Pq;gO@R6nh-7pZ/zP6^J[kJ');
define('LOGGED_IN_SALT',   ')9R+{)z.a%Q?JkS*0*I$!QO+Bhj729BO<hcMPCz/}OGD18eXf.%^?|i+0y{#=Kj0');
define('NONCE_SALT',       '$G!hG;bl`Kg~.H)KTzs,`4fZ7{5/xZHORD$qar$|-N~Ejsg o*jEb}+-$$=:6S8~');

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
