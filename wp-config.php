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
define('DB_NAME', 'naninhome');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Oz[!:M4tI8Y-(@gO(pGPQaBJ`F!*M{*e5EOL+{fa+Sm76<`Cr:G_T!aF(tg0z3P7');
define('SECURE_AUTH_KEY',  'S&>j|yCwRc#nIEF`D!+N4I{A2S$_`U;2K/P#ilTeU9D3#J;uC#j[5}_35,]Dlmv&');
define('LOGGED_IN_KEY',    'Jq&h?Lzh^Andx/rtlqq~pm[)c||^PNpZMW-{94F?v;]i*D}nOBuL;cu]zna-N@6Z');
define('NONCE_KEY',        ',[pC<.|5tu >-E%@KG]XCnr#,2)iO`JXcFOQJ@h}}=bUf]z?C`jMk;^}F[MzTp8P');
define('AUTH_SALT',        'pb0zeQ]6orOI3OVGHUc$C^xb`p:zKHG}^QgZx$Si>{9adZN54YbNy{k`dcH$33V>');
define('SECURE_AUTH_SALT', '_Add`LzY[!6@|~yqmfK%sFk>yevaP+w?^lMl&Ec]uC*2.K~Yb@D9::9,I h-cX,9');
define('LOGGED_IN_SALT',   ',P8;`1m)wE3ND|y9N(0MD#1kcW)+2[5_!M,SM]nc`N]{Cn?0w?T.%(p?>SCbe93J');
define('NONCE_SALT',       'cdULe`$i_uiw~a,X(Li(<0p~d<.{0~^c|?l`D8}z_Hv{2Wa:r~(Ny$$[PI=)h7`T');

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
