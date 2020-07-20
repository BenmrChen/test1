<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xl4Nv8lNei4Lulsu0xX3qr8o33K550VX1dFbKC7/2Q8sf8ZCd5BqCB0hqzAH3rnkVnhgtRWW9sg39PUBJtMlxQ==');
define('SECURE_AUTH_KEY',  '5zNASy9Kw/1JC6Bg1LHCoGCXEG/m6+EwVGDHJWllEHvfQcqxrniq+fmmBLlDPbmW0L9BFB+RiyPqEp52R+o85g==');
define('LOGGED_IN_KEY',    '96gI9oDpLb1hbTp4Ih+DoI5xnIc3O15yg0RAmx4+BpfcE0It+3y06pJrU01Y6xq4mGWZn92gaszvDcYl6aZ+8g==');
define('NONCE_KEY',        'gF7ObfAfkYmlsfVMff2wpBu95KEGRjANbeOHE+Mfbl3DQ95rZfeVgDYOfxwdmts8H7Uk6KWEX4bqov+vp/iBgg==');
define('AUTH_SALT',        'G7KalAqvf2aYMuGi4suyxXwCl3O3pcJmVdgEO3kSGlY0IRLQHqoh+AXYZB+uVm7aJtjZ315T154l+Zrf777TUg==');
define('SECURE_AUTH_SALT', 'I6d2fwPpQ++B8qnlWq/mg4nmkkmqSDmK87UDxOiiD10uUEd6+2IFKqGPLY9PnVbenToEN3ggoaibOcY2+4m3qA==');
define('LOGGED_IN_SALT',   'CI9Ipu95asXddL58NPbPO5m/59VeORotcxwH+9g0bD+/iDuPGEPwUv4HYMV1s9NdPBDH37+4V4yvUTvDybE+IA==');
define('NONCE_SALT',       '0fxofZMNmMsoQ9mJN+HUnjw6u7F6zkxdsgs65bTAisnhp8MI8Gzo2vP3WWBUhl4j5L9NxNZg/WBqr5ZlE6BlIA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
