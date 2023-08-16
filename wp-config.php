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
define( 'DB_NAME', 'tvtech' );

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
define( 'AUTH_KEY',         'y^ S$y~7C[Dn%^{+,s:x,{._4|HF@`l5SuR3kA5yZQ3))e3t}r@EBr]DVXwcG[m<' );
define( 'SECURE_AUTH_KEY',  ')Q7Il||yl2c28ZmMG!^_6eat1B3A*@4y90o)!T5;rN1Fq+Hus(WIEa[Ro9RUKI?U' );
define( 'LOGGED_IN_KEY',    'oLI5N@U~Icn}ldofG7#<l;E<XQ8`$U SzTLO`=KIpM&=tSDx$H;-z(Nj*9S5XB.C' );
define( 'NONCE_KEY',        '6B0*/Zg- aXx3NbV+YN7almob8R{E#:cqKDm>qy4jYdD}8s&%tB5Ed72|>ot[nb2' );
define( 'AUTH_SALT',        'ldEeA#EB:mW{lkC$sBEVk-uC+=p}OOe;KYR Q$?GVBC$r&bz[?e[Bv`3b(tp6G2J' );
define( 'SECURE_AUTH_SALT', 'XMBaJ2~k1{kQ=!Xb)r9ATHj^poA:ZTPYP#*1BnJ:aC,&)`!3rpnFmJzJ*2Moo$.L' );
define( 'LOGGED_IN_SALT',   'O}DvZB^$tNi`*(*$2=JNh6kAOQ>WI5VPkF_YDGmcc8>SA{qgWMya,m&X+G*YO@N!' );
define( 'NONCE_SALT',       'u!sCxP<mLVo^..b|$)MgIZU;75$jDEhZ!=Ps~$WcK!bKaE[mT}(LV*H+.bV-JBee' );

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
