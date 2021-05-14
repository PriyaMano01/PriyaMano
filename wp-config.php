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
define( 'DB_NAME', 'priyamano' );

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
define( 'AUTH_KEY',         '?W%DuZ6@0gs,r=ZjZ-Zs]V&UcJAW}b,H:DMr0Z&MTqp$ 5j]kO5[hE=vNu&O|~~x' );
define( 'SECURE_AUTH_KEY',  'B0v:BQJS@l%?f=cwpQ^DVG~}ue->c~v,NX1t)P?wIdZ|M`w4 C|Y?;dj|CLktIN9' );
define( 'LOGGED_IN_KEY',    'Fmg!&n@&}+2/_;lbl!g#[8@m3XDEOD%b?C|/(99;(9 ppH]pH@6x$UKfCB^!O}pL' );
define( 'NONCE_KEY',        '}rM8IR<*{#R[wF)]&5Ka(vUZ:Du.Qw/8LCVT%,k_%3m=ky>9geQrq9Nm[yt=zG=I' );
define( 'AUTH_SALT',        '8#Gdk+;6`h-p~)p4X).Y[BMHzi*pwzqx]cldu44&v[M4MQQgINWrgzajW!Q|enA=' );
define( 'SECURE_AUTH_SALT', '5QS/48]#l[Lfj>#yU1id7Dfp*s/NCLlfa)M.v2e_yG`[XmN3x`g2IY1mJyQs7F&+' );
define( 'LOGGED_IN_SALT',   'KD3S2[n3b%3&s+~m<PEGxBW&t3G<nZ?qTRC:c;2cmDcQ`O0xCKBMJlA?rs5_Vy!m' );
define( 'NONCE_SALT',       '*T*gD!AG:h*Q+=eFb7E#^CuUj49_z]0 `t Zq)ZnU&7{nz8>923_],dd6P{JJ:s$' );

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
