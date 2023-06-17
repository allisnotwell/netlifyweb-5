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
define( 'DB_NAME', 'netlifyweb-5' );

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
define( 'AUTH_KEY',         ']zdW,WH4N[Y sFiaMO8#&Of6,mB?D4q37uvY<Q~z9V&WY`85NjkZkd?G^|{fptCo' );
define( 'SECURE_AUTH_KEY',  'We*`OW$Sa(9IqB0G2R;!HX*meFid@E~b*>Qn8:#Foz 3klDGQOKfmEJm<6B_^f3G' );
define( 'LOGGED_IN_KEY',    'F5LUFg@Zov~RozuEM[>V(iND2Kjq<?hCg(A6_{3Q+t]szLD9vwkG)@|)m}!Fy7&{' );
define( 'NONCE_KEY',        'c5^$J>.8Xs0dH~{.dVm90`fIt3{}e)35`%hO13alQ&17R-5-l ]s(OL^DvZ#{:;#' );
define( 'AUTH_SALT',        '(=7t/5F30n[l<*Bf85@tN*gxAQZ|ZsmshNORThFvk~uD9su$A3N.]}Ii6~3^s }g' );
define( 'SECURE_AUTH_SALT', 'JVg&kB%Tf7l>O0Nxvv*_e,C`(L&$}l(u we11,$7vz-0~J`&*CpT=CQ3:etb>GR4' );
define( 'LOGGED_IN_SALT',   '#UE{&D!)BKjzgC!6UR*VrZ:pUmiO)MdHgh3P<70L@1Qg^[:aWYBv[#R]a^s9O6v}' );
define( 'NONCE_SALT',       'k;bT,r4mDI`v$IDP++8lhLDMTiPe#Sjb*oiop9-DW[,8],zCUkQ]ID>G7Rgj6xeh' );

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
