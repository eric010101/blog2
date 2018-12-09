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
define('DB_NAME', 'esbcwp_blog2');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog2_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog2_happy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '14kmcal9mb5w95szhsqwvofoimz1xxfgwzbrjtlqq8lga3d5t27llkjdrpq2phlr');
define('SECURE_AUTH_KEY',  'gzbvqr16g1vamz2spjpcfqe8ugvepcmqlzyjpb16xsooi4fcjppc8sn3rkg6ug1k');
define('LOGGED_IN_KEY',    'c6we4d7lo808n4iaxlcsg3a2c6iclronj0qww5opha7qexm3n6wbzbgvyrgnh7pr');
define('NONCE_KEY',        'hktywsekmcn2krdigb0zspk4rhbwpceedeh1n2qkpvn45zgu59x7exs5l9dpd9nj');
define('AUTH_SALT',        'ytyclqivkgtmnnot2qmaeqdoyn1mbprvtkczkecvzkkppkisu2riulyif6tdp5mw');
define('SECURE_AUTH_SALT', '4nft7oqobd52majkftw6tkqykfgxpvmariy0io0pecl1mbhjq29ts2wttmysrplw');
define('LOGGED_IN_SALT',   'e4mljmn2pjygc3farqswzdwygazhxlianet9fez2hpijlxdofrxcbcdxblgo9neb');
define('NONCE_SALT',       'nadiev42mbbbnkiq0mwkzcsdklnhfca5aglnjxriehbnlq6ddqen2hxok40tpg2d');

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
