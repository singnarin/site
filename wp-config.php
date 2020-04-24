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
define( 'DB_NAME', 'sextoyfinver' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tootuu7413' );

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
define( 'AUTH_KEY',         '5z7NE$yUTq{hbGQY-O<Rz0!%TH#3@fY]XB:eXJ}[{47]hPz .Tb!P5/c@7$jZ>gd' );
define( 'SECURE_AUTH_KEY',  'wM8kbOmaQYZs&/w$HV<+w&cAFN5gebbQ+TvV``-#3 3Fi0M8~jjAyCQWb8vapyg(' );
define( 'LOGGED_IN_KEY',    '*vG4^Ope3^fXkO~c6RouQ0![b>]KOc<KT[m ={npWsiOlLyvpbV.us0CPF!n_7Gz' );
define( 'NONCE_KEY',        ';4?#][-  TWGBjdM%F+=]P,_E~MOdRy.:hgb|~!9D13RLu@l`[qH7/p)$4Z9ohj_' );
define( 'AUTH_SALT',        'W1#4SGW%r8nHI3(;m*UeC$VyHeOby_U{V</G)BGAZ(h{uj&*ug+_RIEg2<cd;fD+' );
define( 'SECURE_AUTH_SALT', '^hK>f@8v!IT!QGI7[rlnmWa#Da0EB3Ks%M>vytTh?KPxuXeDe]Hz%4@WZjm3od^o' );
define( 'LOGGED_IN_SALT',   '&yKD||c5?vQ#Fq&Thk&uurA|8lUY0lMH^Alvr.xv+=]:SuSn(P*E-.}eR~K&hn_Y' );
define( 'NONCE_SALT',       'O`;S#c5P[+J%Qh9VfbiP~E&jGhJdEg]z=hu@u*Tv/?&[^v#?N6dDp vdP;!eniIE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
