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
define( 'DB_NAME', 'IT-gialog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         '#J^vO|r`ajrX#W0V<q=?LTp>&s~D+WliQO5A*Uw,`$Td~$3yoTyjS;f*+Z[`P)cX' );
define( 'SECURE_AUTH_KEY',  'rG^xp9QL V85[(<(RkK8J,qj@yEn>gZW,R<j4QW`yubG-ku6$IBx/@?/FSofx]N{' );
define( 'LOGGED_IN_KEY',    ' m*!Oc?DE,aQnmOo`>&9wgy< 4]h-iUX5/DTX]6GPxNLmmS)^=[*v8uxJCX/Q-+K' );
define( 'NONCE_KEY',        ';`lq_&#Q[u+]JiBE{rw[#IG!wzr-UR53nP{?~rm?r;OkMt8du:JE(/62$oEbfgOq' );
define( 'AUTH_SALT',        'nXU[GA_wF)^8jAi2IT-2n?Ky<$DLHWZ*~!&:J?b`HN1F4^{9?p~pt/X%M=COy kW' );
define( 'SECURE_AUTH_SALT', '&Ri(jqT2CNKkEOq- x~lv+OAtw^P)17|,oKqbeyt?f>9|mbVrXCUSg$j/)K~ 7zJ' );
define( 'LOGGED_IN_SALT',   'bvh.2v{`:J8h#Bb:U)%^&9Lr!%y%GP>(dg&Yu6*%s6XCBQb}LFr]aOGEEpAs~tRA' );
define( 'NONCE_SALT',       '>tm;>Jwf+9NaT>!r*u(`N[G1jAr9QZM/-T%FytBEPj-2hocM06NK7`Z[i_&YIlyZ' );

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
