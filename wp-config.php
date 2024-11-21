<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ganesha' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`9$@s?xU<ZRbpyV(#I9Rt}6lLSpZ7iruae|p{|[l*P%$J%o?dYxNv8nMr:71@$!c' );
define( 'SECURE_AUTH_KEY',  '?fL@2gCU>DhBqqc_+64&NSJR0nWLRJpi&]IS.!D{b`3s$oKhpX,LQ*oboD/!{F*E' );
define( 'LOGGED_IN_KEY',    't?{~1um-OtdAM @bZ;^Ve^+8W|/a2wKT+IQ`)V*.LHepu[754)[%A16q[C{)<#}x' );
define( 'NONCE_KEY',        '4rf>R:Gq{+mAbTqwo=^9QCy$Ry.IUS:>5xrJZGa;Wj.iXp8pWn4sYZ_9UE<!J*9-' );
define( 'AUTH_SALT',        'Q)Z^M4<6HnuTwNknaE]3i$3OXVEkHYs>G`w3hN*<Wfs2[,fk2=ur:{MCsM.Ck7cG' );
define( 'SECURE_AUTH_SALT', 'CX_A)UOt)E3&ncQ<:R9tv5x5Es~:7JJXz.=0d2o>R/ncWt8~Q t.Qs6rC{NADsxa' );
define( 'LOGGED_IN_SALT',   '~@bQl!#`2k164d)x(!rB|x{&[Mm+zpez)<{W[01E{O#hMD2-1^CkV Zn1~c425>Y' );
define( 'NONCE_SALT',       '<:fSCkvr%FJ4>x=JEl9FZiYfxGZ!sS)>h8&=@o_Wpq{YA+aKt`n|D}Tq! U5wjsY' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
