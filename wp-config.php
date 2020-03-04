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
define('DB_NAME', 'hotel');

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
define('AUTH_KEY',         'm6T5tO`%eGa!cEY5ha0NK7]}Bj1:)Yq_Zs?R5`%b;[Lw]hzd+Q6F:Ex8Tu{})`cV');
define('SECURE_AUTH_KEY',  '_WuJ:[o:+>Z,vg5baj4QMj#qZ*N]luBt=DFV(YVBHyJ*Q1+jUA>Z kqYJ`?c8is(');
define('LOGGED_IN_KEY',    'g?NU`~sUAQkQA~^*W=FrwI(&ziJ0P7@LLgu36e2?*TV `+!Ky+Ks@C84lvmn2#-u');
define('NONCE_KEY',        '~AgQ;9sN#Do7~f8>fcS0[oVEOB}Gf]H`{eXGb8:M+1^hJ zegzdI.94jd}GUpalM');
define('AUTH_SALT',        'o?x|@4g~l^Gq9:8T2]BY8Y^>,X|kr?>%4(?w1zebhI>vv{{UQP3xha.D&_& k~iT');
define('SECURE_AUTH_SALT', '-uFLMP:9~QM3G5Rl+=HTNr-(s7m/P)I.n4~7!W,R]#R[1<w!xL0o%jCX4NNT{jJ ');
define('LOGGED_IN_SALT',   'cxVXcxSK7/I2:lRCOYs9plbwzDhw]k-TPzn9]2FEpST7>xP%HO2FzS K? -I{e2=');
define('NONCE_SALT',       ';p_|[SxERVdY`jYn_>!QGKQj$i}5XWg_yKVOGwsjQYS{AZ2OA%vXgRD=-AZL u!t');

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
