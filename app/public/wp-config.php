<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '4nZw3x{53a}w$*O@Tqa)}_U?&p^N~/}`(j*)YS>`8xfgaQ,uldB;:0=J,cDW-r7!' );
define( 'SECURE_AUTH_KEY',   '=,9J|[6AMg]@Jye$E=}]/B1lLuu}z~f8,$Z6P/%cPO*E[uWOyDN^:#lk3;lc~YJT' );
define( 'LOGGED_IN_KEY',     'v4uZJ0*8L<7?U<hJ5:w$rN%NE)[jYKkn-p%]NZ+#l*a{{/oPgA4<DCHM9e}`r1%1' );
define( 'NONCE_KEY',         'U8eL)EUBks_o?<i`.ze}~ e%_hUm}yd-PPZ)O?a3-g#AtgUF_|@%8qw]3B`Wl6}.' );
define( 'AUTH_SALT',         '#AP2,l|0-($I?v^&& 3tXjkO3FaU( qC.3y!l){8`W4xb`WZj.t#)`zR<%fge*]}' );
define( 'SECURE_AUTH_SALT',  'hJMAY63BOz]8&q,1>$^I{Rmg3L.aU,&eKZ1fTiAR(<x+ST/Kyl_u!yvS&3!veO3W' );
define( 'LOGGED_IN_SALT',    'iIcIBe`(MrUTcK/QT)N%GH`Xx35]1UH.tOe`yf?/_C$@lG1lkr.Aja{Lp}a|rQZu' );
define( 'NONCE_SALT',        '4RVjFtWpB/=$ndBGWH9OvtnaBw(;F>nj+FuWYzHMpeR[xdZ @2;n~yv#Z$w>_[sw' );
define( 'WP_CACHE_KEY_SALT', 'c_h.r?,m~UU1aCg7t^gzJ6y37{5d*aXuVOXrkz7$A@^|xYnP;>z13QR0z-xK};H}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
