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
define( 'DB_NAME', 'bd_ostec' );

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
define( 'AUTH_KEY',         '*$?RZ3pvX,g;/UJwQM<qUD=?Y_U]QDGVoE<R`/pQxYjfNw5+d[8_$[uqzLFL8iD4' );
define( 'SECURE_AUTH_KEY',  'uIK8Xms6v(gn1,//1 =!$&h,&T! !{M!I,=YHvl+Jfm41bS-Mkq5W.c; %NoC&]q' );
define( 'LOGGED_IN_KEY',    '/Fb#Qnq!-^lJDU0$oSX=)bxOdNW249tq7GO,T9ZO X kW ?/}?y3rpp.sc!}SQ;)' );
define( 'NONCE_KEY',        ';?[.DaHhY0eJG/TQ!K(%{Lz*<z[p-lj{F0jq53gq`8|CzcoV}nFkZ!TD.desKvrz' );
define( 'AUTH_SALT',        '8H&},((Y?c//>R=+IC/Z#B^m0kCD^DSqt<>LC 3B9#zGusEF!/C97~%7)0R+|WN5' );
define( 'SECURE_AUTH_SALT', 'B>]Jk1L7t;pd<GIn&QLW/9pr5iZL/Sr+N$JTSr ,hC>;k-TgX,U,NvZro~`foh)c' );
define( 'LOGGED_IN_SALT',   '8(JP{w~%,7;=7mpjx:_GCNBs[,sS8O>Y@OuuUN$/$O4)]I/Y5$@:URCSX{y5J=) ' );
define( 'NONCE_SALT',       '/sG(Iy@obat *A}?~ZilHm&THbA>ksi%-B?-_ a72NFw^fT7Y5X~(TV}xt}ItoV5' );

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
