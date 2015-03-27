<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vm-academy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6Y6)^=d3p$;00dZqTKmY5i3ayo*`l`m-zo}9 zZ18j50D^+(|+<2%NflT3Sl5nt_');
define('SECURE_AUTH_KEY',  '/8$L,AJt=|gg{A}<m|u!K|(DkX4thu;@jS_QfY88-ORom+q|_R4Oq-SGn@r!GPDR');
define('LOGGED_IN_KEY',    'h-DRdKja4C$&sb56`m]7eOLu2s2#%H?nrep3EH>PmfEpSs,?gCJUOx_s|&Zz/ZTK');
define('NONCE_KEY',        'f<b+GFwQCW??5(&HD,@p|&3KAE#`SRj1]oU^4A?N&54blXc/ms+JB-*A2-<6I,*:');
define('AUTH_SALT',        '+%z}P3Zt +f6 U0^2S[@X= g;0s<dti{$-BD:D &,@FC4RE<a$Y-|?6PZMsYv_F3');
define('SECURE_AUTH_SALT', '3PP2]/ruJ%_~VMeie%3&iLMKdBr`RcAwt4~fD3qFqdoJYsU)F7=YYpPJPvSFa5du');
define('LOGGED_IN_SALT',   '0OKs!M~I pnM+___sdr||%,[248m5*:WUG,-e2sZR^ ntxhK,&MN9,E$>o)M5;sr');
define('NONCE_SALT',       'Z]mr3.ZDt0#Lr4)+N#O?o|m:;88DE<o; UtC(HA^YjH%W2r/;*A1IKO>PK5u8)R#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
