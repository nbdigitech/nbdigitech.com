<?php
define('WP_MEMORY_LIMIT', '64M');
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
define('WP_CACHE', true); //Added by WP-Cache Manager
define('WP_ALLOW_REPAIR', true);
define( 'WPCACHEHOME', '/home/admin/web/nbdigitech.com/public_html/resources/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'admin_ebdb');

/** MySQL database username */
define('DB_USER', 'admin_admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin#123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wrq9aUXjS8M9QLkjx8noDvOzQOPH2A8KyuFIdZqbm8wxi52AYnvxqqaXsdjwYcnZ');
define('SECURE_AUTH_KEY',  '6Kf4KBwu0cSUSwZTUbSm5Zx8VtXA68sPE1lrGvaVdsa3IBuqhXfS1nQ7dbox5TzL');
define('LOGGED_IN_KEY',    '9hNHl1yrgsB9WYqOq5aiqz1H8cF3UnCDho3IcF38ejYBydf4Jmey4NxjIy6rboYw');
define('NONCE_KEY',        'FiKHe0NEVhCUYBMlLBz7JfeHCiKtj1g2AsGEwj9PRYKguZXshwLNCIJDIDMrDNJD');
define('AUTH_SALT',        'bvBTYubz0Hhd8RL5yhdjKgMCo74j2FrGd8PQ4lnRunzXWqIsvL9IaH3u1mg44qaY');
define('SECURE_AUTH_SALT', 'G0C7hCzhB11gvGTXjHagFtiR8NZkuVTVIvNeGgIrbZe2P6teJGMUqySvTUvJAt8L');
define('LOGGED_IN_SALT',   'Mstd39Sh6qbHO1LHF5DsRcyBOqBW9Cehf7sWeA7EB9YAz8fYPhHyJGhwexsfTAmS');
define('NONCE_SALT',       'SddKMHrW0wfQKmeHVjCuC0i1Gt9r79UB5y7PQvs4o2xaFffbZ19iyrDJCm1fywBn');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '256M' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');