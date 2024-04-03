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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dsw22a_git' );

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
define( 'AUTH_KEY',         '+Y]~b>p|v)9C3{eI-z[%;D4[J&Efq^+Ibu7_e7R))Cex^or6FiF2n :9x~yL?WXc' );
define( 'SECURE_AUTH_KEY',  'G+z!;!Dj2Z@$jWN/am7?.*Hl.((cenS`&eEJfPdBUR_D+WUJ_x!1l`6B#O}BIdKk' );
define( 'LOGGED_IN_KEY',    '0RN/rN4p^kW|6|}_^8-7!s@$_xOpc6#LU?0.oN{EpPlT};.JqQ?@M@Ut$~c.^)1X' );
define( 'NONCE_KEY',        '#%$D.{-e0~Xm!^x^:Gv`HHaJ%mm9vKl&5*!bkKYvud-Ubp)o<ME^ xEb_jp0bKYH' );
define( 'AUTH_SALT',        '@S~BB6PZWP+I<jR;wYouFC=v}hL.+YDM:kcOU6^-+H%$}J&.U[}^/mO09WpFx)N8' );
define( 'SECURE_AUTH_SALT', 'cs]S/soI8#OY7) L+PBi& KkY)q,/hNU`mwCT*8C e0kBKcD4dVS>TK?xA5LyNf~' );
define( 'LOGGED_IN_SALT',   '[/BbAQ`G>>2gC[C2^+p&#zzifT$GzAP==3vfI#S>1]kPt`fA,uG$X_9!QcYIkQDv' );
define( 'NONCE_SALT',       'OTEh&cD0ruC&xACU7%|EW,~~S>7|$~2E,J$Hk2q*lQ*DI30{YbCZ8Ql,Q]ZBnSD]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
