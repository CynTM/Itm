<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'itm_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tQQ^hfl{fNv~+8n#^>4.`5qty-N4.Q3 C!ZkS**+C~lvwO|Ta?gb%q.JrWMhE<hB' );
define( 'SECURE_AUTH_KEY',  '[-LH<1bVC025^7-d!FXVrist?t~UJqU4m^m# mOPe;P}c]xa:2zm(K^e:r#9@VP$' );
define( 'LOGGED_IN_KEY',    'ZUEl)Y5l,V0OC0.[n*OK?|n ;+xXV|Yuc3`2[B_vij0/9H:c}YhgD/Ispi]a+f><' );
define( 'NONCE_KEY',        'nDorAE&Kj8;pIL!d/.w;4[D}ejzE+N0mln~;?]PAWTN;Y2P(ss.pQ<aj.Z2D+}6U' );
define( 'AUTH_SALT',        '[=8kSFxR_4V)w7AqHCL9}bx%zq@#KI3>qGYV`Khuim1T-X891!AOJX3`8yHY3qhR' );
define( 'SECURE_AUTH_SALT', '.[k?%E+J$vIJ]Z}ZsYW6k41zSN2Ig ;3[nW8`B<cp$W.V)b.lyMP^n#~M)KZF[gO' );
define( 'LOGGED_IN_SALT',   '6}rFsl_s$~BocP%WlQA#h26Lvbb#d/4g+cmuN_&<mkmz*6G`_o3-5{wz@m71YJ@L' );
define( 'NONCE_SALT',       'cu:,2E3akNKf#^Cw-#cU?]>%=ZY&dLg_TxOJEz#$&)NmIW!e7(i|[L<HM|}z19j6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
