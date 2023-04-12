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
define( 'DB_NAME', 'dbproyecto' );

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
define( 'AUTH_KEY',         'KGYO(@ZPJ*lgTIrfmg+HG*s_/tmX?G)@o2A:r1o7c;?a_|UbBf%d4<dVdy]4!$i1' );
define( 'SECURE_AUTH_KEY',  '7_fC|3ot}ww#W,3c!@>LqI[AA w#L9;I]POut,x)QZ(wzTqO9,%Bo`;M~?Dqs]+^' );
define( 'LOGGED_IN_KEY',    '.[<8RI[O#5)x2D:#7(Y/J=j**/g;vZE{&YkJ1;?O*[^r4f|[cN-kbouA1KlDjBY$' );
define( 'NONCE_KEY',        'KC]h=<`sbW6Oz;HoWN?~BN-W qG<@$K+TM_3gt9rT.X?!g`jL|dilA-8rKp8+vv;' );
define( 'AUTH_SALT',        '6 on,L89vcU<.(e/IK#<MCirKVYp7I%a1!Q{D}&=)T`iV)gDznTCoT|I$Zbf`N-O' );
define( 'SECURE_AUTH_SALT', 'qFtdaR|(bH1 (!GzBR^`K(Exnd;u16HQ6wjbpV&P2gkA?r<`Q3h4?9TNL3 3Gf6c' );
define( 'LOGGED_IN_SALT',   'va`0Y<mX%OA*2FR9<W{96PSJRJtNkV<#=Y-v WWdm}]lU!4h?aQ!qJZMQvl#*M#I' );
define( 'NONCE_SALT',       '{h>Kb@*$}fB`CfE}9b eiEI;gjf=AUG-;XCK.*OZ2i+P;`&IG/B85[|9;T+@rv-d' );

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
