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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         '7fPRN(5SDunGG$*k)sDXmk!R*a7[nZ%-n-n_.M)y4`<_-N)N_-Vmb*0=@nit _eL' );
define( 'SECURE_AUTH_KEY',  'OW_0z>H,f_*[Q$<QoqY}N}<6^(t!Eo$V%<;;P(Fn^)G9/2i**mFw@;YnKOZ.`GW8' );
define( 'LOGGED_IN_KEY',    'r[p?e}Q<dznO`6iDp 5]p-IRuH}8m~va]A&0Q{R*OtE}@Z7)qk&fn5}m)6@uc{|i' );
define( 'NONCE_KEY',        'y<jl@vUrP)D8k%diK&aRNCP]r1L-=:=9o!]pr=bz&hM[F.5XoZOR-Ref*&5.dieZ' );
define( 'AUTH_SALT',        ']`~`7jxi&,G06PBx/~^oq6o^1o)gt$Ew*3G8&sv)qP-k7;jY!]do34CoMvVmwp[3' );
define( 'SECURE_AUTH_SALT', 'p<e~@z^wYJj?<wez@cHkw|2{Hzovt=}<< H6I)sB(8)o7W%1HS]u3`Mnr$a.#[W{' );
define( 'LOGGED_IN_SALT',   'wfj>hOO/Q7sR=}0}O7M_=y1EF>Cke!</dnXACc[V!dcPEc<*a}`,5@/,eF[e_#$6' );
define( 'NONCE_SALT',       'YSlJj3#zyjMKflr:DpB`f9&UPMAT/a{om G;q5@~05Ted^qiX1 9XHLGcVB6J0.3' );

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
