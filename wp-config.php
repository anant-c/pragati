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
define( 'DB_NAME', 'pragati2' );

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
define( 'AUTH_KEY',         'y}`q(ERd=>mh6.(]`Fe.|/dYZM47lpYuK$E=wa!&NY0,|?`oFp3J1=g*|&_4B]Wh' );
define( 'SECURE_AUTH_KEY',  'LdKQ`Iz.Z)46VyL>Bv..:0f:1z6l8Ye^r5tAe,D4`LwFb&8x,#,ge0IwPe&;vCA5' );
define( 'LOGGED_IN_KEY',    'rd:[XeJ-8r-g<6Bp&5S88l=G54fe5ouV^k(xb;@/I!PT&Ry/1]7^#TpTL&v&KlCV' );
define( 'NONCE_KEY',        'X*.?Jj3g&|u|I8b[{{ _o-`GGff*l_`7C[rP| %*gTaVy5.Jx5Q{3>*oQ<QT^kzA' );
define( 'AUTH_SALT',        'VqWpidRjb&m}UZ3M],rgy)<D5g#6BDWKer0K5*^)|Z.p9<R75ldaNvQZEm8WN@F~' );
define( 'SECURE_AUTH_SALT', ')$sI4tO%@=o,tLRzA&OHHLR!8m@9b~]9L WAk|4>pfVBAK}75>1eB+fIHe#D[?EA' );
define( 'LOGGED_IN_SALT',   '1AocPchjin%3!@r=LSX73&.|F=V79#>FW]*7Y^NbDE`k.kAhx<ec!*2`DX:4*3TZ' );
define( 'NONCE_SALT',       'GT >yFhfXsLCCKB|v],[sTLbKl=VF<A1lww|Txx$F.Yi.hX.CznVuMg|:*V@kg;M' );

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
