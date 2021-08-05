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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
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
define( 'AUTH_KEY',         'c]qUDmOLi<Wck~jfu7<4WGAqvaOdj`Q4&;Txh7&Yr:0a5dVTgnPgN,?}x=w46{pu' );
define( 'SECURE_AUTH_KEY',  '4eZ<Im=NR(s`xA~L?Y9M5-:=u2G:NNF6pgco8BJkO-wd4.{oP_~Y5I6~o&gS8(mu' );
define( 'LOGGED_IN_KEY',    '_n6/K<s{&qOnJ)xG!H~iqLJwAH(n[LL|MoC[E]op0gi,V-?|Idx(}#*=mee&LidP' );
define( 'NONCE_KEY',        ':-V6os BLqcG<-(w3/DzvB*-6Jjh1HqgD^22nE7i~TYjTNk:w=K%[cs/GMY>jtt+' );
define( 'AUTH_SALT',        '7J{2tkaegQ&~uHoTu%:r0o;3,`RS`DI+X`QC}PN;*/i0ZyEIidRfvV@I3,q#$icd' );
define( 'SECURE_AUTH_SALT', '6hiyxjz:h7#MU;]%YL}KG6dZX;t0i{iGz8b|EF#+zC4%i,g.aKPYJ&3.lsQdmQrN' );
define( 'LOGGED_IN_SALT',   '#We:?Q9-T>(###@yM%kv-f`E~Lr/[6 O&z||G$Znh^_{1wUTYQ/R}O8nGPkk<7Zs' );
define( 'NONCE_SALT',       'vb<HC-*E<OOepb&P#&^35q)UF,i09~P2|<!iw2{%09vkUbc:-RRLb3E19sWgOT_Q' );

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
