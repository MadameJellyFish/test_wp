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
define( 'DB_NAME', 'wordpress_ecf' );

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
define( 'AUTH_KEY',         '3a<meIBQmJx8%IYMz,ve)Tv|hZ=ReWm1gIU0&(oY~<0Ce`W6hv.q/o*aZaek35e+' );
define( 'SECURE_AUTH_KEY',  'pK+LZz4cO)p^(4q(YNU_U:K3%cg?7+e*rmc31{[WmP~,m;m,-E)[JJ&H$|hKb^[g' );
define( 'LOGGED_IN_KEY',    'kWx+P?bmdXNK%!!_vMy{}Tm::iLmpv7}KTw`1:ANUZ:4u7|!614Y;O^[t[n:rA>m' );
define( 'NONCE_KEY',        '}MYMh%&^apZ;4b6Fc?uQHcAYUN[vDXid]9HRVWDlM8zH^POBtmq6IxqqzL.BT}Bv' );
define( 'AUTH_SALT',        'sd<tg_U_~I_D7T]16R!`K> Tb.&E&3Y=(8S2b[-SSskX/!U=H<K%pobH%zHe%!^8' );
define( 'SECURE_AUTH_SALT', '#wOwQD?[O?|$2}Ab+@tK<i&|JN=CA2bm(FjRc`d4tNdkU.v8;*,h= QY,KNXs2ug' );
define( 'LOGGED_IN_SALT',   'd|H&hk(uKE7srJ`4sHT_4&x]t*SjR(f)uVpn]6=:#2$Ipg)s|OophyZZGp@kRz1d' );
define( 'NONCE_SALT',       'q[|i~AH6T:h^?PC6!XSP8(dLV=RA/_$2@ngJO:C+se]?d3{2gsc?ZZ;6pcfNftu:' );

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
