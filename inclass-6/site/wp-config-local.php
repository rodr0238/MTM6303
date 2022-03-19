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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         '0dwgAejWFO8Swysl6qoJ27M4fmVEYxhomMU7lc8QTrPdlyj5ED30jphEp2SzTlR8GNjiFqqTTZ5at0p+Q/stfw==');
define('SECURE_AUTH_KEY',  'hhmpzAH+sch7O7Z4oD+EBudB3z2dNxVXtu8I91JK0LSggygEuTpRapWa5ONNfm/X4DW75+DY1Ld2KX7L6peBUg==');
define('LOGGED_IN_KEY',    'CXhndkIyew4im4pRRl5ybYHKHzB8tkP99DJe9ElNxEKV/NIV9MP0mbi8JS14NDAZNeJ73va8/6b86/7mWHhgVQ==');
define('NONCE_KEY',        'NM6SMDR8MkBqL4uwDpT3iKfG+3zWOmZuseif2ASpq1hv1RSnxnGJLFiXbyCsqnpD+muv/1lnJlxLxMV1bmZE6w==');
define('AUTH_SALT',        'j+Jda1ZaSkzrcZofF1WwOgM7JLcgYfjTzmpp8Sby/A+fGpVeudrdo8zo7BPYupsCCShFa117EMCvqqaeyBAh7A==');
define('SECURE_AUTH_SALT', 'mBxej1FZmNMC574PUmKiysSOA4gKqW/fLUj290eNAl7Db997enMmnAuoKevdwPe3jlr9FbEMpNUj9/r0N8XT9A==');
define('LOGGED_IN_SALT',   'V7Ava/+N0AsKwGAhYlF6tA5dym4H42WBcr/Rdceq755JUCCxfpfpJgnEW7R38ds8YXE61uT+8wxcwWkZRt0IqA==');
define('NONCE_SALT',       '6AhbxEygXg0rimRfofskpLnFL4vzNJqX3E0RgNjpwzF1OCDfmqLNPHqDu9a134BKbLjQ9NcWhhgkZYaVA7+7vQ==');

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
