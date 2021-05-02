<?php
define('WP_CACHE', true);
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'renome' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KKN.+q`{Kkw[*GmEDlW?~zCPJ3sSA,%+Ay QU%Q%;RYG0bVoy<3_DW]Xh$r=%<[G' );
define( 'SECURE_AUTH_KEY',  '%,x{NPR4;7kN;/FaCh~,kFHf5@WGRK7%RX3,cPFVU@PZC.:IGkAC:r+L~L#NL,lQ' );
define( 'LOGGED_IN_KEY',    'ODcN*W6T0aYJDHO5:Q4m}Ncy^i}}D1Co5@rwD,8yiC``QfBFVpLCFRz={-0So,t&' );
define( 'NONCE_KEY',        'pCX[T^Mw)BT?qh.CX$o;f`t{.eG8d7iX[/]1q:A(2dF@3lBB7YTH2vVDWEv^Wgr5' );
define( 'AUTH_SALT',        'dpf!JDw.8AqPY{X>Hc:u)uzfJzV j<f?{M&ZX[~^SzZk;)uE0Z=AKsFA1-jvqQ)(' );
define( 'SECURE_AUTH_SALT', '?6N!$D-AoLAUp[RR^mX2JMMrF]re_GDePa+q}a^xL&fgORfm6#dQ#C-.Z`>PbJCA' );
define( 'LOGGED_IN_SALT',   '[Y>-5auv/4A:s1Kqr*{l@+OuhBD.$9&O}am 48nvhj)Qiw.f)lXV=v~z1=9#PGAO' );
define( 'NONCE_SALT',       'Z~PLJ7__LrOn7bI2v<^wu]fxIQh.59P?d=5(dCh85RHj#tA<I.$;an`D?D=:~0S|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fpbpv_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
