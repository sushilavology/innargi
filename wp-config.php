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
define( 'DB_NAME', 'innargi' );

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
define( 'AUTH_KEY',         '?>2nEpD~<<dKOs@Z=&r&7B+y`mGDaxda3b1`T^p?}|tm0sX0riL[s,h>o-XgXjpg' );
define( 'SECURE_AUTH_KEY',  '_ac-@*;Q>Nr4mV~*[FM+.4OfWi7I)=s,gcx|cak9Hu3.S1C3)*s,cBbO2KXQghED' );
define( 'LOGGED_IN_KEY',    ';J<SHGP.`HS7Qv7{iQ&Jm@;0Hw]B:3|qVNB-AH>h|/0PS**<#&-9Kc}E*/0E9#}v' );
define( 'NONCE_KEY',        '&}Qv5[SfS{;Bt-_1w La$i:xzQ(])-^9mH/qZ_gf3o}C7:laxno9dA}yz/^ULVa%' );
define( 'AUTH_SALT',        'B+bPh/e)SHLCTrl(7wI7azIl:;[:+)R%KGktG%lJ77x%fo!6iD!-dDqNmrHbaTYQ' );
define( 'SECURE_AUTH_SALT', 'NU13@MPVIjH_9YDUVJ!-^R1R#{9Em1_)v:=o@TjIe^)!2jmBR^3 iN;blIwOca!I' );
define( 'LOGGED_IN_SALT',   'dLvf orr,q731CjNq,PTqcqAdM3$hD8r_2Q^OTMjGD>c_2LICpTSj`$2B>Ffryly' );
define( 'NONCE_SALT',       'ZWhOiNOhUZv{s7x9d7zS?{v6t$HR:]5G7]#V-|F9fK9xor=MZPc3qYBd1[;.0]$y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'i7n5_';

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
