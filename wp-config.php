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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'friendsnetsite_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'O^OH|<L8k+g6E,9Fk}~m(xO!ikiYgTP#}vi:MhW6D?#[26uX!zX0F;PX]:AK?T;(' );
define( 'SECURE_AUTH_KEY',  'bI>h pGU5gYn5E7t&2K@4DhL7@@<lB~eFT`~%eSVN#NuaENtn-rWKG} )ZK)$F{Z' );
define( 'LOGGED_IN_KEY',    'MhghQf9%[1~i`5aT[z%Jh#D{Gmwp7UVQ.X) P%huP~I_Z^>NMgMuYWCKX-;qww2+' );
define( 'NONCE_KEY',        '8G6$@_-p)qR}K%5`W7u*<}USTx.=N{ u.|4ftHM@Fb~2`tuRrVdh, omR#sRWf%R' );
define( 'AUTH_SALT',        '$1}kBy{T$n+5EV,8. N*~<`|B|H,MzPIFMPa}^/jH>|1]H8Kex4i :F)x52X+-Q_' );
define( 'SECURE_AUTH_SALT', '-W(:wtayl!y_F1.I779BBRZ0qK|r8%i8dM95- u[wTI8*bWEn+SBYt@]&4qSU8ga' );
define( 'LOGGED_IN_SALT',   'dD=9vm;{v|)2|1u]l)0@,hZ%BA7> OT*GNs1!9JT&|:R}EcWZ(EDx4_r699xB-nj' );
define( 'NONCE_SALT',       'QWOeb%MP5#3=GU|Tj7L^F0jUBkB<7J#:0G[8Psg6Q5>8q[eX&=!4Nc1:7n 7FZDp' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
