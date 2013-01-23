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
define('DB_NAME', 'mangaHostel');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', '192.168.0.215');

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
define('AUTH_KEY',         '!<CUXW!1RhYoFTY!xQ$s.RO+?ru%I[i4/sK=O#xoj&1h2IdNY1s3[-zEbz0B|-4.');
define('SECURE_AUTH_KEY',  'DYVlBA2iXdFa|}Vg]5()uT70b]j9!-?c*JvBRq@uHrTl-;_pmKb}Mg`>Zfx-W$~K');
define('LOGGED_IN_KEY',    '&hz`yj}LE>xsTo fuP]:Eq.}up`MBJ<!+rDE}j+L#v%Dke9+/? DYA!H4Q#/}09U');
define('NONCE_KEY',        'O7#wW1~zqhbj~lCW39%I7f|rr#dO3Iqt+I7aw@%q6|i>+5y|zD7vzT3S`Za/ZjbE');
define('AUTH_SALT',        'bj4{!}0$8}S.J/0+Ir?W2@o!V+`HIB&P hMh`fd7-W*T**9?~*cdleGks%,t8C|Q');
define('SECURE_AUTH_SALT', 'xeuRskUV-SN*p#WYi|GX-Awyf$XIEO*#b/4$E<S (!|Sot3RbWVD4F}K5i<)|Ef-');
define('LOGGED_IN_SALT',   '+2#$jq<[MWEG`al?A_I[umLdLUnS^+X8^X0He;)z%))PznYQ-X8ko=.yqz5pF0YP');
define('NONCE_SALT',       '~GVq{H(rf?!q}!0(lwoM)u?OHj@:z;E1lCC0hP4gv.bG5`?_3J);TC-1cCdj!2r*');

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
define('WPLANG', 'pt_BR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
/*define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/mangaHostel/';
define('DOMAIN_CURRENT_SITE', '192.168.0.215');
define('PATH_CURRENT_SITE', '/mangaHostel/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);*/


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
