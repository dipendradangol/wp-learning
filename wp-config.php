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
define( 'DB_NAME', 'dipendra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qZvuQ-jBgB#92x%Zs=vAqn,pjz[M9*!T89I$RsXAFwXKq*f!bAY2>O)5u.Vw.([Z' );
define( 'SECURE_AUTH_KEY',  'UoVwNj&3ClfK|nI[;.`@9kI33T^r:sUHx+qF,^N /Npo{ATM4!4o~a[&H8*iv}zk' );
define( 'LOGGED_IN_KEY',    '+/lzobdLmg@U]yo5{Si e_3HHtm{X|fgF.6>!x@:a}HZWk3e)?KDNq7rYw`][*T~' );
define( 'NONCE_KEY',        'S,CB{o>ToD4/mgF:|Nk7g>3[*VLw}bV(mV]@/:3b*pspb|M#`Z.KBeRn1^6_eX^{' );
define( 'AUTH_SALT',        'G-3?`mM)Ma@]-y*zc`!q@<GFP^RKZY(yDf0u./|A>5S9*Poz/uZtwHi`/SfzALB$' );
define( 'SECURE_AUTH_SALT', 'PZGbs+LIiJ|I 1|,!KVYa(X[)SUgUP[JqnRKW uCd#N{|o!@ap594bVVB%&Zu$JT' );
define( 'LOGGED_IN_SALT',   '5QrBP0;(O`zPi?:|%a29xM<guz.NaV>46ZR@k2NU#RQD Nu&Fad7Tr#bt5znUm=`' );
define( 'NONCE_SALT',       '>kWF<U0t)Z5Gd|{.hri5%u1,Kws7x]WhO5Ytm=i0,<hpl#:u`ZDmpU8kJ+tO_4B{' );

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
