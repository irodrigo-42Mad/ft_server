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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'c)OgufPOxch4sJeKo<7-;s~Hu?mD#%fmBi@XSN>lgJ96Y.#striidKymg#) |z~z');
define('SECURE_AUTH_KEY',  '=Y:=I;gkT|Fg*=;y!?pq~N{(h@&iXv)!@Rkv0Y-]8A~gptCJ$Q:+ylD60zGZ,X$b');
define('LOGGED_IN_KEY',    'Hs_{wUid75Z4`Lw@,90_L8TN]PoXap~93#Ju!,dnrj1`+rfeIvhZ[A8y1DH[Xx,q');
define('NONCE_KEY',        'N#M1_}1/-4 xWD-ClH-s/rX$z:B6=lj@-x)?9:7=ZvS-DRBu* fuzu5|><yH-[>+');
define('AUTH_SALT',        '?(~-%Z/VQ:LOT:ab-I<NUM+5>{<6r`>5O]/;G+4vkD#PvWn*$gG;Xgi9^a>FV9-H');
define('SECURE_AUTH_SALT', 'oO$.#,+M97-!(qU~Ft#;HP4+5,q}ie  )cl/s:6qMk2QRO2:9GoV<D0=Q#{fFONa');
define('LOGGED_IN_SALT',   '|%v8fH^Y67f~z`gA>9U-Xh@[.G2i(_|G]|?1pnXMa[DU2))x/Ex-yO-A.sNAX}ah');
define('NONCE_SALT',       'wAA4h_7M8ADVz]W;:&}gIJGWQXS2MK_*Tcm`]a1wLZmCX>8|NZ]fMlv@1^?a<=MP');

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
