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
define('DB_NAME', 'hello_db');

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
define('AUTH_KEY',         'TC3B<G mmQZR(O5*gK!>&G/S&aV#]x!_m)a%rSS)?j4Mkx9~yG9j; &+<~Vszm$D');
define('SECURE_AUTH_KEY',  '2ik.u,|aVZk}p0 d@G=@PnK.C8XGu~Tiy.[v:-e0TZWfcmV1_WyE;WxsJL:gSomo');
define('LOGGED_IN_KEY',    'VvYq:|e46-O5@}GwdV!Jo>J<AjvPP)*P%M==2Kjh92nc=Gq7}mav4O{f|0#q,Hjw');
define('NONCE_KEY',        '2b|5XTCP<uuOL4*V%VWM<9jG9^q:5{1[n41o]L7/E3*&G| k:-6C>o_ e)kTx,pB');
define('AUTH_SALT',        'K6h)CT(2Qo#v?%}^y,an!n.v_((3qPn/g)@TbA}I1G44E|!W2e5P-Q(1*HVg#KJ7');
define('SECURE_AUTH_SALT', '{jIkNdw:&fLc:G#uV9|9W|pz0G;Zv;JXCpvZQz%y%@s-]PJli7BG,.:1l<vb&v`b');
define('LOGGED_IN_SALT',   'IG3/=M FTTMclsD6yN+>x)QW7x0dGgH1t]vG%=EPm09W3NB-gQ7X3wD$F[jNF#HT');
define('NONCE_SALT',       'U5T%M.I-!wfZ|=YLiJoq>JffTy-^om8tPu&!$M</z8[tB]%@zqK7~XjpYg++6;]*');

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
