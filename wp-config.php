<?php
define( 'WP_CACHE', true );


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u103959701_qdmxb' );

/** Database username */
define( 'DB_USER', 'u103959701_nzO5s' );

/** Database password */
define( 'DB_PASSWORD', 'yfHP6dyQoS' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'fGz>P3g]&7U2|SRvvJ05>;$(hE8Zc_E:&Nxi<LQt3d<|bG4JQW}S#.QZJ$K@<yI_' );
define( 'SECURE_AUTH_KEY',   '[Un8Y,svzEX~/eC;hTAUkOluB|HRnp|u%%Q-fQF?VjkQXR YcPhUG(4d-4Z!s, M' );
define( 'LOGGED_IN_KEY',     'oWu6L9Ftb!}=%=!KE|SR|d]g>FAEu]wjW^NJZVt@D~Dq2l$Jv W{y|EfN|4+n?Ei' );
define( 'NONCE_KEY',         'Q^g83C)bFhlJ#^>zGT:5e=G/kWWhy%$aaY#6Dm9uW@&H??cYz[v&aXUd=098wm/$' );
define( 'AUTH_SALT',         ',^>o`|FfO]iwAd9WYA/nAlT[${F&E cL2]~t$r40D,J|mC_Awq#&>q8(fQiQT#Y!' );
define( 'SECURE_AUTH_SALT',  'PBq`S^5H[/+DAH=]V uQz)&:J&X[,@Bhv.!t. /%7/PF*L)V &=KXm{^nZrK$];-' );
define( 'LOGGED_IN_SALT',    'KM4}{A&E~fQs;~~?tw<4&0m,tY9+##7*)A1sMZW??V*cV/mw0xfpc-SKWH:5#!*}' );
define( 'NONCE_SALT',        'YF]2#Q<mbs(8SF{A])fl.1.h,&y[2p O0oj6m9B1*drj%X8;^K3kX(~5b@kC/Wv`' );
define( 'WP_CACHE_KEY_SALT', 'ZuAJkL#*1:@`2#.vVX4K*E~jDnmKB@U#CZ<HlL:xKc+@BjikrTGSMn9^/P`r.5Aw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */
// Define the WordPress home and site URL
define('WP_HOME', 'https://merena.in');
define('WP_SITEURL', 'https://merena.in');




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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd8c3726e925e8674d0850a3a08844300' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
