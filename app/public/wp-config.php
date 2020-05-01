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
define('AUTH_KEY',         'jIIIig0cbsC4i41NKrliwnSG4GgrfPSc/0C34GUNTX+UFcXfP0YdL2W8LLCTBarBQwHBVQBzbsl3dAvDjEefhg==');
define('SECURE_AUTH_KEY',  'ZpAJ1SdekZXi8S+qe6ooYm+DBJydbogpRou7BO2BE0ctElosM3z0NjzXejN3r0vmomZvrK1VXNWvmX7Q9YYx4Q==');
define('LOGGED_IN_KEY',    'cpvhvaS7ir39/wrz+wi27scRgg7RjlJ4Djo/ogpYur5ccHPrCUV9femIo1rr0ioB9YVwgRKzCuEkKwnOWp8vBA==');
define('NONCE_KEY',        'ppGwFG1zAzdTBwxejisbVyuCTH9u9NKEEX62/rl9Ax+opDHYj0kjVV6cihAgzZlflKiNMSW4M1thLMOtEPIPIQ==');
define('AUTH_SALT',        'HfFduW9BrhUWB8YAO2dOL6RsjLFeitSJBzPhkyHF7EhUg3Yzc2Fdnr1SobCsB5djKeVCLXxB015qHt1LUuylKA==');
define('SECURE_AUTH_SALT', 'YFaVbHpnn0Eqlz9v96Ro/9Ojo9GnSvlINyTawkWd0eAjknZGnExmwuOS+U7RS0L2WNjddWWSPCyWPfhBep7+rQ==');
define('LOGGED_IN_SALT',   'J+gK4T3wSc7WfVBxLi9GwTSbZUZ1x0ltYy3mgy4PuTQMG8IdT/WFOfK/0AuyZLx+BD/LBl1S0HRfsuaSCbfz5Q==');
define('NONCE_SALT',       'QNaywA4BMpscn0+++hsCSgdVFnqQp8zG9Kb7pidbLZst4KzDcFtwckFX7N0bApSzddL8klMmY0X31OqcDM/5Ug==');

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
