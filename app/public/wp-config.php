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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '|ru>[,s>XpG,%p&2RG^Oaffx5XKWt<&n(<OI><TI^EK?HI]];~3UgoZDrw(*`>O!' );
define( 'SECURE_AUTH_KEY',   'Daj.[FaM1s adzdjGMFBKK>C|x,S^vO.EH@ZV|f/T&ud7jB:D}g-f8jXO/eA]yRt' );
define( 'LOGGED_IN_KEY',     '`G$Kr?xfdWYGfXM7arK73Z[,X]~izRGu=}u%?<qHX)tTJ_qA{Q!ZW[BY:%mM:5sC' );
define( 'NONCE_KEY',         ')Dwpe?>Dqvu*TII5]n0`5EXeh-};3J d)2C4|Rb^THwG@q_5ONPvj{bbSu]i]#=S' );
define( 'AUTH_SALT',         '-<D{>HSo#*e]e=diR(Fg5Rdg%Kz6T!!e5An..|9p6i[?QQ1BLRo~t&wI-15ZomIj' );
define( 'SECURE_AUTH_SALT',  'I`_Xv$&ca%vlV7TS?t-!gRCF+N:g:*3iM734(+s:V-{q5LOAgq|g`xjXc}9WuiYf' );
define( 'LOGGED_IN_SALT',    's,g*Uf,hJEB8WA:oPNdxbN9aLj{P<1jET*2dmlAn8emqV3#&_<1@ddleE7i{m9-K' );
define( 'NONCE_SALT',        '|@#M>@GAPDoodk[i5`hw56sC.]L`t bMf>#7SN9e(!)8O,,E[p3KFMV*o2MIfW(2' );
define( 'WP_CACHE_KEY_SALT', '*H}[ZhVQ+R KNC+PtnV2t{at@gIyonMZ5Cqy/YvFZs4|78CiTvp5eLI&gXv_FDKk' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
