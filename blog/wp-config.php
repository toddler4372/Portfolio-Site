<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'toddcwil_wp141');

/** MySQL database username */
define('DB_USER', 'toddcwil_wp141');

/** MySQL database password */
define('DB_PASSWORD', 't83G10@P]S');

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
define('AUTH_KEY',         'ppbfqbyzbihd9bmjshik1i5sgqgrkc1ftbu9fosxiegc2oruwaiqd95nbkiewybo');
define('SECURE_AUTH_KEY',  'thgprhrj4wf9jh7qnay9bnqpsdlsxicw80hcoqlnzpip2bv1x1rsgiukagioie1z');
define('LOGGED_IN_KEY',    'n2penbbppzeokedmakqyl7eheixryhotbdyk92rubafyq8uv2eff4rdw9w6kz13l');
define('NONCE_KEY',        'fkh8d3cwivmcnyrskx5pstavcpnvb1xmr6qipquhpeogp2qr6rbqbampu034tkmi');
define('AUTH_SALT',        'n4buirbdckgcilv0543fniy2jfaw6n8fk06b8copxll3ruilcrlb3drrzi3te63v');
define('SECURE_AUTH_SALT', 'ecur5h5cfuqunui2mgxnvkvhzjdwvecjsqd3yrujhoi1jafnhnjjmfd7g3rs0cmb');
define('LOGGED_IN_SALT',   '6apnoqlju8waxqrajrv05egmtgbvnhkmv5i88flnve0robvu6qxfinzy7idcm1ri');
define('NONCE_SALT',       'tfdtpieb9aisw4vpejry8ptl910xgmkqvupounaklgllfhhwc5ced0va9anjijit');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
