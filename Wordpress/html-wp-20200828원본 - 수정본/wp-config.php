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
define( 'DB_NAME', 'lllll7' );

/** MySQL database username */
define( 'DB_USER', 'lllll7' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tprtlsu77^^' );

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
define( 'AUTH_KEY',         '1{AmD@{ nRBG0namDwf}]kq46Jh-w;H`N]~H_JCG9@cRogE}dum!>3J$~FR)TC},' );
define( 'SECURE_AUTH_KEY',  'raz&M&<-c6)e3`zrl%.]`H{+`FUuel]LhT$,#B-|tqUgM)Z$(kc|9P} 7<MA3yN<' );
define( 'LOGGED_IN_KEY',    'selbVwoj$!f2x[+L%jxLSy6*PBB^4[ch%,d@b[&uTXR~rPbY3-?h/`tGemUNo%eO' );
define( 'NONCE_KEY',        'wnsL,:/>2HCC)QO8Y7.MMg[Uz_ToFB(d>fh*7Bpqw<axw)-V|Ry+k4l8Czp` *&p' );
define( 'AUTH_SALT',        'vlw6plr{XwtV{ifs,E*;O#jql!Iq#UOy+Hyx-{zb>yEmcGyfX@6<Z#!`d8mKvCRW' );
define( 'SECURE_AUTH_SALT', '!=p5`7ctX<&FEBvH $gY)Y/Ee<U&NHT&/0{Y@@~: dto`]^xc-,c=&.FHSAVZL&(' );
define( 'LOGGED_IN_SALT',   'wj=B_@U{:lr~Y-]q/LhktEoJ*e;yNsNkv:LK@9j(_cj:M4v)rO@d}=w/o:tAQGTz' );
define( 'NONCE_SALT',       's9Io.wZkUunv=7(KY [?cuEwh>jp|iQek5i>js1DG%j}r2AAEwle2Ii%%Bxlx[)0' );

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
