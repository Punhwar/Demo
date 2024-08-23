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
define( 'DB_NAME', 'Demo' );

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
define( 'AUTH_KEY',         'f>D<=nKG]gie;d>j&5u$6<:LCoTny;t2zMPglqSkgpGF,z^b&`Z)_va@C?g+(bgR' );
define( 'SECURE_AUTH_KEY',  'l>-VvmBMPM5f}RB|m8JcoMAU.Dvmh[](-g#m@dNzRY08p0~2Dn/f|K+o}x4e*?ah' );
define( 'LOGGED_IN_KEY',    'r,fL$4n{~[EGE-a198tvk@d($!YlXV]T-<yBS}-2WO(+n(Oim=(q9 i7Fj.>G^T-' );
define( 'NONCE_KEY',        'Ov$76!}!!=J`^Mu:GNpI+})j1Ewby182JgVmkc~XR/u89;eAojxjv44T/!;o[}FY' );
define( 'AUTH_SALT',        'a^P(2Pi~,bf^myy4}/RVL[`#P;Cn6u#CG/taG8}oFb^U}FDFG_tsGNM7ZC1#6#3:' );
define( 'SECURE_AUTH_SALT', 'c#A`*y|HEQo>9k/hkUAukF<;#rVID3uUZ0RyNqswi_~d4kMbkSymbPA)|mouRH$v' );
define( 'LOGGED_IN_SALT',   'BFS% UlR|N0<]EmuGNvw7*bGonp]2WXk)/le^8xMrf8~~Ub5NNT_LCf/|lx3BIVD' );
define( 'NONCE_SALT',       '6V%;y@e#TYO$%l7MI)am(U%+E~pO@kYh.at} .i(SU];$(@]HsAAk@~I_/U-*;:r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
