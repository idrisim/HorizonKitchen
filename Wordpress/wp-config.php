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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HorizonKitchen_db' );

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
define( 'AUTH_KEY',         'bJ3%@K*d92 =hz8Nr}V vwS[}n[:AfZNE4>zAk-DPc1@vy #t+_Z[C[~:nk`!c>m' );
define( 'SECURE_AUTH_KEY',  'PB9:?TL/_/mB&$G]@6)}1mOYZsSUS[;I.+}k)-,9AVUbv;/Y*W4L)}[^w9CxvN=1' );
define( 'LOGGED_IN_KEY',    'kE&2NX= b$Aelwb;m|IF/Kjj|HI0-c>,5hL}s`$3[TM7zz2rfo%uRRpvxic]K+{6' );
define( 'NONCE_KEY',        'zr$d]1f0&CA!?ImS:A(My]!QQ)aKP[3pM~/T10GyyuU]!Yf#81S6<isFJJN~8#Sy' );
define( 'AUTH_SALT',        '8~=2W?mfhPB)^k(TbW7F%oV4IkD=kK}N0Ju:*U~c6=iG@;Tg#{O<A{R13YA9i!X8' );
define( 'SECURE_AUTH_SALT', '4166B6@9F}(n_lBUGVqp_;Npe4EN!px ?`rB$Q3eHeiFJP;+cJj_UDxetzjN]8gd' );
define( 'LOGGED_IN_SALT',   'soVHK^&98sw<]kA]]+Nk<@)ozvKkh7gARI,s<!>C^PpmyH>Jk8H!_zn:QzeE`pVv' );
define( 'NONCE_SALT',       'BN.hzkm7EMRJ}xRdP2aU*vm%Sx+k5~`9Pn{>W&x|_>B8kpMtR^6VNcw}HB})7U,r' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
