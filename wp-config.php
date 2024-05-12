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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '3FT9A486*m26FYN5A4' );

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
define( 'AUTH_KEY',         ';q/Qe4UuZc(c%gUSYTUQX<g+?R/%SLI|6]L 3P,Ec0]3M;8/fIVKo^BTRJk`IYWn' );
define( 'SECURE_AUTH_KEY',  '1.::rU[t]5)!h=qKUSbMgCd=9dpn,4iwq-`[BE+/#Uq[:}JNxazT`2$a7NP DCGw' );
define( 'LOGGED_IN_KEY',    'JLah.`AyV/nuH4tEIPGK0bm}2IFLS{s8@N(R#q:i-5-Ock1dDz2k*4dZeN#Do^2@' );
define( 'NONCE_KEY',        'ChYiLAnJUhw_+f{chAJ`_)XNGyZ#c8^~R2Le^G4uBp-r5,JOp%lK:/EzdLEZIDAz' );
define( 'AUTH_SALT',        ';p-ZSEK|26?e}&ka7qh~b-m {tJqc<8B1<Ov-ZF[*yX)lp=$I#Cx_RlRw#g,#@mk' );
define( 'SECURE_AUTH_SALT', ':.XMQy>fvRbva@hy@Fl(6d)t&$zoL5)q9.[PiqR|.rY*rvS.$%:}=HU1xo0ON<j^' );
define( 'LOGGED_IN_SALT',   'X0 QM8WdQ frLicpd!)JyV8;w8B*^nX=hyMpG(xK`zxY8UztEX,>8[e-vlk]P{|4' );
define( 'NONCE_SALT',       '@a_u;1U%qDaZe]^vB*X_;S|5*@hy*K?1Nv+66[=xk;0GrCq2YYgZAu6noO5]A$9.' );

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
