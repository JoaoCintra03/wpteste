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
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         '`@yZ.m8,*.[=WFsxM]rpYj)DI.bD5;]gMRLtDJt(qi>7bwj4rHz?Uu^.+c[i|7u@' );
define( 'SECURE_AUTH_KEY',  'AJHR6K@2>MX[0sr[ysIZ6$4.:>JE,H/u|9jN$<t`[T4C{:amG@yNfL+fd(_4Z!@^' );
define( 'LOGGED_IN_KEY',    'q68A3*bJ)8eV9G8J)v4B$*n-SW[( 2E1Kn3<}C3+ChK1Y*}a{?C~zmdt6-pz5my~' );
define( 'NONCE_KEY',        '|KH&IlRxZD[=4;13C_VYPa7u:D<dN,:<>KREJlmI1(:L1l/o_/;?j`I7X|LrA4Lq' );
define( 'AUTH_SALT',        '4FP7sg(%ou:4B,,/^/Q[ev-#l>Wc$G)~]l+IwI<K_G~9-1%gtZ!hCW*6>$X(tLg8' );
define( 'SECURE_AUTH_SALT', '$B:B6ImhSSpkC[/Xs@c[;yVU7wOXj&BUL?~OF8:>^Iv?/5cNy_#kr&sB|)<)*sDE' );
define( 'LOGGED_IN_SALT',   'Ue}Df@{a3aRt]LG]8#&UboWD_#TgZ9S.waw}MCK;=utWmziGK6No/$-sJFANQR0$' );
define( 'NONCE_SALT',       'ZM51KAQZI[V(({=!!dorVP mcT0C+Dxblxk+U~PkM&+5Qw!oizVBI@<{*G*<g2#*' );

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
$table_prefix = 'wp_teste';

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
