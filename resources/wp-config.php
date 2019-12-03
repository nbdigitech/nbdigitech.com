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
define('DB_NAME', 'u995744577_blog');

/** MySQL database username */
define('DB_USER', 'u995744577_blog');

/** MySQL database password */
define('DB_PASSWORD', 'Alvaedison88#@!');

/** MySQL hostname */
define('DB_HOST', '185.201.11.224');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'j$m#r:ur~AIy9NJu+HKL*k`dKB9gldP-:wT5n:][ZJ+S-G-<(cpOWT.oI4ZT2b0E');
define('SECURE_AUTH_KEY',  'ME~G:icr #5aY3fF{il v$g+g>z FTS*H{SIsN&*o!^>~ tpp=,],nc50xmXH;_I');
define('LOGGED_IN_KEY',    '&Qa $qYxl$:IzQm1@TF$#QQ707x%JlSjI~[8CZY-J8Zm%S]k&RCv!-RDin!vEI+M');
define('NONCE_KEY',        'bqa0`=t&M%A.0R=RUUqoFl}o] b3zEb=p:]3r5]xPwK5SB4=UnGn52}8UIP81@Sy');
define('AUTH_SALT',        '}[XkjkG@TiG<i-rD?,:{8^aH@E6vJ!H(aWoT&bs 8|P$..- J;yox.]dwifR;ugG');
define('SECURE_AUTH_SALT', '2E#5uF [*>V[do/1,%tU&99p}4<G:yzo2JT.i:W]mgM|,Keoo8SZxrqvbsk1MT+ ');
define('LOGGED_IN_SALT',   'q9emeCpRr85/_VCh#m(Wkxwq{bVvYV]>EwYiODQ4)Ac;$o#yA~>,oA<?k#Y]^;ga');
define('NONCE_SALT',       'HHjm~&:sSJZN|;f]y_W-]1.`p@QtSqE7Szb`RCHg9sDb {f}hjCF8@Gwre? jFuy');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
