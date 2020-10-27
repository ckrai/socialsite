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
define( 'DB_NAME', 'social_site' );

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
define( 'AUTH_KEY',         'DtNA1jSs [9UqedbgbteEHlTGRXFK&|kLPFrCN35XF~]5[jS)v@j|YcCAFFcyvhQ' );
define( 'SECURE_AUTH_KEY',  '-serlqWrp_kL9r&&fF!/~+;loAOWHP!y_UcPmtmNa0o[{{V=vGMA`f%b)=jv,2xr' );
define( 'LOGGED_IN_KEY',    'mq|$4`1~0j$H@ Lb`~?Y%9C$.{pEHv8P/udI8sWrlz|#?z7|s f[DhP38!JvDIQ8' );
define( 'NONCE_KEY',        ':^=/^@$Ig3Lf>_2y8Q5&DaO-T.=!h:Gy]!j$#t0]6;nGJv6^**_F.nF.`.*/AG64' );
define( 'AUTH_SALT',        '8xT5!,B~MvRK^/V_:IvNty*dDFUAYu|8_gW2l^E?XbP}MFg7FmNWsai[YQf41Q5R' );
define( 'SECURE_AUTH_SALT', 'vur,},0Y4i8%-Q:D(/Iu$a`63)pj:H!o7H({[;c]J<V1&tZ.+JZ>_~2MH##E9Z3%' );
define( 'LOGGED_IN_SALT',   'EgfZN QdT!}WV/zXb7!rz!(Z0* ,7DYqxjFDz^7dw(CR_]#W9&!TfP|827jht z%' );
define( 'NONCE_SALT',       '|<vAwZB0:Vjhwq*G-mVI=THXhBHlDz->AW2@0~s6DVh.kO&Oc(FSFfLz2`Jx=_Rt' );

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
