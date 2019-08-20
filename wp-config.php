<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define('DB_NAME', 'greendigital111');

/** MySQL database username */
define('DB_USER', 'greendigital111');

/** MySQL database password */
define('DB_PASSWORD', 'H@3GdwMxZhN');

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
define('AUTH_KEY',         '%5T5U[:[yBce`k6`v<Z`KuwW2TJ8}GCT!|ZWY=hZ-q*@NWkt,Lo WQzD7[&KJWui');
define('SECURE_AUTH_KEY',  '?4/#Mh-K3{pmMD}:V BV7.7kw3glDuOKTT(cXpJU^ >HM<rM LMy[;<rW-fNy}*S');
define('LOGGED_IN_KEY',    'Uogm,R~0P:-*CmWF%=kUqu:-h2vHTB*:[!x.5E2ZmpQE/f.J]I-+ZZ)3BO`ESA1N');
define('NONCE_KEY',        'WDeXnSM7ID6,QU&V^r:ym:S~yw(*7}h3&-74w)B3gU3NeQIWse`HW}|[&Jdo@e^p');
define('AUTH_SALT',        'q$Z0+R [!gXnLJ6k2VXuoO8;Vj3bwlyYe=;JAG#A^(*uE<9;R`F.j[PQSPBrO `G');
define('SECURE_AUTH_SALT', 'PqG6y`G4ohkBxAi>qL.3N6d9)7T6oD1&^Q8.D@S;vUrrU0=k*`#)|_tI82>d4c %');
define('LOGGED_IN_SALT',   'aIMOX I6u2|0h{C?e68~+O#>J?TQXw%7J!w{ib~9yOQ;Glf/kUK|}]L06&NALzcx');
define('NONCE_SALT',       '^0ej&^2$4`4FL9>v*%,HS#L>Vyirx)3UdQl%To}C6m@ta/5cBkC|Tm0JGuB:}ZQZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sg_';

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

define('WP_HOME','https://greendigital.com.br');
define('WP_SITEURL','https://greendigital.com.br');
