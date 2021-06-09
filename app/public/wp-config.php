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
define('AUTH_KEY',         'psihqa+0wcihSBYQphY0QDlgWswj19FeE6o9gYUuDRZ3MMtqAF1TitcJehgqzph5Z48v0z+ZWdNpdCLdmH/8zA==');
define('SECURE_AUTH_KEY',  'w+HDQSNx8OWnTWFAqxFFqmzJFNH9d0uYhrS975MVXuUuRttDnBgovvsCcuZL3qX9CbqboK/vEFwurU/elAmZ+Q==');
define('LOGGED_IN_KEY',    'MOB6r4N3luU9k0+WbMIdyKIRZ72vlw9e87led6lNGy3EzM42oBUQ01JqpI/I+njTwzllyfIGXv3EykAVPvjQag==');
define('NONCE_KEY',        '14rOngdEt8xXd8J89bY0ag9q4FmO53qEBGKNSvvq9wEZDWHhH25AN34zUFPSHL+pmFq0rhtUzTT9dMPTIQo2SQ==');
define('AUTH_SALT',        'XFTSuTMrxFSgYMNwn35GWbukMXzF0U4zHuNSzU9+J0FSb1q10hOI98iQTjDTpuf+k7wlDmC3bcPHcL5l+aPpQg==');
define('SECURE_AUTH_SALT', 'EIIdVFS8VjKjHQnWqjHBaQz+faX0fOTWo1UO94ZWB1TKYBr9TswqsCDLUni8Yn5CoBfrSQjDVW1YHms/AyDfAA==');
define('LOGGED_IN_SALT',   'IAnW5lZs6F77W/X0GpMjPeMg8iF8Rjo0xOGnL7LcHIn9XF6YNpZrbGXTrll8KBXvUjViOwlgMd8A8LOguBCb8g==');
define('NONCE_SALT',       '0wPCHUVCari/7lXlsxmyyyu8olvY84G6lVwQcCTQdrPr+XJasNDze+5lBiR8A/gtjeAeFrsCK9/SoOs9N3qCdg==');

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
