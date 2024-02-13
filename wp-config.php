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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#Qi5$W0~f!eL{ci2sfC75l)E1EOc:L=C@sh6swKp]S^+W!`psRId@}wh%[^B=)_E' );
define( 'SECURE_AUTH_KEY',  'D`zuZSqFi&3|D}7t#4>b%J]X]d>7fB{4coTFl~:8`t4%jP)?}^Ma7-aPaNC!jouS' );
define( 'LOGGED_IN_KEY',    '&JRowQ$xs>y|G{sZMCA#L}QlRuq@+n?WkGIiE|ptu7U5^9~3%HA]0+l?KNQWZi.j' );
define( 'NONCE_KEY',        'agsX&VCL6h?= lM>5iq#=)&e/8ZGgrdhcUf)~1CGLpsUCQ.]e2!u*TM98F#A%@>`' );
define( 'AUTH_SALT',        '<X[aC$O~}ixN!J+T2(T>MlY0U+Dx6=]1J*cnM6_w+(Ik&|BY;Y_nmXmKn<ro[OzZ' );
define( 'SECURE_AUTH_SALT', 'S2P!?eIn r?pP6gcYY(wg}nBa{@}jo,~JCA&<ww6b|J$rWAW?m )d-O)#v|OAcV]' );
define( 'LOGGED_IN_SALT',   'a0(yfg}@fA|2Y;#>U7F*;lQze73nIH#ljXOo6jyTyGuMH~~h~SRR!&PvR3Z*{]yv' );
define( 'NONCE_SALT',       '@2(zkDX6|aDg]<,No|$(S)w0SnmjLe9@!49jYB&:6r&};Lp=~Z]}.[eS>!1<bI3U' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
