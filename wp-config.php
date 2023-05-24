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
define( 'DB_NAME', 'blue_comments' );

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
define( 'AUTH_KEY',         ')f*#2Z^W,-7:J,)}WeRi^3/j]%m!db&aI.P7SLzBi)jJ>;V MR./t%o r<+N(E=2' );
define( 'SECURE_AUTH_KEY',  'SdGkg@p`.Xr+Tf:%oEa[q%va_M$_?1:r=;mW}yy0*4FTZpc5VE^v~:%//;[g9CIo' );
define( 'LOGGED_IN_KEY',    '}PmRHH*&8Ow<MLRpIBW<&c9W}nyhnfR/TlT(6(B,%K|DPassb08lEltI7aX.b:hV' );
define( 'NONCE_KEY',        '*>^{t>iZ%bBXC-^]09{t;bxdW.gvk]#w9!#nJ4H#z~&r2rg6<*8qZg-lIS^veN2#' );
define( 'AUTH_SALT',        '.WE(&:C(|@`[*#N=Dv::ho,G#1H7#2F6*2L|DBJVQHTjqQ|7*N7#ONAc$+6]yKvq' );
define( 'SECURE_AUTH_SALT', ' N;:mlH)++$9=x)gNM9m644:vF_#KSYp|]UHaw-K~`|kG%M=B9w%F#8VEov|Xq^u' );
define( 'LOGGED_IN_SALT',   'J>/x)bQV7rjbT;m}b;PDr3eC&IL?z#nJF|6&qi81~[XnoFY.Eu^&U!&=WaOhbPW<' );
define( 'NONCE_SALT',       'E4Nb{CX,_ Z!)LYC>lqayp~b]VZyfB_:D5-P9^9Ii*SC(@Z187LDge&@zqS)2T+H' );

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
