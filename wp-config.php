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
define( 'DB_NAME', 'wpd_Nipuna' );

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
define( 'AUTH_KEY',         '>8Kf0OZVnG=f_[Ni?a#|.iyC9ny76i-)Qbs__|>c!`i%,nH(LQj:0NH~N 1$1@!9' );
define( 'SECURE_AUTH_KEY',  '@3.1vvYG{T*y=sj8pg(THp!/=>c]VkM><x=``X6%M@by~eNOaV=-B|Z$(}i^{^4$' );
define( 'LOGGED_IN_KEY',    'f-WI_%u,{+1bR,LqM-65J]D1|%+OK&!%JLh?m__1OwJA&P~*.x;-f$6?unOUyt2H' );
define( 'NONCE_KEY',        'pN.S1FyUpK8+a/<*G7_9P7^6FN>900c,C{{^,N;i,F2g4X] I3GPp7$~D!#3nR[ ' );
define( 'AUTH_SALT',        'uK<Zk)t%gu:5HfFdyi_3*9,XS-Q~O/-C,xvPJBO2kj$ZI_!Jn8joD&]W%]mg.hTC' );
define( 'SECURE_AUTH_SALT', '7)z ve6YL*M>|6daufi,Gcw*$D4_@lwHOE5,?|gpS^6M2G <-[fW=$Vnn`:PQrL!' );
define( 'LOGGED_IN_SALT',   'v&?HD0P`9-t*{_J0%euX^h(Z,+,!:?edGG@H7CJKr{-}fbjl9^k*l$YQ~sv4c>.-' );
define( 'NONCE_SALT',       '-}7T^g~ZF{dSCDh<5XR=IFC EL_7~O<I,x_BwGBN2Y<C]c%hUk*|%wKBSGs[Yyy_' );

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
