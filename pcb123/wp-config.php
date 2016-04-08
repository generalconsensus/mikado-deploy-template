<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'pcb123');

/** MySQL database username */
define('DB_USER', 'pcb123');

/** MySQL database password */
define('DB_PASSWORD', 'sscP3ac3');

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

define('AUTH_KEY',         '|uKz|NGj-=roy2j&>)GHYsbLIA06zPz%kR2F<#-lJUr6=L8wHbB5]Uk|AU;9`9_*');
define('SECURE_AUTH_KEY',  'LXmB,r)PAX{1+~$X{e#d#=T0hqPl!)bn44C:gE}(2t6620w6|=-JoXKsCb3lpFAU');
define('LOGGED_IN_KEY',    '/WL=h-X;U-?=ZH8k+M-sa=]D}#d~&{V-9SsOn[K.>U2W*UdboJkVAm/#C0}/S3)m');
define('NONCE_KEY',        'nYdbrbN(+QEJTa5NtIvYxVyVSh&9<-N+_LX%h+xC)}W.U7_k<f&JC1IALIP2@O5H');
define('AUTH_SALT',        'ShrCc,1i#2-W [L}SObyH3/Y(-Mr.&?{ja[I{3!3x;6eQEO Q4rCyN2w7cqxw[hJ');
define('SECURE_AUTH_SALT', 'd3v)|RE$wGZeT.Eu4LS,L)E#F+opyExHI*0]Z_4m6yl3F}e558~Ohb#e%5x$7Z$R');
define('LOGGED_IN_SALT',   '-;V|?r^9%r{D9|,U{3wf,66[rkLF-P8jB<)~mpJu(05d=43.~V|]MG!P<>_zg2Y]');
define('NONCE_SALT',       'zHH CM^:VxHr/P)VG8D-eIF:fi--%b<y<6Flm0ztcz1dam$!cU:qYag0-t`36q{>');
define('FS_METHOD','direct');
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
