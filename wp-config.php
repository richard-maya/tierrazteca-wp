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
define('DB_NAME', 'tierrazteca-db');

/** MySQL database username */
define('DB_USER', 'tierrazteca-admin');

/** MySQL database password */
define('DB_PASSWORD', 'bN9ERbtEFZxOSHwx');

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
define('AUTH_KEY',         '42Q:wK!5f#A6=dZ^a@pMfv v;iU^u-os-*-,457tW|G^lbV_*ZRfIsP3:U<L`!X|');
define('SECURE_AUTH_KEY',  'O=ZDIwf^kpqp{!@-bN+Ex=K^kNea576}MqGvwt{fhx3P+(c%R~| g@CnGM{}L4(2');
define('LOGGED_IN_KEY',    '[$COhMEW-w5r#=y]?1atLI$JPrW8)b9Sd^fK$hp`Ub}.2LGo1j}h7omwRs5)CT=!');
define('NONCE_KEY',        'ei+*1<M}=+I*UJw*j|ijB-ld{<M[}vQNL$Fl^+ea`8SNq$6P*<+TNdL:~r|Up=J9');
define('AUTH_SALT',        'e#)WA-E4C~`!k(=lM)B|FW)VE>%)^60ADO-fA/XF~mIi@`0:s+j/2w+3KYY~.KvN');
define('SECURE_AUTH_SALT', 'fwxFd^ERG<n:55zrGq@be<J[z5H]xK#4a4fvW` REL<T1[0[fElDNme-aD--U=Jr');
define('LOGGED_IN_SALT',   '#DJWiTC9Z9TE441xhe#LWB<193@<3>q+6w#wbo+F>xf9Frh+c$(%X|R90b*UGj_1');
define('NONCE_SALT',       '1j3&K S[s=/.d=p<^y7=!YkG5+{PsEA^#M*wm-oN:}}J&-+WDF}CF**sYv? [xv&');

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
