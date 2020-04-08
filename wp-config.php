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
define( 'DB_NAME', 'tutoWP' );

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
define( 'AUTH_KEY',         '`CS^jwY)T[yHj%=nK;Qu_7!h$e<E{jk~w*>V<)@M3KEAe>nUO2O}q4I%jALZ#/KN' );
define( 'SECURE_AUTH_KEY',  'VD`bTbM4n#UmW-jE0w+$g{#%dYtszp x:;BO4aI3jj{,TYT{~O-q^TEMM{Bn#L81' );
define( 'LOGGED_IN_KEY',    ' ZqrYh&_L&_/Ox#j3$x(nkqOrdVIF2v=k75fF}Ww^{c&|pV=_QO91,Uu6U^Smu26' );
define( 'NONCE_KEY',        'v@F~1Fv$%`ogEC:Qb6:ko!{e+h6>U,l2L.HIr(<P;sH/V`9!b7eF*-Hi?PfMpC$X' );
define( 'AUTH_SALT',        'Vs(;8affdYJm61`uhe(L]HE[Ma;OX[9R7KvKCGNPq=bO?NH~T9T~E->_t4{.hxv ' );
define( 'SECURE_AUTH_SALT', ',7sfxRWf8tY|p2X`be;/lX%hCQUB9WDS1D|{FuQ>?O{jc>bmYfCho 3Jp(Q7{*yy' );
define( 'LOGGED_IN_SALT',   'gZZC{niAaJKU4720EHhRM!fN%g@k+Dv;__vs6aPO=bNz0`4v3+8j/W:]LKkt|QN-' );
define( 'NONCE_SALT',       '<UnL_OqYH0Nx+tYk+4=v_-JhU7c&9-x~OM*-on.>0{EF=O1E]{6GRQ1(>vCBgN8u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
