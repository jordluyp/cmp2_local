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
define('DB_NAME', 'CMPII');

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
define('AUTH_KEY',         'F2MJu@t;9+AcI[FglaMt:@926$4`X#_~P]^T(hC4BBNE#{qNPA7])v=uh0a54S[Z');
define('SECURE_AUTH_KEY',  ';xhpZ=KhhZ)rG^_WYtPZEreSsaXS7yOVe5mu!yEE+z)qA5b[a!OWOL@f]Rjurhve');
define('LOGGED_IN_KEY',    'H25Z9#N(2nC>PYK<O=e(*n.Q~(`bhd1cwDS4R)o6pV7|r)!Aq=m2IPTk_m0Ex9gp');
define('NONCE_KEY',        'Pn#gZeDE^|+,9x=D&Kzj+3d^8:pHltMoW?tqJ&uw^nn6w>lyl{s_9.4mVC`QHa#Z');
define('AUTH_SALT',        'LJigj^!Oe$UT^CLyNm|qbzOxF:?jpT,h2,vnr/3<{_7[Vr SqVyc`<:V<I}J.fj`');
define('SECURE_AUTH_SALT', 'f1mAhd9KZ}l[s*p^IFhheXFBeC6qtS0WPGs)_1:7#,pSW3},.2ij(c-T4VwAH+Wv');
define('LOGGED_IN_SALT',   'GO<Z# efT*i5%s/{R(FmNlgV@=kJSQcjCj0ZvYo~H2+s)i4/1u-heYp_y!xTyp-z');
define('NONCE_SALT',       'QEIAS8D1NQ}V#9}r}qKP:?p.=;qgRqRHPnQ?Q{~o1pOer-gv#R|X$=r}%[ARx%Of');

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
