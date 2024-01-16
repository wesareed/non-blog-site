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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ';<FSuTwRc*H`iFXvt8U!wnn>Eg-_C(LpoYGa,TnHm?Y7V_GjT)pcc<:;G[zR9$,+' );
define( 'SECURE_AUTH_KEY',   'e6A^-qaL;uwd0,hp$(|anREiy*acs@$**>[OKifs]Rx1Q1FhEXjv`ciNIPz_9NSF' );
define( 'LOGGED_IN_KEY',     '!~-yNnGz5a:*g$l6j*,W`` PrT|S+i@<B+8o2Z7#>8d_6W9>{Z|u>i{`Ue:^wcDx' );
define( 'NONCE_KEY',         '#3B%FaJyM<whnynsr+@Q&%:{:;Nnr8*Q8-OlHn I;kYYGQy_A]JWkb+JnOPghIK2' );
define( 'AUTH_SALT',         'B8FZ1pXhK](1n8dG%E1#y5dSpEiVWE:*HmC!WSh.bYY^zhf3&j<{t$k>.ue1iGG1' );
define( 'SECURE_AUTH_SALT',  'TFNaIQR$~MyA&%dEMwn}}9PnTmh9cw|G)bh0<U]M$!1tw3+]QDW9QkBn0(ZIOso[' );
define( 'LOGGED_IN_SALT',    'hANV.H%-I>1_$Qosz1Mx1UTo7#ND/nQ.[T@h$pn9-YIjTRd/Km&g-oEzM$UIz-N[' );
define( 'NONCE_SALT',        ' R^2j+0R|O%_0}~a.1%0-$A&!Zg#e1:NAiJmDs(MtI~ P+9k#R0@y[d+)p/y]{B%' );
define( 'WP_CACHE_KEY_SALT', 'u>Y:vAds7 iLQ.$_>G+Kel&~clH6ZxS,Wib59vv4XTahRP5.+Gfn,sTL:37%>Ph~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
