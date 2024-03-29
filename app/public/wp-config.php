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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'V;Mm|xq Q(SbP4~w?O[dDmADBa/&o8e_+2h=N]%T8v9uv@@nC/<]}+f3V_WmaZ9t' );
define( 'SECURE_AUTH_KEY',   '~@|S[,Qf&1,W~bcnKTFA^+ov1lw|pU{R0#LSdHx>VBo_B7$550ZEgB1%E{`YX~&X' );
define( 'LOGGED_IN_KEY',     '?5OyRx}gHr6+K#!ps}p:$dw/wx~%8ZF@Cf:3Dt;N~m6]L[wiHMr2&.S[qpoNToV>' );
define( 'NONCE_KEY',         'KUR*P&`[}#EjB,p(dAmoHToE^iU_QPZ6N{2Q;/!]>o`d?{31O`X`1;;% ;ZcQSz2' );
define( 'AUTH_SALT',         'qo73ZoRp&yWnbZJRe4uAp01s(Ole&6Fnn~u^&rnk0.i&4%~3!?0bJl^X+:!Q{sj3' );
define( 'SECURE_AUTH_SALT',  'OsiVc+X7)iva4CC5)L2-t,3~W``mY!b}oSiDG9V=_QM|>W&~,GK*pXtk0i] !`|~' );
define( 'LOGGED_IN_SALT',    'HVKCUBR8(j@}X d.O}a-7W n1$W<V90W|RzG5s.M%_)QAO%LW?S))k[!FT+wmLtX' );
define( 'NONCE_SALT',        'l-E!O&MFePsSGSWjG!w5)%mzvnynzl#{p-,2E#k+U}<OQYs-;FPCRZ3K<{Z)bN~_' );
define( 'WP_CACHE_KEY_SALT', 'URCSS_-j[wxdQiNYgB49f^;b&0?`A<G;Nkofjn}t|={LnCrbNe,z9!x&:+:~7r>S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
