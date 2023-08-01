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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'c!4.!;o1(sVeMg;#)LE,jb#_;0gluq(%%PNW4?TI.4s0)RT,kw`vKw&FWN.yg-x>' );
define( 'SECURE_AUTH_KEY',  '}8+QjxMB`,M=rw8J[Jop:s!5g~K.lZxK}g}6s+b^ER`E4%vUqb6pXMc^!K/;h3(E' );
define( 'LOGGED_IN_KEY',    '|9i:@BPu,Rz*xp?wj%q}>RXvB+gAr|h:OB}d#|q/MZ81u0?U!HR+ekZI?z~6TFQS' );
define( 'NONCE_KEY',        '|~*-+;1uqBfN~UTn|@.-?8H1<OZ}iJ0f1{j!d|]k/lwu] l/q#~,gv<_{}0e6*9T' );
define( 'AUTH_SALT',        '}Jz!DTK;?Q#lTxP$JHn^@ntt>}L68&+`v$/h5[zQE|o>@{uy<T[TlMPnU<jm!(gL' );
define( 'SECURE_AUTH_SALT', 'W%V$G[q~ar1$G?2)jA3`5*<zH!Mqg[ T}3Pg1wG{Z>|/tK7B89pjFLMw<3cDW,;j' );
define( 'LOGGED_IN_SALT',   '^(hJ7uWGa/noL[C*Bi$RJf`+N`<Q;.@wX:BVU}5/$jdzDf4mHeMSiJ[?x[X1PlmF' );
define( 'NONCE_SALT',       '7=d*~MbJVXQa>E#nCi9KCQKU#L*Ts<dC LZ%G)l~zs?$VjEKP;x-oTHR!r-e|Wh%' );

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
