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
define( 'AUTH_KEY',          '{yh =L,tG+mbp6T_vW.r|6m8I-/o41)wu~<85I/jhE.8S-tc:BC27uarfQ/z]<%V' );
define( 'SECURE_AUTH_KEY',   'H13V}{:,B&C;i Z%?mB*1JnJxhj$%0L@0I=j*~BuQ_9@=-}:?+LcAidU*if3B-2t' );
define( 'LOGGED_IN_KEY',     '3<{z+(?)PTv9gDN(qzAWD/[dA!}&+d.:S|afh_2@1j6 |?>5@9EN?ohgcWRbs{e6' );
define( 'NONCE_KEY',         'Qir*WH)+qYaQXd$~#BYY&~r>.Zo~Uyls`Ta$TumOR-#C7#IR*#Cv!udCD,+Zf+nd' );
define( 'AUTH_SALT',         'V{IiDNW*k3/|)?XPZF2p/bV!:^8@_f BKX/L TP6)+Jp`W#GY&[;dh=vM4sIHz0u' );
define( 'SECURE_AUTH_SALT',  '+Czp(9=Vot.!UNnB:||DpuTaA8lqGW$m2q9lYp5W9V4*r5V-Z=V.$~@K#=ACc2h2' );
define( 'LOGGED_IN_SALT',    'ey4h8Z`i-`~]UJC?O/_=iF0HMI{E]]oot]6n#nra$Z2ll;8TZBMb_]o-HxmI6 ~Q' );
define( 'NONCE_SALT',        '=xl@N{eQklqFYj=7&RAF<b@]-*:84A~j_@56^L:.f*fD4m?4h2gC.g>pOglc}[nu' );
define( 'WP_CACHE_KEY_SALT', 'inP*9!O+,hh9Fj1a9ddP!bgsk&ndts(A|qx5wr6%E/yQ*p?(47LyAH?p[AZ]ZU`1' );


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
