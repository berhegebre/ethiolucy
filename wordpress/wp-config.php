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
define('DB_NAME', 'ethiolucy');

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
define('AUTH_KEY',         '/zbl^@)jdVP@r#Qk(AG>nZVtI+/U@~!bGTi;$#3xtS:IuYti0%rJ.LKAO$)7RZ*Y');
define('SECURE_AUTH_KEY',  'z_b~VJ%Y3r<0g*YpOxeC~ekO#bmz^`3e9B<dk`Cv7bR6iUl9RSpu T{tm=3=0?>>');
define('LOGGED_IN_KEY',    'K^FlIggWl;Ld-:DKm !+X~.a M#orJmtJ&c06hj)&4YoQ!}Fiwe6Ta#s_FoO$ZM0');
define('NONCE_KEY',        'pNc`D,R|GGa{HhV+2%&4`sr3 ^^SG(@1l@@eOcFu~Enav,7s)t5^fZzSr:8I|i /');
define('AUTH_SALT',        ':Phs6AHjS8C%(w;,J6F}{>G?jFvN`LYR+x RDzPH8En(#3oAUN_hk?bEYg8%W}oW');
define('SECURE_AUTH_SALT', 'O;5}i:842OvhooI9k>p3D{OT!~eHp~qKp@lVD[xC@k|@ X3cby20iwp6r}5DYy#N');
define('LOGGED_IN_SALT',   'B=ala`BM._?uY,da8$]r|woe:-VXnCCN[EBYm4J,]`+$N`#v.~(d_8l+./T;|Q(5');
define('NONCE_SALT',       '}G!brZi`=vf3pQLW.+,=SV1BY>n`zdl?d56k:{MN[|*wz P++]@ON%,2_G*jLmRR');

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
