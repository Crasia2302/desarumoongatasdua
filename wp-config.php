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
define( 'DB_NAME', 'rumoongatasdua' );

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
define( 'AUTH_KEY',         'pvwp`_T_Q:gdxD}7QqsvYr:CG;fPx,Rh4i-No-r!iDT1vc!mM}4)#9P*F YF*4#T' );
define( 'SECURE_AUTH_KEY',  'Wvryu;q3M2S`RaQDf!Xokg9?a=*9ti LM Kb:/r*5Hig}n$~8{*cSbARB_A5+|cM' );
define( 'LOGGED_IN_KEY',    'S4J*^hOyY~./!D1WL&NcW$z>ZF;aa#Gk>O6eRm T)H9qp#=HQR|y>]=zGV7)|skK' );
define( 'NONCE_KEY',        'X)6e^ aYP(EH4P]IJy:wHPm)jMSG+S:v[s8p(s:_Xp-tjt*na,uFZ)10U7I7Z8tf' );
define( 'AUTH_SALT',        ', C28lMzuM+1$tf}@rk}`Rk(1dpoXsv,!R_{mOLv<^a4t4-4J>EEugKHFR]=&$H(' );
define( 'SECURE_AUTH_SALT', '!9f5[:nZp3=[Rg+1E/O $vg>;c{^Iphw vA606d+?jVIICfibo!dr^zgY6_%f*:&' );
define( 'LOGGED_IN_SALT',   ']gT8rQl]dt@ZSk=}^C=#re_`=XI&GU[%t%{c2A_fcfnUyFa<ln;3S@p,e*^: @-w' );
define( 'NONCE_SALT',       '1wD,+3fE ^{w-BpY{udupLu[_Xq?c~Pucc$RUR2+/X.Em{^J.StE]dDo0%K1zxj0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
