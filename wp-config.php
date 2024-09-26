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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         'jeXTTkg4$XOVlIa!BGr|w{cUJRst<mH;27Re2)D%^`OG!;LC,P]A d@iL630|XL ' );
define( 'SECURE_AUTH_KEY',  'V[e9,3<=-n<dE$=FRB8Vq4ea+U-!$n,lZoC3+9)OOd&(=(D;UX*n)zh6L=?eDdbt' );
define( 'LOGGED_IN_KEY',    'E-]: ySQvV)Aun}qpKJW@6*:apK[N?=S,)dFPd<p ,@Wg8b>_l3<NgfU|F(,R0+j' );
define( 'NONCE_KEY',        '*Il,t}i7b7&y{e7RM!GQI{5)ti0:$![5,qy(!YK$a?[|E[XG,8QN;$LkUkLR^l8/' );
define( 'AUTH_SALT',        '{>mzwkqsv qKgbOU8mH4FytBXMiNqiWoQwQV_To:|t^<?/7AMfT6GpB;r$zH)/y,' );
define( 'SECURE_AUTH_SALT', 'Mlg[vgJhl4l+K{h=pNLpithdci$5B87!T4I}CAI~%~ab~rD@0a:(2*;fjQNORwy$' );
define( 'LOGGED_IN_SALT',   'a5E|Xabh,4ElbI,q58!ICv>feoGiO,~g{m{A?<QZ]{Ug`sg$w/OmqW:RdA:%8&<s' );
define( 'NONCE_SALT',       'H1[-za]8-UqSnFM) ^YWg*lTQwy]0)cf|.OYaii@FD%gJpZZ.-%k_QOB3]6!<{aw' );

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
