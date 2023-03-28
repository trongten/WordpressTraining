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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordpressTraining' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'a5CmLj0NRSBNOj24CE6Thw1ugt3LdL6umgP1M8SUwsGlL48TU2VdhNPGCQx8A961' );
define( 'SECURE_AUTH_KEY',  'yIZ2A4fjnRNIknwTKHXb7toAVyBFthFWdt7Z1ZRJq6pcxkU1r1PkJxSZiNU7XSjb' );
define( 'LOGGED_IN_KEY',    'l0OAAdizAm6nRh3QK33hPMqOKpi7CsWNsY3Go5l9mlTvKx6F03aC21STaolme1zx' );
define( 'NONCE_KEY',        '2O2rPcWMnTNRbv18R5ehZHG93DLCm64gaPeKEYbZOWOoHCpY3r3hwKAIbEXwEaum' );
define( 'AUTH_SALT',        '1KEZ5E27IYqicVkDu0XZDmP11e4VEJPZ1xtYShX3i8V1OkvtikoG98b6FfMAWygt' );
define( 'SECURE_AUTH_SALT', 'TLbARSywA6r2yGpeb3Ipvl3HNNY25gYJPjD0zOlBQEab1e1rKQySc2LIfnyz0UfN' );
define( 'LOGGED_IN_SALT',   'HJLIHszzBeJTXMj17G8SgLDqKzzRDIL6b7EhpuXWjFanCmPenD2qldeXfnEUjYH9' );
define( 'NONCE_SALT',       '6tPc8kCDCRs6Z4FDA53oNMqqSW1HN1eeo8xdMZfzPu4p03jhPyO2OjMVUBwfxKvq' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
