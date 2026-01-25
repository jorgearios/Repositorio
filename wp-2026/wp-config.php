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
define( 'DB_NAME', 'wp-2026' );

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
define( 'AUTH_KEY',         '0y_P!W&e52}rEVp>z~86dhg0SLoM{,-k5Fa,z5>n^]T,n=eOkwAu<dSC*P`t|_7l' );
define( 'SECURE_AUTH_KEY',  'SHK*<t&8/i:vM.o4<<Amh39w WKY!YgXvBrvjYi5MWrk1k05|~?hm1h;PURF[[fx' );
define( 'LOGGED_IN_KEY',    '&Qb$_xTjEM1ZnhT(@$z-CK0eBLE#,g}#C+.I~lKRP_ddLAJ6DbGS03bt^]d&[N6h' );
define( 'NONCE_KEY',        'ii&Uf-xv2XZZt.$y;e&W/Ult*db+H~QmfEF6j3CDO0**i=0(V=%EpEIl3 kw*n=N' );
define( 'AUTH_SALT',        'mO(xAx`C[F@SfM@+o UwYek5stS!&(R~oTqRmUbD2+r!Y_*3-$CqcI+x>I[juy6s' );
define( 'SECURE_AUTH_SALT', '/Xj!KA!:pz7u;g[UXhukobye$<sF59Vd9M}qd.UHq9k8dv*>Z[Y;q/NxpE}8w5/:' );
define( 'LOGGED_IN_SALT',   '!8lzbDCGf,LURc-%INom7IQOBJ2#V](<uRE,3FU,[MoKdaNWT:gKm53!9iw.s]Vx' );
define( 'NONCE_SALT',       'TN%HfL^nqbBz}MGLZ$obs9EX]k~t85%dTz38%FBYTMt4R%M6J7ft2xR#WK+Qip8q' );

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
