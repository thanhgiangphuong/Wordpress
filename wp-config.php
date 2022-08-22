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
define( 'DB_NAME', 'august' );

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

define('WP_MEMORY_LIMIT', '256M');

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
define( 'AUTH_KEY',         'QuMVLdGG07V/^Y{#Du6j$t9&@6b;G;^mHNN{!`=Y5H1ln ,e 23*>fB hT!`fTDa' );
define( 'SECURE_AUTH_KEY',  'rUsd4Ltq7MjS@c9P3Y;,mWo%copz#+!607v7~Y61pl<2BL]LcYPVmtJk7Wm ].c;' );
define( 'LOGGED_IN_KEY',    'MYx(v8<25,~{:b{8^%947QRsrvhKe|Qrww,D2{Pr(s>I}r9,xFW2vhqfj1)I2?4?' );
define( 'NONCE_KEY',        '>j*L%G;gIHeB(L+H#h!oJu}mo+B:v>a1L%NAQ9c{r*Wq,euA%._g{x9;6~P5}(CT' );
define( 'AUTH_SALT',        'D?RUZu_$^Iy~Ym7RejsrD?FWKqF&0_zJ4Q?$xCM7TuNbwz;_e^1^Hs{JpqY4(?uZ' );
define( 'SECURE_AUTH_SALT', 'a-6|  `!]/GLsnn%{/7<#zO}NPdD=;yg&zV5iCh<wI!Qn,m`eBPnpA<wTR1U>7$=' );
define( 'LOGGED_IN_SALT',   '&lw1d8;.ut_v$A]Q7I%>xu@atTiU<Mz8RYzckTu*U*^sh59P(iQ{{[(kV:B6JXer' );
define( 'NONCE_SALT',       'idh>M+ZAHlI,9ww/-Kho6d@bTSJhE%vHGRBmKcP-r>GX`>J->Z?@3irC3MpdaL3d' );

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
