<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'arcoslab_db' );

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
define( 'AUTH_KEY',         'jw&v@UGShu./Awi#pZDBz{)-C!L@+Qd+?o!o5Y0[eM+POxlcUpqlY;kbsS~iX PZ' );
define( 'SECURE_AUTH_KEY',  'J*]p3?zs!a4osyN]ysf_YN|stsQj(Dm[#hv[[5le7z^***y,Gp.f#Y!ed2P4=<lR' );
define( 'LOGGED_IN_KEY',    'iY=+:W{dCz[7OId3QBd%sK_<?gv(ulv&uvK-c-E3 !gWiJr#P+/_F,-9N |f~ C#' );
define( 'NONCE_KEY',        'M6jdR,gd;6?dyC?O7Sw<c;H>h,t/sDaKdVW59@j$/k3HrGo@E}``GrBwj=,%|s62' );
define( 'AUTH_SALT',        '9G1(|#1+:!y>,>2g,ySk ZMp}HYm/0E@Jdo`^PsLFkDAM8< V!I8nny*Sm7I=k<i' );
define( 'SECURE_AUTH_SALT', 'ZHGx72J#>)sp5$tb#Fg5roJtn+p|Sha[JD3fc-Z~|ujpyCtsVje k:8tgrsUQF%S' );
define( 'LOGGED_IN_SALT',   '>N~>6s%&UkjhPVE+4%}hAv{KeaAnZ#`Y!)tpuM9SDd!Oed~1^?|MiIi~)2C*SR_T' );
define( 'NONCE_SALT',       'Yy^FW*8M]bQ!,a@vuW;]f?`I+<QBsH>C:+ C)Bp|x;D+M:ijV?5*`Y{fT4=IY)Sl' );

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
