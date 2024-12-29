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
define( 'AUTH_KEY',          'edl]5 G[%Ur9JWioExVQfP((/xE_&qx``kbO,&>ngj3q5&!$B )&PT{l/J$4m{wG' );
define( 'SECURE_AUTH_KEY',   'e &z(cEFTjQ+0Q|=orHAs/beiL1#J4NiRjsjsmj2-Y&p7`*MDexMGNHb>l?<;<Xs' );
define( 'LOGGED_IN_KEY',     '=U,t2tInL#-^Z2Ys%NE=yS{Zt6%%>$#Z++^sAJ<uyepNuL=qCPo):S`#ip1wo^^;' );
define( 'NONCE_KEY',         'Mk<kzcw#J$}-@paaT3%@|M04-d _sb~5Ad$me0m*Z||RXns^x|a%.={d=LJM12>3' );
define( 'AUTH_SALT',         '`;MIOr2x`49bk4KiTL<])bQ!o}@(W/CE<IGsH|sJ3z0YqEQIMEGDNMo84^Zn@-js' );
define( 'SECURE_AUTH_SALT',  '*b<bVMjrTWKJ1JC!a4E_uUj9D_E2,%@pjjd$!soHJ!DQ2NV$^GB_5*n2$Y]on@Jx' );
define( 'LOGGED_IN_SALT',    'N!RJR%O0KMN]oU?.k9](*i4I;uOz[MmfiLH!X 5>7uLI|$G(w{r&u=_bb[amd>4V' );
define( 'NONCE_SALT',        '7;!K^0:yYoKu-F4&ru2+j[KfHfY:k<^?t&|uGOdpdl%F3^xmWMGQR9zB{kGJMsy ' );
define( 'WP_CACHE_KEY_SALT', 'M- #^R(z@TNamvuDbP`Sg{X|HN%_[2Q?bELML#vj8X05L%kHke*LEE3c%!3-TzF>' );


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
