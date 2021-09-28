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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sellerdbase' );

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
define( 'AUTH_KEY',         'Gg+<&j`wD$S0d)|`16NWJK P=mzplK+/iQ/.?3sVBeB?%Z?Ys&.[<NCN~NF>MilM' );
define( 'SECURE_AUTH_KEY',  '.q<5De#IQe>u`d}oNR1^r/u^.B1St6r|wB5XJW/EF%gdvYF1_*GSk~O;SDBX@~~Q' );
define( 'LOGGED_IN_KEY',    '_VkKC4=T)g9udJ,CmmJ8:H}QvV{[%02Ffj)l(mwS&9l{pBZ3{^cjZnt1>u/Eg2;;' );
define( 'NONCE_KEY',        'ke;/&#ODbn mNz~9H`X$7<;RjH4?VxSZicMAjtxRuBO(vA]jkNL|Q$~%-u8=gkPO' );
define( 'AUTH_SALT',        'SU&J8bx Dq%Ps!Euwu}^4%%Ur2/6tVpqV+*l]J70q-+djlJCH(,49H^la|>H,vK1' );
define( 'SECURE_AUTH_SALT', 'ug9V=:4v~yw.$vk9qmm_=E,N#F>fYYCRS5>~T}dmw8OH[%+T1k+*,ZOt5lsggaek' );
define( 'LOGGED_IN_SALT',   'vv@)lb6s<( %~@m#4Xxeb6Bij~iM~Wr;@LeH3Trj>LY${ds|p:%Fh^yp{Gst]wkU' );
define( 'NONCE_SALT',       'xs}eo]^8Wxt_!AEQXFk:j.sH YX-9]nY80m:SbBY|`4fj|jfTIShZ5{^u)&>$vr#' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
