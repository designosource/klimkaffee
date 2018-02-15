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
define('DB_NAME', 'zadmin_klimkaffee');

/** MySQL database username */
define('DB_USER', 'klimkaffee');

/** MySQL database password */
define('DB_PASSWORD', 'na5ybyzed');

/** MySQL hostname */
define('DB_HOST', '91.121.170.187');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_SITEURL', 'http://klimkaffee.memes');
define('WP_HOME', 'http://klimka');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';*UK_6}/[AjztKnDT< ^78Vz{nYBH2L82_7V0=;7>4;D.BB%Zq~!0>.s(f73A<59');
define('SECURE_AUTH_KEY',  'H:2M!jy@U| |_)An<I$(7nqKl%rZ0m|L{}M.6wrH_tl2$0YpC!+z(wwsT?1B4^#7');
define('LOGGED_IN_KEY',    'PknRD~.ASqMUaNk5CD>T=iH.w0DA4x]/ 8%]@Uce8=,]5?zaQ4AZhi1NB<0>0&fD');
define('NONCE_KEY',        'Al|(ZO)0w#+e;C7^xC)b$Zh`cqVj.wNFj@QlDNFV6A{*U*<2_rYx6E}k S<OZ~9e');
define('AUTH_SALT',        'W2N=U-&|!3@(gLLR^27>! }y/ET;|EZ*wPI -5gQ2bN5>coZcPN9Ll2[H+;PG8rH');
define('SECURE_AUTH_SALT', '&C<98b=EjvvTP3Km=@v1^eI^Mf2`RMDBL@p~EP<<WIMgFq])HB{&Zov+G4Fb?{`{');
define('LOGGED_IN_SALT',   'Yj7wj6;Q[uIzQ MK^1yzX&!VAW~A7?ySK-UmT4W$u8}#2Fk#3l?*lNU|@U0(7j}%');
define('NONCE_SALT',       '~TOW8B}[{p&iS`%Z1=F5+$z@:N7,cW+Z<onvkb9{x!QK6.A/ul=7j8VJ<(3VGC]%');

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

define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
