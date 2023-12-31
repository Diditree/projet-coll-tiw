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
define( 'DB_NAME', 'dimitri-loodwig-eve' );

/** Database username */
define( 'DB_USER', 'dimitri-loodwig-eve' );

/** Database password */
define( 'DB_PASSWORD', 'EsFfYWJhxQMMbRjt' );

/** Database hostname */
define( 'DB_HOST', 'bdd.melvin-lemoine.me' );

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
define( 'AUTH_KEY',         '~(j#n;lqmRx[6nP$Lw402^4Ct#1$L0.sw|/w[F}fOD8QUK#F:a[x-kvbFg*c%zH-' );
define( 'SECURE_AUTH_KEY',  'T{IoLWiAM8)1xp%etCqy90mQ2S#^-Y3Y6u!?g -uSrQ,4hy&bu@OlcUS4G>@4DTn' );
define( 'LOGGED_IN_KEY',    ':2>6cV(ayllrMX:XV7=OoA4@]($-xVXzeHeK#{Z)XeV^U|rVz`MS6|{Y&1YufQsd' );
define( 'NONCE_KEY',        'UxdxdT$:ML8r@<wXd#ml:TuR+BOZ8{*o%L9tH>P+jIRbHS(m_.lcI,qmC@`y&H(b' );
define( 'AUTH_SALT',        'ySl|~e<wh}8N5Y2WQx]W/PZYD^vpEWV/X181Pv{#1j([a4$0qsH9&%%d]U`In8r?' );
define( 'SECURE_AUTH_SALT', 'PPKIxGj8$)iRGdF{gamk2.I8 0IZ~h!v0p}33n Rzh=Y[T*|.SQ}}ydrZEaWO3D|' );
define( 'LOGGED_IN_SALT',   '~80V,318b-@i(QA)G@cbCNl+l}`*RpM(bhFF;E*Sy8~I8td/i;g;kb/_F,tCW}aw' );
define( 'NONCE_SALT',       'N|9l/{:W6HlDN;^}yz:}uPTx^Hrsh*K=D;4}jtF$x}*UM<uCTTiXxNn_R[lAWZk|' );

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
