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
define( 'AUTH_KEY',          'RNf&zTJ[OXyXkYYTH{3k*De#|Ei9{@bPhO8fN0_yEafO1<TDN^b&B_{hK6QVooS!' );
define( 'SECURE_AUTH_KEY',   '](Q859uKZBbf/gQ^Iv_i6MZctMN%3(1.pX)u79itNAXykNV?)hQCWz1-cq=$.@C]' );
define( 'LOGGED_IN_KEY',     '6&IS#_=z@Hit<*q!NsY6%=`o/?w]>cD4*oRk^o0<YXK=_ibM{No}CLTi`Tr<QL1z' );
define( 'NONCE_KEY',         'WG~^~s7K!p[9dAEgzkN/#DL/1McSvH(Q#DN2<GaPdmygj5)x>b)Ba!&rt.Z6H<`j' );
define( 'AUTH_SALT',         'POmTmgUn|{N@U;;.T=|)-T}8Qd89Y)[:PVMMjmq4X$2i6wC79f8mF6Q*8z2;~Giv' );
define( 'SECURE_AUTH_SALT',  '9zgZGhY?=Wp*;%}p#P[U!EuF[WoOJFn$^z,8%^tYh,j5M92[eq?YV%JWH=t]>.w8' );
define( 'LOGGED_IN_SALT',    'e9$q;mo*<j-:mr8M-XCAbWqn}BFRBd6yzi_p}k!9KzIct4 1~p<,cjSXwvuveMV!' );
define( 'NONCE_SALT',        'bgx$+i1F?OPC.<$&6z?5n9bc,oVH<h0DC03Nu~4qX`F5L3D-rY]O`v86hjLA%dl9' );
define( 'WP_CACHE_KEY_SALT', ')?xG4<6Q>c[9mg|G{~WS5Mm3:iM_wn3f*xBT]zd?r0&#qJ0*K&{0^5*O(lU3ZPtd' );


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
