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

define('FS_METHOD', 'direct');
// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'agricorso' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
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
define( 'AUTH_KEY',         '.l4;}GaTvqMIeMLqgn8_kd*i407Pg= Y?]mOHibQ>|_tz&+|#ccz5`.lcMfT;NG^' );
define( 'SECURE_AUTH_KEY',  '-X])!h duyePI_cKgZSOJd]l;euy~d/WT4`.NMGsQ~)&]OSEP==r6/#fU12!m4Kd' );
define( 'LOGGED_IN_KEY',    '9`eX9/D1pn.<u#/hlJGAAqeG|!W07+Z`]~ty&mDsnm0jA)wz]n8|C (=OS(+X@/S' );
define( 'NONCE_KEY',        'BGAhXTEEnR1azN4oR[y0.}{OFGuvjd_B<=Ym#U$<E@?oMp;kKYM0{nm9>NN_g[9<' );
define( 'AUTH_SALT',        '`S={b0mbE,-<e{O %jhYjU{o|S%8wOHU_m7Vt *[qEST3RNUqJ!<@jI9F$BfsSiw' );
define( 'SECURE_AUTH_SALT', 'AI{]8qV*#:MMDcD_=QvM_VaF&/:Ri~P+)Jc1@{/3?9sjL[O)rT2*N9ZaZv,ImU0I' );
define( 'LOGGED_IN_SALT',   'x^mU|X=sGuK&#1cBZ#V[OK.[uG(j(8$mt%]cer(0SJB:Ras}tr0?o%&w^syaO>xC' );
define( 'NONCE_SALT',       'o#}z4+PPP7Bq9|%1e.wAyn~wO_urc=TKV&6W16-PAcju4TmevT>De|>N4k$3<2wP' );

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
