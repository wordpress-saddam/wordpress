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
define( 'DB_NAME', 'u239479569_NgoZV' );

/** Database username */
define( 'DB_USER', 'u239479569_iuNMq' );

/** Database password */
define( 'DB_PASSWORD', 'qz3bjdDpDO' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '{)rCcJ!+R|K)~bsmw4mJN`#FcZ4qR6!+Ny!|4+(}I46W_D~r$?/G$e<:hFRgl0A0' );
define( 'SECURE_AUTH_KEY',   '^h[w]$,?P;5z`KMm@*#fyi#oKhP;o2gU7F|aak$wGW3^s0G0,M#1;7Ka5`@?_.5i' );
define( 'LOGGED_IN_KEY',     '@1|scC1q8Kr$+/9>>8nP+hbK!nTp3odQJ?%^GZt;4yrIb4n?5x.tLLIgB74EN;7b' );
define( 'NONCE_KEY',         'lnZ*!?zu>4bNN02-7MZj0]8Zt/Y4h.[,/NR~H*L[B&:(^37q#;.rb+:T)|#z)b#&' );
define( 'AUTH_SALT',         '<M:!/z.X#?W1,<[p:GYX, &^;MvU}+%k3Zqy9nG1S:BwGU4xX}>^nFh-8r?J/{/n' );
define( 'SECURE_AUTH_SALT',  '97j%I0P3]/rIpPu&$L6Lpv.fl9`J%d2tdI4j!;eeK3#^sY8h+b;JJD(fC^0f(`uA' );
define( 'LOGGED_IN_SALT',    '$E!*,o8X%>+_FB^+@#SOh0+#eJ]1Ay6)YFD,GiK/x<~mE=17%Cv>I4Rx?C.BWg/&' );
define( 'NONCE_SALT',        'us<(2inw^+t~4tCP3m&#dnP=_KjFQ?K4T=(%4vp%nH_7j4PjcRf_S^hD>Vh1oc0b' );
define( 'WP_CACHE_KEY_SALT', 'ipKX&H&oYEY8%NQEkM!Qt(i!L-%m5P.pU&h*FYH(B^#vP-4t sxrz`Bu*W 77Rk.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'uni_';


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'a5199305ab7eb915208a55541a984720' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
