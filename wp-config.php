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
define( 'DB_NAME', 'wp_budidjajalms' );

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
define( 'AUTH_KEY',         '?:k*U_~;/+f:pp{RlL:<{rYlB2bSUrR&KAB`|ca:J,egeA(uG@,M[BiUDDX}-OYk' );
define( 'SECURE_AUTH_KEY',  'g>XOJS1K|;hyd$3Cfi$-{RW$FshaE_dLjW5[9Ta&^u$,W27!!r|-V.zT?fog7R5(' );
define( 'LOGGED_IN_KEY',    'MLIy{XZ`wBP #W2!LctF)<m|{/C|SB@1Ylf&2 b5l[0}F?Gz=OJO}D_YTf;r>hO ' );
define( 'NONCE_KEY',        ';<X[i0U0yaSIZ H_l$NjRi;8Eezu:e?v1W<3([ls`aBQUC #a&9%qBPiL{5GP+hD' );
define( 'AUTH_SALT',        '}x=ex_8m@[[<gaS:s@!cyHbq_Jd^7YPy[iw[BJ1LF, *9iq#OtjtcB(oP)98r$#S' );
define( 'SECURE_AUTH_SALT', 'c]S$~qvq$GUZ`Ee?ew/)R<-_`}YXp|gVKE=oaxC/l5+kdtn_Ez%`S!XB>AZ2b_5Y' );
define( 'LOGGED_IN_SALT',   'XH</q b5VkNb|Tv.i6)nKRZnK;Gft9P%X{eaA8EFvGp&Bg/TQtBdt6d?>b>~7B1~' );
define( 'NONCE_SALT',       '}}{<v-i**AhY1Bn?2PNDMP]xKfpPnnVKG]l)Y*ECtzNtuUv{];JCwug;{^GY%R#Q' );

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
