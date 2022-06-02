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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-plugins' );

/** Database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         '4v]*o0zp[gGD33+ _,G}]$^!J^w&KbWu0?Azh^P:byq{(:BT,(UhSR}/MGf_W,0w' );
define( 'SECURE_AUTH_KEY',  'tIoPo 2mNvng7x}aF$cS^o5TjzW|#~hmoV^hIaOifbiFy1X/LyXLAPQTzdhBC|,<' );
define( 'LOGGED_IN_KEY',    'he|X`SJ%9)/+Pt^cQM&3(<lb*ME+077EP>);,zhU>c%!Q0([:Y)wBCdZjYRrutg^' );
define( 'NONCE_KEY',        'O#x~U?`>8CEA*e(hP#7_A+k*&R-XQn(!e*|p+8kmA3~N2zT|#L^q1SD@e<K9`.Pa' );
define( 'AUTH_SALT',        'fjI1?k_B/$(,z@_1r,ZJeEryU,Q$~Hj_W~tg|ng]?}8Ll:BG$;55|7}>+&wqzjtD' );
define( 'SECURE_AUTH_SALT', 'rz~Jd?$Bfeu^:@9$lF77L?<d;*,0E%C<-OGue{pFI~5Dx$_}7<^bM+6v@%g_r7j+' );
define( 'LOGGED_IN_SALT',   'n,Xr=8:@^;fxV:[=t_howiIFQZHBg&:JGmrO:$cA9PsyIFZ<y&;q8Y&$3sc&KXOL' );
define( 'NONCE_SALT',       'jaH+RwpPFKKfy&Axt_|UXRva2xx#//kF[(~0l@>A&#&-+wYSa^k=yV~DK&0Al?}o' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
