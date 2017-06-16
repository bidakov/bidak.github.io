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
define('DB_NAME', 'stylekit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'j|q*[n7lMxa;ulz8JK]RF4Qa>A1-[M}tnM#R^5%o!u^+3OsETh70L:9z[:#lMxoH');
define('SECURE_AUTH_KEY',  ' J$u9;5ncQb9>5R^:(*^&GZ}/&6etxvv1>Y.Dd).w$?Ib6`bI1kTKx9JP0/CE;Ea');
define('LOGGED_IN_KEY',    'b`Z#_uoNX.rBqu hXK*g]x`N4aC]K&yW#~$^V;Q0w!# E*#oNX?9diSM/ANQKNYC');
define('NONCE_KEY',        'FgO,)EOKf>,fNU58tI?h)59l:*63O-Sbw[&-z#NOmAm*_J#v$ftGRNe!a*)G3MS.');
define('AUTH_SALT',        'd[=3OHP)FqSqWg:~!q|(fkE<5axTZs&DF6CeM(J_#k`wB{j:Gm:4aA,yE$D^$xbb');
define('SECURE_AUTH_SALT', 'KD?uKp.?M*YiE4M]w3*Appj0s0y|EG^.^E`<h9C(^+3:c6Umh4Sl<1*rlGin%8VN');
define('LOGGED_IN_SALT',   'QoVZ6UQXq?ZZ8ezPmEeh:H;_=}5K1I}<ag`+L_iQ;|*1exI(7|ZO#r*r:P[7{e/8');
define('NONCE_SALT',       'b+>H:X6|UZ?4kq-<j7S1Q[LT88gm2q?X2fE(DMUL[!p=9JDQ0hqWzHpk.UVMk((F');

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
