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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'L9h.!SSRcHCSY0GO<q[yLXk@d-nz+9&4xH+Drw?_cs>V<*9CHBZ?2Bi1QG(o7M~R' );
define( 'SECURE_AUTH_KEY',  'QvR+B1+0W2`)NalD*Y&R#/T:lkX9CTW@h!<JJ|~cci1gl+=WWefrQYR0|W~5N*F9' );
define( 'LOGGED_IN_KEY',    'CO7~M2VNKU)8=<1E|d3 8[g)?}si?T>Sba!d[.iOC6)0%wh9mtMuvW]-ALr5-!D,' );
define( 'NONCE_KEY',        'F/5{I6[ENB?,%Pgq-aVlsi&2o|Yri)ehA5jtGS<AjO*H?fZqE.6;DS@A${M(<i)O' );
define( 'AUTH_SALT',        'qym.w<N2l(jr|`;LGhTRT/%qe/qMt!)%}w|$L3nA)]{Fd^K_OPjRD;1W2a @<kDN' );
define( 'SECURE_AUTH_SALT', '^(k^4$ULid-I%(`ngpds47260W!U4g~B#XfA{;FR@okShc?9-B9Ee)h52rRc|eTc' );
define( 'LOGGED_IN_SALT',   'v1|6&Nly{I3K==G*vfk>1GI$/!D^2DzHO~4AZJ3aS%Jt+}*-uc&MN_}>wL;1VLY]' );
define( 'NONCE_SALT',       'H&ttdk_dh=.JFCsm)=#$xGU=a0T+~zK_O,C*ehLqtjI,w^uwKi-eu(|VJH,vN*#)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
