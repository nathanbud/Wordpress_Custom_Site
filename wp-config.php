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
define('DB_NAME', 'university_db');

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
define('AUTH_KEY',         'sB6I2DY{Sw6CIL:|cEsxz5o7DDj)z4v@%#p4D@x99(y&GoyT@ej/$n?8;YX08Wq6');
define('SECURE_AUTH_KEY',  'Wdo4WOn%bY~.]?8=h4uMOtNz^]nG_r3y%y5,E7D4s6.%~wSec%wufz.?JX&3oPYl');
define('LOGGED_IN_KEY',    '#u0A/PW~eY6KuEcu(xXpx8ex_U4,cc#EdRo5JZd@H#s`yCJLHxJV9vd zaJQVIFt');
define('NONCE_KEY',        '7[xhTj,7uyr}JLuvr[{Dczt!lsHm&:{I[sntF?TF%?%7&J4ETlpB-d9f&u&5H&k`');
define('AUTH_SALT',        'x_+*5n>iiBZy6&t4`o&@t8`Z4n3zx55YmHg#b^d4q.j^6;,nDA={F_ONX(f=Yy#}');
define('SECURE_AUTH_SALT', 'Dz#Ye&P,Cqs_xx[U%`AiQq@+L7;RAv)wtJ6)pFjKojE)i9%d1iu|HR&ucUk%3Ial');
define('LOGGED_IN_SALT',   'R`I3_4VmqW}(40yYCYTcss),!+L{|Wd6u?OhDV(qwcS4,5&hdXXW{%=1T9r*?AJi');
define('NONCE_SALT',       '~~ qJM^[kGc1`kY~>pBqqk}C((W!JNAq!42yl*jjnJiHuOjBy(_+q]d=I$9eF-VS');

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
