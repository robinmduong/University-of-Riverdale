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
define('AUTH_KEY',         'c01zEtB5yM+dPGxX1cVknTGjQtfLKfEBNbF0EwKfjEIiN0F+OxAIACEpL7tHu4knvJajjZFbfQWiC44RQIqWww==');
define('SECURE_AUTH_KEY',  'eFFjjBq7phjdZZuoORwxG4nHxCDy0jr5lRS5T4jN5HIakF9zVmQxYwYPzFJxvm5kZHMchTP46zmaCG+4Dwr4QA==');
define('LOGGED_IN_KEY',    'uMU5uz6ojQZ54nWfTw4dCmmzWBA96VcHa2X2C0AwgzkemTJJcMqlu+T///IpuiHsPJMtL3oQXHGXgOI5V5CUuQ==');
define('NONCE_KEY',        '7NM78HkzITFunjCeoCSobsf6oCFwQ53ygU1nbEVACo8V/Hsnal6WOHlIn1BvqA8VHbNcZd26QliELymujOE0YQ==');
define('AUTH_SALT',        'g+sxg7HKhl6O87+xfbRl1WVFqvO8O8sws+iGebXIVL2fAiB3dDjYegIVSZI6auSLYNEkKe4x2tQjQogw3dvvQw==');
define('SECURE_AUTH_SALT', 'oQIQPwuFR40yGzevx72o3Hg2mGbIytWNGwIecYA2f3jcGyDtob2dwNC2yTQ4cu+creHvzEmcrNzI+qz5KLOvqA==');
define('LOGGED_IN_SALT',   'Ts7umIEXG7RXjUIt+AovKDniwXBcgYWklUogfA1jExRhldDARqs7TL+D6EmOSpv96QfgLHMTdIb5oTFQub0Ijg==');
define('NONCE_SALT',       'UMPMRudkY3/M2W+/43ZFlaldLPHPWAgJNDDLGNATHhuAU0dqzLqdu/3e9QL/SZh4C49hA32u2vB9+1sA0utU+Q==');

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
