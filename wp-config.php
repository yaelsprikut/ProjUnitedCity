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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         '{a*s)!<0~wTd4=v]]OO[;r;UU[^})-VI-|lPVj,)Ek]G_[)+PTX+~_^]&#CJxwRS');
define('SECURE_AUTH_KEY',  'i2=,in-Clt|C*JfnV2;dBhaAq%NX7RZmuH$%4rR4f`A=VMBNKd%hM=~&1n3K]-yr');
define('LOGGED_IN_KEY',    'KJJ/tdP`PW-0<dQ`A>lsf[L),WAZs}rhLugnb5;++{!41? -0v$3}tR8V5*--94Z');
define('NONCE_KEY',        '+@Hu)k+F~Hp6f;Ny[ZTRx_jN9?dd(&s!a~3GNw.}/Edshq8OY0-v:lc+8-iV}PYo');
define('AUTH_SALT',        'i/Db_w]|q5&OxKJ}A@>gQxxt::gd3AC,L-c*Q2b(1[u[`Dk- {)97(%h}+WX)|i>');
define('SECURE_AUTH_SALT', 'Ah;g`mX,=uhD2HW/kkm)a_-1ni0~aaCVLzYr+g#z|zH%iwzO1oY%Pr&L^%}I|pwE');
define('LOGGED_IN_SALT',   'B)I+b?%^05CLuDqIkcSOMe+y=pLeSm[-`w~uXcaFs,6W^8bX]?b5`)zh$r@.]M-]');
define('NONCE_SALT',       'WV&&EO^E4D-6&OU S=jC1~(w4OFUi2ChB!gpu;y+GDg|J}?,%Jk6%-L`Ult.rd-~');

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
