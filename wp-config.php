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
define('DB_NAME', 'sohandin_wp_lifesupportncare');

/** MySQL database username */
define('DB_USER', 'sohandin_lifesup');

/** MySQL database password */
define('DB_PASSWORD', 'LifeSupportNCare@16');

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
define('AUTH_KEY',         'c!55jYDO.)yL}L`+Ma)Y%JZ[Nj~7.(8ohpyaD~IoqaST3V*NnDCw6 L*2?FF?h[#');
define('SECURE_AUTH_KEY',  'rRKY-7N-9X4/=8(@_mV~KmEJU=*y:H3i>E:9~V]&-+Y4l&e ;cQlZzr5zD6[G=Ac');
define('LOGGED_IN_KEY',    ',O m$|B*$x9=s&[f<*Cz, D|!Ify!Z-XboK`UyZx9W6;S(9`fxEC~cu1V`4|WWbY');
define('NONCE_KEY',        '!x=0eKO}>>HVj3u>qq+a{=)<gO?NfNBbiri-GP8V5m)O6Px&BIgi^uNo$vzkzTm ');
define('AUTH_SALT',        'PMQjB|:q. pF^k;+(,f]:@<|?:B|Jd8|tow%c,~-tQ@<xFkm=V]h0xn|0Rw2xBy3');
define('SECURE_AUTH_SALT', 'tCM|^IA+?S+dZM`-t~{||+O9=n8+e[!B0{GoTN2Su-u |6o8O?V}OoICyu:u:D-)');
define('LOGGED_IN_SALT',   '1KzJH u._IZo^rS4u=TV!* O.t(pyU[rj;v bn()~PK@e4<Fn(B;xtqziItzN<I+');
define('NONCE_SALT',       '/qDo]}z %t{.5 fffA[-tOp;Lapah`K/PN.8)Xt+I}&OTY8!P.dT!uj-Aq}9zn#c');

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

define('TGMPA_OFF', true);