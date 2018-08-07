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
define('DB_NAME', 'wp_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[|pyNMU7HK=E5$dzffej`IFB|R[!M0A9g,=?F)xNJ^pU#Ptoc.]| /a>+:>7#<j^');
define('SECURE_AUTH_KEY',  'W+PCzA3Za#i,auHC!4ehi%P5kiHr]`aYLvop>aNEy(3L sXbZMS~/$a->##~<pUl');
define('LOGGED_IN_KEY',    '+F)lMO(]>[5QY+MNhFZiv7GMh?.?JbMR88U.7l~mWF*PyH}5d*uG]0x)u{iZ2S7~');
define('NONCE_KEY',        '=J]Kp_o+KrEg!/9UqvjOx6}kI`Vj=r[i0jRT^*44jlFKSOas[ >]MV,?u75kS2I ');
define('AUTH_SALT',        'Il;G_>F.uVh?m6FTs*nK{oC8ub_d=l5T 5?%X1*k@^NLI<18*h?c>[$y0~#cTWQ{');
define('SECURE_AUTH_SALT', '.C8IR6fYMi5USk^W+>My|_sQRP)A;hH0E[*TJV0>!yD~BNl-+OhM({j zq*K?ki8');
define('LOGGED_IN_SALT',   'yJ2y0$)xydWD~mZk5c#x3N(=6~5aLymE c|=fXhOpZWo,@rx#@vqKZ]17q%!ylkg');
define('NONCE_SALT',       'mn;FVrlfS] pyccsP7k%thKl_]i@:6_QTt0Qbc  $$yN;.9x:RWtx)*}`,Zk/U/M');

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
