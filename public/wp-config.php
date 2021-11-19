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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_alex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'tk^d~8EmqqY<pT)~=~bCZv7s&V;%GAy62*z8;8apCTfNy;2Bn#-7vj*3sUWSLf5F' );
define( 'SECURE_AUTH_KEY',   'RLr]<r@!If-XgeXY^^%s8Z]a%>{t%YF5WGTfk(9v=CJ{/EZW[b8j&hx|1(YcUP!b' );
define( 'LOGGED_IN_KEY',     'D>N=/b=SEBca==*#kI:JVvzaW+uSERxE%FF }lfT)F112iay.rl=s1j,3JL^<[^A' );
define( 'NONCE_KEY',         'x/(iIlM~_!WZd/7ofQKE/dXB{!Q|6+@-5)TFG,(-veOo~WF[X.*v_+;$*jyMTLE&' );
define( 'AUTH_SALT',         'x@.UvJh4GpY?H^*E^I]rW$fxjR{N[&11)84sVSxeR*>5WUhS?~19wN[L[EkILcJx' );
define( 'SECURE_AUTH_SALT',  '5hp~vW6W55o55)MmE.o2/](Ku>aYolBUM_%a>xCrl_a#-DB$x)07`YX6iH*/]h6q' );
define( 'LOGGED_IN_SALT',    '*s0;T1kWYy&r:7i>6!@RI&E6j{rNPn=eNWK8vv5,t[Nq`-byTpQveO~%U3@02h4)' );
define( 'NONCE_SALT',        'e9__c)h3r+Nlg-g<JK*JpGsU}#^65`2oC#ft+xYCY96|3[ 8)y-$kCeO`7==D0J{' );
define( 'WP_CACHE_KEY_SALT', '8VvvtzGt},L74)2Jp2.X]B1aN}*[(N_#OT08~-#`yxr90HB`t$!0e5@DJ5Y8R^32' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
