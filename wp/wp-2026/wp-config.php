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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '7QC`Gw(Fijxa;8Mvz|JynP.;J(]k$32Rj+2v]d#F9PzI|]!H=qah-d* K[Xu2dpQ' );
define( 'SECURE_AUTH_KEY',  '5?q>,^_R_y0]`4a.lk[uKcuS_5}~(d|qG_aX?sWSD>#eohTYd$IU#&<.%jhcbx2-' );
define( 'LOGGED_IN_KEY',    'iaz-M^)mATG7zs_]BZ0T5B;?FdKdsBt=^jHv6QDhO%sdne;N|i29zA#8QmU|Y<@o' );
define( 'NONCE_KEY',        '^3&MCG;RCF&d@@-l!<i8`C2yM Q%l7JfcO#WXH.8{dD6-PJ0aqG]J<*z%z4Pl-<4' );
define( 'AUTH_SALT',        'G W<ZQc4PSC27/wZssac |D+FSZT(*KT|UgDn(7@`9fdXJ$e}QA)1m|Wl6eokB$z' );
define( 'SECURE_AUTH_SALT', '!c<xM42%}%;}Ia&KkzNdnGkpS@=H ~gA0i_3X0p-$0er6v*9i>Nfs?V&M|v[s$P{' );
define( 'LOGGED_IN_SALT',   '*U_@8wMOxUSm!LNYc,p)jHSF@U3)Kf9]iH,#i,ZV|MK16^4M(%F^Z6?]8GGx2oC)' );
define( 'NONCE_SALT',       'DB$?/$|4YB@]kZ]e(I)~7c1=VDrcE:E7I7@d8RV1S7A|.~B[uQ00<tsiek]gl12S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
