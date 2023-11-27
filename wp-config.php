<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'df1`Oe]YYIyy*UHjK1]CXchRSAmwD,Ehi/U4I<a]y4vTQ/V9BT]K}3ummYQv;XH+' );
define( 'SECURE_AUTH_KEY',  '=LEahd?H?+UVv2_PtFIv<V5eFBu;TH#(Jy2~w>-p&84WXf3c-a?0v7R`gdjDX?*V' );
define( 'LOGGED_IN_KEY',    'C[&ea>g{_qt R_#A!)#^R:AC:i#86OOkG6vjqk32u1ElbXZX+;Vtg%fzv 9;PdLh' );
define( 'NONCE_KEY',        '9nGQbZmP=|r:O,_KTAtS31f2%,_@9W!i:w_(5!>j|pzzA*k<B5w _yZ nU.I$#j/' );
define( 'AUTH_SALT',        ',TV!*Z-%hV.CS~4U_eDbq+d-7qPpGs;sAbIJr{bbYuahio<JV%h?t%sX[0$I}5cb' );
define( 'SECURE_AUTH_SALT', 'n(Y,ms*Q!N^o!_RTj,Dt~S8aOKUib.`1 KHNUbXfV(N%H*`N|(V $k7zWXA#vj,f' );
define( 'LOGGED_IN_SALT',   'z=sCBI@dx?@r@UK|)%.uArRq>)a:aU;^Uy5^}X9N0TZs7znH`nRjHG(E9p.N#%me' );
define( 'NONCE_SALT',       '!FWS@m^9|].)+w|3wZx>sG)uYim|9~0{l#WVq feKy^.D&LgI%Ya,O={;6xE,d?.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
