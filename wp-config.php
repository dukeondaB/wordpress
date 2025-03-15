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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_7+#UJGIXE>y>F{]O+!cFQ<|tb3YIuhch9;Y ku2nmL7wx~#3&B]Cb-t_&b|~ZBs' );
define( 'SECURE_AUTH_KEY',  'K jlQ4Q1a^!irP=wN<-;}M_9/8NY1qi]c a/=gLbMUw,rf4SMy.Ji`09t 1&V8(+' );
define( 'LOGGED_IN_KEY',    'jEq7{zFDu2Oxg4@*WRm0pmxX>v:(6RzfCR5&wSD0k-%/Yv8[Geg4$l1-D5^r<iD8' );
define( 'NONCE_KEY',        'X[#k3TG=bl^KrD;Nrr_pEz|-Up-.^X-S;bu_A^nQzE8JLn6>w`Dp4*$sRVVea:Sm' );
define( 'AUTH_SALT',        '|,6TXujnG;L+ (`&^H!<e<wI<76y&~P/qh.)Cuq35jeK4e~p$dXW&pyyinaoogJY' );
define( 'SECURE_AUTH_SALT', 'rU4*W%sPbMjGh%%ItzGzfrd%J)naoD7YsPBp;vsF}`c-[Vv 5,=FULc-W$&Hmjn#' );
define( 'LOGGED_IN_SALT',   '&3r^Vq<Fqilmr@uQC.W:Nr8TA!/:@$]_CaA(s#L!+VZ@=I[tsmwHceu1gxNG]%Z[' );
define( 'NONCE_SALT',       '(I9<mthAjf`v<gb$>0!FpZjTvTI9PVlvCoH~GZL7y]~oI{d>/SvKz/1LT3H@JsGC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
