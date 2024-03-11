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
define( 'DB_NAME', 'module-7-vagrant-cms-git' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'wp' );

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
define( 'AUTH_KEY',         '/_R~g:+D#xlDyf{PEkXt%2r`Z5FC@x%^ ?m]NaM>P/Qg)DRuV>%q>mYE(9oel*mu' );
define( 'SECURE_AUTH_KEY',  'F}Z,&Xg*):as_@E3=*aJrslhZ!N(Fy&#QQqm:NFH4<v^jun`G3cwyVvmXC&BQ >K' );
define( 'LOGGED_IN_KEY',    '_+R20?p%CUNqZ^3P]+fD|xMx++Yb,p )w[^r{4HmY`q<tD?%SgX5XYe%j&wC:J}L' );
define( 'NONCE_KEY',        'L_}X]saa`7(ZT<3NKX~kd$-pR(x|jHy_H$c,qeju P{c&hl[5900UJU =yLNl1#k' );
define( 'AUTH_SALT',        '$~2ij6`Nl({$M:NO;9JJMj_j1#%t=5KYG6$O%GJ3?$e5!|n;#49P+|}h>pC5:s0W' );
define( 'SECURE_AUTH_SALT', '5ofL5&P2isW8*4$^D8/iwM52p%{Qzqhens-7Ob]M6?yg_TWl%%vrP;&h>5=V}hh5' );
define( 'LOGGED_IN_SALT',   '(a^A*H2t2p~#yJdCF>*7;z*[3?g_LC@ef$>)jM-oCq0-#qi%OV@SDN$/RMAiCStN' );
define( 'NONCE_SALT',       'Kh#Dt8IQts _x]u}M;NzuYeQ^-^m}.^16#hVHkXLxRub] (nv! }Dk UX 3tZ?^e' );

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
