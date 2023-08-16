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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'Gp(;z+qN$`F%&e,lm6HYEaB$b=kC50gtN>Y;zKy<38E;lfl&/@Gm6#}ybo{?_<:K' );
define( 'SECURE_AUTH_KEY',  'jO]LA^F-]J!Ovhk]^6CZq=|xlDv>kB7:oA! 5r99t7Yf%F $2ZF/G0AaYD?kINuE' );
define( 'LOGGED_IN_KEY',    'Zn(_AiJN_LWK=Mn4A}8(<HhYCEC[E{x{e1DKX[O2cS_8dg]E&?G{IkW0QW:|2hS2' );
define( 'NONCE_KEY',        'P#ies8,kkgwuPrmctgTfQ/KQ*/6&Qo=rixq-g@3-yqP>AOt$7<23`@AM!hke&%3v' );
define( 'AUTH_SALT',        'QNB({|T*o2dl+Wj<5J=WV&n}U5zWCy`gfeU7D2uZ{%;/MALw8[GFK<SMmh<Ps3LX' );
define( 'SECURE_AUTH_SALT', 'p+z[5?>7J[M/Z0Xg}D`6h43tbq`8NtJ&,s6@KyL.zt_CI|Ab6_o&vF1S}a&pokis' );
define( 'LOGGED_IN_SALT',   '9NS=48xZy=]vBFWbJ-P`_es9Sh bWN+lXNPLHiVX FO4QWtL`kQg>@tg`nqfjIza' );
define( 'NONCE_SALT',       'a-Ze/[|7]O=b6 ^pF)dGta-yi8&t_yD_^woW&Y@n{!>KUkb*f/?d=~?T65s.AQ<R' );

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
