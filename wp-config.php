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
define( 'DB_NAME', 'angela_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '7Gk#b4&KLb-iOR`v~Zh:-b}lV5kJD<):!vAO,L+0kYU-{F:WD|Bk67s4u;OBsP*{' );
define( 'SECURE_AUTH_KEY',  'Zk7Q&R{V|Z&Q2/zQ+kBHOXTwN5y`I7zk/h9uO[xj]{0aylb&8;(03r?RUg1E]K(Q' );
define( 'LOGGED_IN_KEY',    '(,Tfk7^Hg0F[i3yXzshFK#UA$7K#cP(OfCat-xtn+_siz!wxLAV;H;iUu8f3^D<p' );
define( 'NONCE_KEY',        '6#I`]o9Ae`GsvyYz,MEY*`tk P=7[(mj&^;Gg`UF=A&d#RI[h^#)J4)~57+Y!_WH' );
define( 'AUTH_SALT',        'XREIhpl5lC%gD&AEBFG1;E6zPIt93Q:m@6`fDb-!t7`_alzG.`NomvpEZuh6&,8+' );
define( 'SECURE_AUTH_SALT', 'n^f5G$:nox#U.$ Y<b{YA]i-/ O-7A;}7I5Ff,A6CKOvN{mNz?-ux(]<8%ntvl#u' );
define( 'LOGGED_IN_SALT',   '71`LmowV=*uz6&-I8%P^.0i?0G@qTaMDVwcRK}f Qn Z?u[a>402QiH(Irn@&uv]' );
define( 'NONCE_SALT',       'y?EjgT2!RN+|XF#DKkEK7[3%[+y3@:rGZ3Q?#x>djE9Za@UgY8)<u++Ax:sidMC7' );

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
