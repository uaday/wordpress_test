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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'AJvzdm]kR3p;ssL?+-G?Y7t!&xqJEfoiJ/qJln6{xfe;RpqSIa[^gb0qR:*:-T5|');
define('SECURE_AUTH_KEY',  'NM((or?vU/#HIs~Zjc!Cz`79].4&3${-)m7!IcB;QJj`[K wQNFi$hv!!9p>]AHu');
define('LOGGED_IN_KEY',    'zE{{00M7Ckf^Nu@Go*;Cm} @**mGS,yi)g~oi<^PI>vOaEZT*}WhSamkp1f6l;AW');
define('NONCE_KEY',        'p%<Bt^WUhS!U&5?:Mi`_=mMO80yu:GYj7lr >Ihcc6=InI-Q}siIK7Vm%)sZ,[?8');
define('AUTH_SALT',        'n7OZE/QX$JgRBjN0=|IBVuszH@0_Riami<{goOg#y6 KOb1)cc>uO$UqSZ01Xy|g');
define('SECURE_AUTH_SALT', 'nH[E>Mj^|)NzUnUVw:D0A=B|BO>8x5CEo-6H^OoUy/Ka2NE^LOcGrTZ32,X*R/60');
define('LOGGED_IN_SALT',   'nW4gx[hw0[a}M]Ypl|Hzd+SU$&`J)yrLezoxsc0jmWe R/,xTSD7];q,Ug~C0f(P');
define('NONCE_SALT',       'kIEUT%1:Op?8m^pR#14eEj^Vqv.n9F+~i[QBV&Ye<:Rmpr~m^XGv,[0M[~/9Ge:L');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
