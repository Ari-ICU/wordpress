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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V{ _#`PQy#&T!jYadjrBRk_--uM#axb V:$zzAwc?kYz<J$.yI_5QA}J3|m-6}8 ' );
define( 'SECURE_AUTH_KEY',  'F~2=LEW?Wz+[Xi!b_gq-]`8xiK!A2$HY!!Q|7.!IkZB@rlW<xm 2mR25Xcsli]=-' );
define( 'LOGGED_IN_KEY',    'u%}x1C(n23Q]v}PuF(1p|4A^:}%+%iAz112}:tz(N.uP;/cyryY0>&WT#N.fyJ0x' );
define( 'NONCE_KEY',        'vMSR9P5?JEGGeW8j;?0S i$|7Sdxo+DwHJ|jgGoE(e9|6I9CLbNV`<kfRduZ9>Ij' );
define( 'AUTH_SALT',        'zpW!5g<JxLG[.a::NQ+Kg zt^Qyp/{H^Mj#dxV*_nIm0xGI]7Ghal2XftRWn~PI3' );
define( 'SECURE_AUTH_SALT', 'j0RJ$4~yuuaMjO/7Pm>@ekRM}INm%@EFPlxSu1%[3~Yv~Y5?wb[>_p0Tl$!svTk=' );
define( 'LOGGED_IN_SALT',   'XXprxNk1N9$+Xzxh!k~OH:bTkw%x>w?5D20VdRGMpqUHP&,scs$lMEPE#>>5iZ2H' );
define( 'NONCE_SALT',       '.smzqKy!NG9xsvvW<`ouBf$bdW6zJg=#~9=59}S_C.82aot.Yp{*`#f6/RhB5|.#' );

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
