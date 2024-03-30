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
define( 'DB_NAME', 'tonggiang' );

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
define( 'AUTH_KEY',         'l2:Qz?[>*^A8G~.lAeYa%hxhf}!]>#Yd Q4?H[0PGID[f5[Do4 :H-8Db)D9etJ[' );
define( 'SECURE_AUTH_KEY',  'S-+D}IsPjw*;T9P @os6%B:iQ:QO.H0g}7(C#][IYYi@s@1:>Rw8nU&|7VE2Zrzs' );
define( 'LOGGED_IN_KEY',    '[]4:]+B.Cx{59ND}NQkRJNvD35[g=3t7$rWBu{>Z-PVLPnPbI7m^Uh89*2/P<a<z' );
define( 'NONCE_KEY',        'AH[)p|[*9n]:5w:LXl*phbUK<hbi=THrOgEaGR}ImNA3bgBP}0bR<t1_ObAkgKwd' );
define( 'AUTH_SALT',        'B5?+A!utH@) ]70Rq<n<^U$@:ih+%QIyzm*q}:`.8RVLMTD`~^Y`jOX;y-Sbk k^' );
define( 'SECURE_AUTH_SALT', '}NpbipvPtkOMOCAm>Tk,{$^_hkj;W%#=1kQ48)3Gx%{dyeFMH?}Mzx-C7D+f=^pV' );
define( 'LOGGED_IN_SALT',   '4*5nm$j?^,}iJ;$A<Pd27J6L}$8coVEFl(.e}C4;{rY`,}ob}Q`i(|9; vL9uzQ ' );
define( 'NONCE_SALT',       '?7Q}i=Slh_475d^t6t##BjH$Atkh|QVz`YX?3Qt|JPT$wmrc@T8dDPS$1J1<a%^j' );

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
