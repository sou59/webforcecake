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
define('DB_NAME', 'wpcake');

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
define('AUTH_KEY',         'QqryeF,e+qaDDOKw&N]v.&TaChCgN/1#+miag~s^}AsnfARIz0k:8 xHgq&[Z(y{');
define('SECURE_AUTH_KEY',  'No0ma!v,^{IzTf-UNvRPY=1em!,yRaZXWb@)[$cWL^#D|}u#]>K-HlK<iE[Pyb.)');
define('LOGGED_IN_KEY',    'Dpjkqrkc5QaubG)?e<S~L3zWwo/ e[MijnC[B^>^^b>k=uOdFkEo1u<p)HG>n>pU');
define('NONCE_KEY',        '{b$xF(:y]BwLG$DUogKIMLU]iYUSwP<e[aXIU]&Uc`0~9aznA]}mthk{H2eyq/*}');
define('AUTH_SALT',        'mFM[ y4]$IYok>p)CihuC,]q~?o2vA2{~ac>S/ +I_@ZrrO6lr6;L2/S1/8kQ5nH');
define('SECURE_AUTH_SALT', 'BGv#AwSbxd[!$r{ryk$$e;4*J89tCXEFCKPvLsg]8JY@+j{QTiRDt|Zcb3^heC;X');
define('LOGGED_IN_SALT',   'mip9~%YUkF!=_w~-[ _435Tnj;!#gl.3H4i^ YrGKGrhOxpKf_vVf09tc,j?GaBv');
define('NONCE_SALT',       '5(NF-M|1DEF=t ;(S?>UZ>eNMc!Q=<usYe$ :f|4<j3V:.mNv4AM|Y=~g2(OmdPl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wfc_';

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
