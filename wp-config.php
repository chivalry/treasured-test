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
define( 'DB_NAME', 'manualwp' );

/** Database username */
define( 'DB_USER', 'manualwp' );

/** Database password */
define( 'DB_PASSWORD', 'huzseb-6cygqA-bowfep' );

/** Database hostname */
define( 'DB_HOST', 'mysql.chivalrysoftware.com' );

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
define( 'AUTH_KEY',         '2t}|ekm)y%I~pyAIa^7FwE f|kOz*vi2}gY3B4gh&bhn>F?LS#pjUO]`1eNZM3@8' );
define( 'SECURE_AUTH_KEY',  'jB>bKRgIB-3|w.*JsG#>eJ[=NKX_sgaRRW:42ZDsV*e:M[vRNA`D73#rw([9k-Pa' );
define( 'LOGGED_IN_KEY',    'G^q0-*WLcI)]8e6/lQ]3ziiCruR+H4q/Y0mT3In.b!Nob~c,f9(Xud):}cyHOP~6' );
define( 'NONCE_KEY',        'W &YdJ@tuJ6c+;BnR~E)Q57,zRv<8n@G,:s%.;A#ItTf8+B1=C<yP>y@wG.NhRcT' );
define( 'AUTH_SALT',        'Uny+=V 8P*$M =fmUPNRW%oq%T$dAaD&[,M-Tl(:q=OO-7A()l$XHX(/|Gp=<m(M' );
define( 'SECURE_AUTH_SALT', 'Yax7O:^8]Ycxkyd&_?bRIHbv8Eg4X[I@up[TpMtcK+oJ|L1&huJoKhtyNdd+2M(@' );
define( 'LOGGED_IN_SALT',   '*6[^{1 =1yArIO%:p4z]w)8eatwJ[v}W~OP.GU{L6KV@Oc&MgWK[ 9IT(].QI/c;' );
define( 'NONCE_SALT',       'SJ$zHSh^rfz.em#tTWvU6!V=Tzl+` 67I=~>Nuolsjk[J/iZmC^@l|`n:<DL:2r{' );

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
