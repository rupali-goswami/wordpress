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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         'PAqzBQU[<)0-zdy4r-nSSmL>6Gj8%8!!I6LGl:Y:ZdjC!O6T49/Mcw=j*~]@ZLmo' );
define( 'SECURE_AUTH_KEY',  '@<593k94Wr8pe{&,1](.D=E3.R_}[&F)xoV)2SFU+gM3Cq=TJgfK*(Q}J1W6r2_8' );
define( 'LOGGED_IN_KEY',    'rGb8.Hdut;5rD!o0u5 mP%w<&M[K65Ig!9$xPK mB1KuHjsf$,2@!Y2*H6uz1bow' );
define( 'NONCE_KEY',        '8giK<f%|j`XY1Hv*idZnrC<l>I#~!Z5v2GBLFxqGV qq1 L!3=evOXQw8CK:;VvC' );
define( 'AUTH_SALT',        '(s^U@y6)G*B?k^(rE9t!o7ZGk%vcvCU4>EcA{@|@p4V%!NH[bR.lVanYD3O>[F$A' );
define( 'SECURE_AUTH_SALT', 'pTrmVnl*6erUKa=|3v(g5->A{hNq|ID_c~9EfA! H+e|@>$!uC[gJ*&V} Qo2[CE' );
define( 'LOGGED_IN_SALT',   '52viRHUjf;_y:%:@`--cu6$G3fvfR7@:)o>5^SIj3NgeQuWjBq:3xZG(IXDg?UiU' );
define( 'NONCE_SALT',       'OIVN)nS<>sRS-N!oWC8C<DL@sR7VT@~u-xt!QgaTB6bAT!)$e6}9n&ca_:[|i!T?' );

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
