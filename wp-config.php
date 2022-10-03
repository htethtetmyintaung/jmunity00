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
define( 'DB_NAME', 'jmunity' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'AIGMyanmar2022' );
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5ZaUAB^tro._*%nmDXnKY@mFtoUw&H-btL!| A<n3R1Ug)xK@8<NJ,S;7k+vC}+R' );
define( 'SECURE_AUTH_KEY',  'V3[-n>wX]inx(tEcOo(1#$1#s]?cfPQ.d#pNY_6,=@7x3jYWflmND+#h&8+@*L@e' );
define( 'LOGGED_IN_KEY',    '2HG=wQSPjNLs=~S9Q425oTmjC0yxhayX9dg!E!V=t3qIf])n%?z|@W%apmS<IH)x' );
define( 'NONCE_KEY',        ' fZBeDu.[_=Lp;1}uYvHe}4LCM++/F?$MW,.<nSxC!GJLgu47`4STAINQZs<Oh0`' );
define( 'AUTH_SALT',        'Z*7,5NF]:Q,v/t}w*uI,0tP<lQ(X3$|(=aFPk-ck^j^_TotJZ-.%ysoc~UFNXxYY' );
define( 'SECURE_AUTH_SALT', 'e(EAqpNjt{*ll^Q&@?|?E:K,gIie&L1pr3] Y4VAsC$7[Z=0JP1?XWZ[43KY=Z^e' );
define( 'LOGGED_IN_SALT',   'L*zVF*@tbmZ{H*Wn<nO;[~Jf`=vFx+H,8L$ZtvhPHxq}(/Iq$a=#fr)Z(8II>x~K' );
define( 'NONCE_SALT',       'm>N:HBuxd.0?2;O/~@X4LqH`_a~1v&cHP7hzW5D^)E2h-zy9p=VeqdVSr1RR`w7m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mmaig_';

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
