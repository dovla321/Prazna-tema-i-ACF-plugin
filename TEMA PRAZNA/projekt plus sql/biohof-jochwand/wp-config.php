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
define( 'DB_NAME', 'biohof-jochwand' );

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
define( 'AUTH_KEY',         'S.@x1i@|Sw-#u=$^hF p}i(`/u;att,ZHkG1aShRUUd[MXkUk,7K(*L_N*YLh!uu' );
define( 'SECURE_AUTH_KEY',  'tP6Qi#bbS,xLFbH-g[`wb,HYsG_ANJEsq>!O= K@V>819RrFLuTqj02;)-bHoAu;' );
define( 'LOGGED_IN_KEY',    'Zi.bOZ}j&}(9wlNX6:7W4Q_<%SZ$~A(-m)TN&|FgqHd~BL21kUp&Ft}|S_l$W`QA' );
define( 'NONCE_KEY',        'RmM3i_ydc:+SAO[;Q{Hk#!JGekvuhE;]k.o/K>b?0IhQp<SBKiaiua#DYDj/$(SQ' );
define( 'AUTH_SALT',        'Ri  J!~H$OOR!~=.S8c;&1Mp`GU.q5oLVc-Dk.PT:hKZxOz;(TZ&?^!K*hN=T*xH' );
define( 'SECURE_AUTH_SALT', 'ZwB~NPnZ~)V/CYG3~l8(;p:_)]r!QMqHCdN_4#p^wEx4(fpo&2w(2B7^P@_>s>Tt' );
define( 'LOGGED_IN_SALT',   '=OzEOclOm,.?gO>g3l>r+AQ_~>r7g|T~[p7j`#i]iL:W56HMLkO4FP8B04I1u{`z' );
define( 'NONCE_SALT',       '!ks{j<RbIH;Y5X]PSQhT_Oz6#<CRT3h6Y$IIHl}&}jdj=FS%+;!Rsfvk0|LhT5Zq' );

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
