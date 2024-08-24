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
define( 'DB_NAME', 'noor' );

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
define( 'AUTH_KEY',         '>JhU[|tQp1m?9.vYGXD= &=%n7k|ctX])[G2RLdM@$gRK%*sx0KedtrAEf98u&2p' );
define( 'SECURE_AUTH_KEY',  'r<&lCJw<wV=H!3-}3><-?` `hbc71k#0&soCmlI6MgPDFPY;<6K}ju3UJJBUP)+<' );
define( 'LOGGED_IN_KEY',    '|2K.*$K^7.ODxczp,^A ~Ek_gnj<^ /B3pq!y{UF(N?Wy+niW}dae)}V4Tt`(@2`' );
define( 'NONCE_KEY',        '?S,@%Trj/;Cd82NZ5<4{63gC|LL+a:/!RsS{t`0MeG^)h_L]VHTFP_Z2^ 5:D3Hn' );
define( 'AUTH_SALT',        'e~%J<``wQh>DnX|{6cQw(1o~js34]{:`pQXvX_iNO*4<f{9/3]pW4Z]Fq^.mlM*)' );
define( 'SECURE_AUTH_SALT', 'cTCEZ=pmH>K*DH(_UR6/r3]fu)4.BHBs e>NKn,>f=zl20faGHp6P]-^f86m7&.%' );
define( 'LOGGED_IN_SALT',   'k#`Zal-3gYFsXUF_liZa%6<GNC7,f)re*<7IEu`Qv{V!PXTYm&RX>)GhK>l*+%J{' );
define( 'NONCE_SALT',       '>|Gv(I~{ek9$oK2!LhJm/txvCh7L3jS!T?^kN&p-xC-VjR%EE*4f=p3pV*N8C`:k' );

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
