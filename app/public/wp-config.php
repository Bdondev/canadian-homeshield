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
define( 'AUTH_KEY',          '{#aYN|J9@d2Xs(Gy9wr>5ckAz)]tXxi.O? g=wF3@MJArH!sQV|G]OCk}tb`aO~A' );
define( 'SECURE_AUTH_KEY',   'ShM,>4cS#gnQyJw:tas#scVrthQ,5Juob(.$gpm.+([=6g2AN8pAv!(<%:ikO^9(' );
define( 'LOGGED_IN_KEY',     't2Wd-3n8v0bseeyR=rA6=l^1fdFJ?[F-Ix3 +z&Ni@T!i_*3,>r?cUs0qhgE+ ?)' );
define( 'NONCE_KEY',         ',3xg)D?rbFCn+?X-F6H:s]$2Pp^tgD)i]mICW_(#;mHn7Rw&,o6O,`Qi$Z-1sj/h' );
define( 'AUTH_SALT',         '-rk]F9g<:KPS[c2A*;>4KAaC?1AwzF4B53K`VqHPVGAkLvOy>7G.l+pGY%CG *j!' );
define( 'SECURE_AUTH_SALT',  'wk<u?45;:|!+MK`_ApZUdr =W5uI:?@QA1F314FfrKLRl:rlKd58.#oZs,cY7.Y(' );
define( 'LOGGED_IN_SALT',    '+K7*e^JiY%_Ir*@Un,LE-0q!2D2-yezC2{[T5=&X7;?U`Ycg 1!y`7zT$7|@o[ga' );
define( 'NONCE_SALT',        '5K.ZbL1810#wZ#rIx@b`B>A?kF}5O#G1#(D2llw&0JYXY_dO)A^g0sW~y#*#Eq@r' );
define( 'WP_CACHE_KEY_SALT', 'i^0%^@=?L!aI7?+$!A]E%EulRr,bQ{+nC3=168GVq38PbDVOxeG5Hhik67E1EF+8' );


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
