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
define( 'DB_NAME', 'newtheme' );

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
define( 'AUTH_KEY',         'aPl-_i5^1 6~h,KK`I=nj2/vL=3K@huekG,vB5zvl}B&v$py4O4h1/IUcQ|71&*s' );
define( 'SECURE_AUTH_KEY',  '/V3A{hWI2.#MM<h/K4Fkx63T?V=hY&_4n6QPH&EJ5i&yybwO{aB`Dl3YcZJ8*t/`' );
define( 'LOGGED_IN_KEY',    'PlsUz[t[Q. =R#dUKQI1)DV]k?))$hYG?EXl3~3-x:<ehFV}qNp$zf9agglG@zn+' );
define( 'NONCE_KEY',        'a]zy&-I6Yak8FhNn.?&VIYKRo{x9akF(Wl>3:}bT=9ZmhT.h?}y8Q6x%Sm,TUM-m' );
define( 'AUTH_SALT',        'Q&OeZiLne|8%BWKm#UD[bJ8cN7-`sn+F*r4YifV+)Zjwx8c%[Iv.eE(nq[N`o~OG' );
define( 'SECURE_AUTH_SALT', 'ko#B/Is4l6j!?1J%:?ZZ7.J4;v~rS0.q7`MFvy)KT/j[%rge!Ns<<SL1@`h;6&dd' );
define( 'LOGGED_IN_SALT',   'e.0DP*&e>giaK8S5U,/Y8KNgr$G=Xa $x0Tj`E_oEXVKxt]D[^OR,~L(tvd+M!6x' );
define( 'NONCE_SALT',       '+6%-&l=wW3 ^&v kO<*qM,%B7DB*^0`z!01S8Q3S3-7zrV}MD4qIr|hsup|C2^Fe' );

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
