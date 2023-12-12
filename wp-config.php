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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'C.}E}JRLO]g@n@-o/w>pDjs42m#7gZxBJ8ZEz:V&w4}S4}H@+PHw1_~zA2GGz1qa' );
define( 'SECURE_AUTH_KEY',  'QthukL-,FXnqC[}%?5aio@fwj9|#81(V`[/@ag%p3.OlC_e)L>D<_qgL<.U1BD`)' );
define( 'LOGGED_IN_KEY',    'A&Z26]/D&Oi6EgKW?T[L3o zFdkS&$i5Bn]]`JV-l qs;L*;h4Hl|Tll~~7s9oPt' );
define( 'NONCE_KEY',        'dMW;^Jl!nk+HBARNT8XI>12;H9=AqRvU`mp|GpgOXUW6SF#?&KWZX9X,!OY5i5i%' );
define( 'AUTH_SALT',        'q%#xFr&j>M({5oaY3c=pzd,&o1yG%Bp$(?i0s+Ykp38DoQClQ.+.&lLn}ejBBGE{' );
define( 'SECURE_AUTH_SALT', '1dOEU6oW{05e%nNzPSGki&1]So<b|n2$kjWzjLBy>;{EsYPW;2B)Q6o[3uT}u=Fp' );
define( 'LOGGED_IN_SALT',   'Dn,QiXiwIsAB[AA5T IfSIXo1ck~pO0sIL=^lfmOY ;&umI_FC?p/_$mD{Ag&ej_' );
define( 'NONCE_SALT',       'Qm27_xqF+YKEzts wj(vFz$|OfpU<Z8fr/TjIlN]m8_|_Vyr2;RBdT:3A6vKW`-E' );

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
