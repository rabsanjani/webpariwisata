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
define( 'AUTH_KEY',         'zgxVkX%-Ryewhr@B6|f/UFf_C:@xD^zLvqrWS6YDNNHK#+=l*#ybICQJ) q#H1X3' );
define( 'SECURE_AUTH_KEY',  '>]IhE)x!}-LHzyHN[*Lerp%kl/BuvpN<j8,MJ3NZ;mpJ/]]a*,@MutXT#{L[amat' );
define( 'LOGGED_IN_KEY',    ' ?T#XJs;xb|mtOnh!5Ph6xa+0;^:xJ$8MQ:xS`-Ybd+?pLn)z Tui92q5wwoJ{St' );
define( 'NONCE_KEY',        '<X;73!&_<S`i4]d@,o.OhBT~mQ{J3)WNmj|}GhV%cC0^oaPA1{CM~CiUQGuh5?2o' );
define( 'AUTH_SALT',        'cJc Ob;W+`rXh^ixF,14D-Ciw?<pr*lV+,oulIpx*_MJ+@*H6N{n6)UIHYq]KQm!' );
define( 'SECURE_AUTH_SALT', 'PislKMaa{G0,i%G-V/+.rF5e#qE.LNyu>I:+B:xX%-R2j_?YNXqfmU&/d{knMBH]' );
define( 'LOGGED_IN_SALT',   '8jCxMJF;$K.WMm%|ye}!8:f,N$E+ $WYC%;W+zZQ(@Xb1-^S5`,j:$F]#x;IPZpy' );
define( 'NONCE_SALT',       'ECexTlyvV/og9)Z:Wzl*eSaj|N&2FX/ QGqL}mkxAV%>}2s%EIX{$U.*h}=epQKy' );

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
