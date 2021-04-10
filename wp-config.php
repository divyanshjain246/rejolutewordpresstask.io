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
define( 'DB_NAME', 'jack' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'bU,tpw=*M2$v4GUJ7HgSA_=--9uQepW4a9yH73e-GAoQZ.=*I7:7R2)PozqJ-XpZ' );
define( 'SECURE_AUTH_KEY',  'HSZ2[rIU[hN>rCsY_dWcW~Qhqf}Vf|||S[XS,p~Qo4HSbPudA.oq+ZqQY?waP:*#' );
define( 'LOGGED_IN_KEY',    'w/$G%pF|uW86b}R8*x,:ItcZ[H;&V*u=ChYe:V~D(CAMNQD!L-Ii]f-U;0_*%_oX' );
define( 'NONCE_KEY',        'UX&2m}B+*Z7pZHtf?):zl }t+X:;SYBG4|E~^ST2%6_?6:@j{a^3!XVm;*[XceN*' );
define( 'AUTH_SALT',        'L0E#=|Z)JeLnnn3._QqvZmcZ;=o_ik0l|v&QTH2+y!qS?+DgX9lRL~`oEaL;r|H1' );
define( 'SECURE_AUTH_SALT', 'FR[T${$i2 vRh=|wOAjEXk]Bg0s2gt;E:+!G~QGH_;XFv&>Z=g`c]=/vT?8p_-?%' );
define( 'LOGGED_IN_SALT',   '|8z3YA*w5-LqC]bPu9%L(<f9.`@(fii|n_/_9{91#T*9]Hca<-*B8q{!|acNK?Gc' );
define( 'NONCE_SALT',       'TMk_aPWAtN,ei{OBLjhR1t>NQ7]l8Q[OS>9t6MdCsZ [uTxk{B^|}Zn-Q0F<:l%q' );

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
