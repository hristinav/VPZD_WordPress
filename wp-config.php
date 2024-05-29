<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'sfWlleA{sP{!eadel#l#@@z!uS|83pcNox1#JEY_cm]ge~<mrWr+PPixUKfnGR+-' );
define( 'SECURE_AUTH_KEY',  'sA%9p{cmW!eM!ExVv8Qv#P`vDNO@^h=@B+LX}2Er?[!1$=[#{+9^Ad/S6VAe h,N' );
define( 'LOGGED_IN_KEY',    '{<;:r=EslYJks,n}#=Ji=mlYc(KLV_{*C<07!oLy?DF_R#/UJr(f7SWD!i=Mw?)E' );
define( 'NONCE_KEY',        'EA[NbNg1hN4DslRt*1W6aoi 1AyoHhvb]5,`)F.Q.S`-Ken:CS^9@t0X$.eH@=zu' );
define( 'AUTH_SALT',        'S2Pyly=J$Z#?v(G(E*jKzWEk}MVVPO9C3>J%(_ZvjbnjXcS}>[}~R~mXMSa:IUa-' );
define( 'SECURE_AUTH_SALT', 'bM=jq/=D^^90iD7KE}x *f~JlWR:@,c%akH+UvB#Vvais+g(1HQLzeA*bwH}b!ja' );
define( 'LOGGED_IN_SALT',   'bvF]V52,l06 /.e0ZW:qOvP|)&[r_PRJ.=R6^0~8pIg@_=?q/}4lfx3e!1|Glg8s' );
define( 'NONCE_SALT',       'kh-ck9^Q5eT99 /3.7!IYA/YdB3I&^ x(`w;&hmXQMtWD`gjl_$@ 1*!izgKLQbN' );

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
