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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_practice2' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         '`_;NuCc=5:uOQ4A<7&r:eia(PcT=R3T/(Z}g@d!:JF{ BP)*>8NKiT<Kg?*uF#kz' );
define( 'SECURE_AUTH_KEY',  'vEKLj2Ds1V>NQ-kdYA?hpwx&mi$K;pzPiyE=m/O1[_Ap02 0<M5v`y~e3-sdO6G[' );
define( 'LOGGED_IN_KEY',    '!HM`&(?MrycT|3wb;`.^E*tPknvZ$VM5 -#[n6?VhO|.E{2RzjHT43>w#;KV$ 5l' );
define( 'NONCE_KEY',        '[b%Z8+%Wi;Y@,lp?ceWDDIdV` n,5~cX>PXhT&pktUOA/tFwjQ8pF!47r&bdo:i ' );
define( 'AUTH_SALT',        '$,oc|Q&`X8a].,+xi=VM6y fDeplOZ7:3[.M7K`]9%t$iF5mf+}w[f0E-<OVp;0Q' );
define( 'SECURE_AUTH_SALT', 'Na-,}xoS*,j(m8j<@wS1}VZ&tX{.YfoNKYJ|*z*%?tLKgQJghUi<,j)E!j^,qh]h' );
define( 'LOGGED_IN_SALT',   'fKYJf@+]wTn-7<*+zKp@gh>1Ic/QL@b~i*i^$b[V`)tdEa`$WK$T+&U}OGFQEKYX' );
define( 'NONCE_SALT',       'QFND3E V2:h)^pFb]/Weru][PI2QFoT&cChIZXBB4cs(^7`1< .XfhO%mkto@i>K' );

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
