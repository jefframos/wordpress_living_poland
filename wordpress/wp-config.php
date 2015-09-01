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
define('DB_NAME', 'living_poland');

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
define('AUTH_KEY',         '|:Br]lD<*g)Qa@93JESBoX62muQ{cpSg~0Y_aR+Mj5zC$y#Hzoh+3$(a)JS+#Btp');
define('SECURE_AUTH_KEY',  'm4KC;}faZc))t[CU^uxt5|MU4s&EziE;X2d08{w|7%xrg`dhO FANvydDzPhHxv$');
define('LOGGED_IN_KEY',    '8/$6T`P$-j#VU}Bi-@Ez&[s!}HfKQK4%:W@_m(5ap)XQ!4FH#nZsj}bN;+k2_{Am');
define('NONCE_KEY',        'QW.:bTfqV}=sr+yFG.agXxOmJ?aBn>9mha1`V:=QV:%VDV]W_xF%#OE.8sfXU|[-');
define('AUTH_SALT',        '=dj_h!M924wkAb-4Qa}s{X[lz|wS6n&|c+v|s V_I+f[1tKnBwx1@,:~fn+h}Mpj');
define('SECURE_AUTH_SALT', 'ZAN_abrt/*A8UB(/K+$u8V^QWpuEmSs;FrQMkh*|Jnb=}jY0_pU(bdxW1p/Xr$N ');
define('LOGGED_IN_SALT',   ';0muS7`+(TVC<vSj>!uM|@tFav(UcZ!>gLY~5r/SU,jLxK|h<sN~hH4Y0ExL0T*P');
define('NONCE_SALT',       '$JC}IYCy;n7A(ue^X%+r)A[B.$Lom.`7rmqcL]`Nk&EjK0QkVS],065&72c~p[W6');

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
