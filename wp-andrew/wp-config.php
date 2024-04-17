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
define( 'DB_NAME', 'wp_andrew_db' );

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
define( 'AUTH_KEY',         ';mc:T%Zz*!#pLH+ZSAMlN*nuL,1[Z<RN!w!Mh3xy>_w@Fv)_+hiu_H^schFC$#fc' );
define( 'SECURE_AUTH_KEY',  'jH)cx7}TJd[DYO`uFfTO>!p!Dt|(!YDo6 z^8b;_[y`&fHx9mX~5_=@kV&S2Vl2l' );
define( 'LOGGED_IN_KEY',    'laEi_!RmE8k0j}Hrdl7U6U!Odm0C/|rclnot4@27wC<v|JL8;eShd)lJ]XLzsE5d' );
define( 'NONCE_KEY',        'F/PV02&M^` I;Ml=^n3Sg03W`1UZL;K(j~!Qj/*mkSmuy(ErJ{V4>BF#YP1.0n}z' );
define( 'AUTH_SALT',        'n+5>`LAGANjM)p1fWPja jiGa:SlYsI6T7(&S%7pWO&cR).^*gH>dgg>C^EE}p65' );
define( 'SECURE_AUTH_SALT', ',F}|@X)lF5~T(8HTgeI:Sm,7&>t;/gwd[9?]_~w(Bh^(f/5<$H|%a3X19]4gB[<>' );
define( 'LOGGED_IN_SALT',   '@Hm!9G^*3GK`K.,ml_.$}O<^JJ{B?:Eb-3w>ax!RHCcG~)987oUK]5I^{l/W5z+5' );
define( 'NONCE_SALT',       'T~b)Bf0PQp(COnSCZ~ZJa[vscd=HHx*5`tAZ%Rvw`gP;{)hX[Q#kS<[%EC^h*huZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_andrew_db_';

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
