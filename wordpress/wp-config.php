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
define('DB_NAME', 'dbodentalsite');

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
define('AUTH_KEY',         '@b)XIP_%=/1=p&L^Hk=${w0t<56QV8BtOI6J[>k_2km/tx1+HJZGZpG{;pUH5B=y');
define('SECURE_AUTH_KEY',  'V$-<lZN4DxUto g ==@vtey9_#5B03g{97s2[{P=xW2F[d.iE:W3c6+xhm,{Lb+]');
define('LOGGED_IN_KEY',    '<zn[XB,^aHJE57m7]CE 8aBRUr$[Hso[]r<NXhqSA^X4a|U-Nu-uN`@._3e#/}c_');
define('NONCE_KEY',        's9boxJKaKI_l9aSWM*9l9.<P}$h?vj$%L?hO7QObn[oP@S`oA.rEr}y)Rtw8>j:%');
define('AUTH_SALT',        'pul%o}1r+r(lx9z%}PlTI>o3Yh7n_@3aD6o-:;#s{Y8!ZKF6@zr6&,nN5[xjfbkX');
define('SECURE_AUTH_SALT', 'pZ@c,LV?zp2nvor$6Xp#fN^Fokm?n#9hNm;(ic%7G8}fSQ.I9*O.W.:u^~#s+ 2G');
define('LOGGED_IN_SALT',   ',k+!,Uu@HYmj(lT^soD5`ouv6^sYaz.*Iu?-KbT;}1,lj=zwXD+8[faI*riEqZ$5');
define('NONCE_SALT',       ' >oBMS}he/G5?M.L>0}hzI9R@ 7onT.<O$:xcsr~_iJG_wleLH5R8@Tw@lbuJKlG');

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
