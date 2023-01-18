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
define( 'DB_NAME', 'demo1x' );

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
define( 'AUTH_KEY',         'uoIAA/E3ijC(PxP@|qT K7n&nN=Z5qT{@j~R{G}VOhJiGh;i3/X)wwS0$_I<fptK' );
define( 'SECURE_AUTH_KEY',  '/SQ{eLa.V#+?ChhfL`d_=eQt$3S!kpvVIMgG_}2|m=_3L.Bp{NI$@S4)XB(3[ame' );
define( 'LOGGED_IN_KEY',    'FheoPNpxwj5)3ZwHAxd,nj&$;4f]4.4%R}~:$43%D3,PgTToJmB2,(G{}PrNB%Ia' );
define( 'NONCE_KEY',        'M~6vvkk+6M7cxx0s{~_.9RKPdBXW`)SzYF@k> d<%E|?n)fL5.z;,Q5,c5lqBzP:' );
define( 'AUTH_SALT',        ',p4u>az-q/gUNdr,agclRtdcOLFIUy_l7tlkTSmH1pPN;]sisTTQMS1JstyD}DTB' );
define( 'SECURE_AUTH_SALT', 'K<Q75f(JiG_5%eb9H76NI.^N9mLlFvK`zF.IB:^<qK)PjU*+}<GH2>AIgqL43PE/' );
define( 'LOGGED_IN_SALT',   'wefE<T|:v|t[FI8u><n)g^ueR)7Y0:ch%ZcB/78Nu>q`<Es0T4=`6spTr|=pkPt&' );
define( 'NONCE_SALT',       '@{ ryj~^gZeG^kcI+vxp^Ao=Oec8iMgXxqx;Cj-QL{7&EhpRQ%3--@[iv^t,& Yn' );

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
