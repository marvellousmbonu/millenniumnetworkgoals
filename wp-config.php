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
define( 'DB_NAME', 'u317905015_MCHCg' );

/** Database username */
define( 'DB_USER', 'u317905015_nrCMx' );

/** Database password */
define( 'DB_PASSWORD', 'QnBigHazLZ' );

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
define( 'AUTH_KEY',          'S KIoEf]rnj`NlU8>*$c-T0:#^VF+:tbz?OYzXE$74P1>N2lpcyAuFS@}Dj}Eslu' );
define( 'SECURE_AUTH_KEY',   'W^t?+y3o9MTrNzc,TNVXPIr&J+-:_$&|;BdB3T@JSi:<?:M>jdv-v(FsmohuhC*Z' );
define( 'LOGGED_IN_KEY',     'gJ=Ha>E%!><s8V7{RG#uTGvg6N*;GcgFy2d9t5F#hVvYZTdm9b` 1<rDG$>8}dE2' );
define( 'NONCE_KEY',         'Bem7NI{-LwE)X&gjBu#zF@0f0Bm#S6K0%SOb.NCAU>m5-jRU[y.oCLzB|~D5g^=u' );
define( 'AUTH_SALT',         '8;sRD45,#EH~qX`KHbDCF!ELm+aXT14w*ORKr1M-x|2JoRz|Q/Ih-btgrx^fwQ&F' );
define( 'SECURE_AUTH_SALT',  '[tmTdF/aYAcH(`c00W*nF)DGXuQFp,0x#xvzCXQC04<boT%x9g@OMHop^oh2&VMh' );
define( 'LOGGED_IN_SALT',    '_H#X[FiQ(QeMo3IKwh0p%DZ&RVa]PD&YDnV-95aVv%1VAB~RJPnmG77%oD?O<P|]' );
define( 'NONCE_SALT',        'Usp^>WmdG~:k>*:>_bP<At?}ttCt?)v{L S}ZO:9~p77Y2TVKVSeYxP!Q/pi)V@_' );
define( 'WP_CACHE_KEY_SALT', 'SU}yN&p}r~JZ^E&f>]Q|#TYQy`X8~~hp@<^p0csK%?}QJO`S}8[$/mcM+lIZ} Wj' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
