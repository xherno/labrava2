<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'labrava2');

/** MySQL database username */
define('DB_USER', 'labrava2');

/** MySQL database password */
define('DB_PASSWORD', 'herno123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
/** 
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
*/
define('AUTH_KEY',         '!9FT_-Y[dvu_-ZfoZ X_(v_,,]zU@t;5(e,DM?x]zcaO9JYw&eIF5:W %KIl5=2?');
define('SECURE_AUTH_KEY',  '7GTfY1XA=vjvQnt!}0D`n8d@@(5R6)[t^=KeQVI_i$g|h_edhbg`#Z.-.+)I#=z5');
define('LOGGED_IN_KEY',    'm-!wXll<Vyzo/g6UeM}*CpJUF5%reSJp8,-YiJJx],]E&*]0zMLV6*o1vq9W}[-7');
define('NONCE_KEY',        'Qi|tTP@OZ=}rmQ;dg~O?}S,I2`-|*j$~+?+_5-T3p={+1T*=6hIczB>^6jB,f.|1');
define('AUTH_SALT',        '+IM1&qk |wOa+IFQu0N/M@~?pkA7-c.IY9:QOW,}hkvlq.wP~5tHPsxiv`;i?t>M');
define('SECURE_AUTH_SALT', 'IZgI)^zqYD)pwqqtZx!]Y{n0?.6p?AE/g?[q|&u@70{aNM1iX]okzF?C+>[APUn3');
define('LOGGED_IN_SALT',   '4,-ck3>`m?{M$|gEi+)Bk:EDU6E7>r?~EzeQ!qmamrpDgF+fsL{dKcI 06A0xUJl');
define('NONCE_SALT',       '1,n;]5x F-=9D1Q$kYTtICtaqgq8I9?Z$QY?cNyyT+5/Dq7CB;=AZDu(M(8UyD,7');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
