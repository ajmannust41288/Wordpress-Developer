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
define( 'DB_NAME', 'greentech' );

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
define( 'AUTH_KEY',         '.>J5UtCMrl4Y.0C^MJJ:Qn&ebk,&iB+9/1L@PEzhLkCC2D=9Xsqx1f+uD 0^RvnP' );
define( 'SECURE_AUTH_KEY',  '/AdY*EYS8OKNIKnj Sc,Mf{]tbZ {tL_6vU^$3=WzJc#oNAKNFY_uK7}Q)PFYDL+' );
define( 'LOGGED_IN_KEY',    ')T1BWBB_SIjU+A*,P~mXsZb&3LZ=8l I1%~0#P3QKyWcL$&m1y+Q}]JfWSGq%rN<' );
define( 'NONCE_KEY',        'BZ1rWaMpFl;i%CPhW68DZY6jr+#no,:.mGx;4h@,,XGP|@iB-v/:]S6MJZQv/( `' );
define( 'AUTH_SALT',        'Yhqln(+Tci156w2U~OfNMoJjC>jN16lH,}EJxiMw8`j=r[{BT((<@WpXYu6e`hro' );
define( 'SECURE_AUTH_SALT', '<qt/HyzbU<y)o/f/T|;(;34g0R`T0@ALb )?.A=5Z@3cf>30mb0Zu`I!t_M[%q=t' );
define( 'LOGGED_IN_SALT',   'L%eMaf_Yw8MIYt%){/-g`GM{AKERV/RkQh.eDVbh(e#p%Om4w9*7hq}XHehhFxi-' );
define( 'NONCE_SALT',       'f@n(A%frNj?U97N Vp`RbbyByeu]XCqmJ6%5bE[m@UvY?0iaIE&ll/Bpu=tC|!^,' );

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
