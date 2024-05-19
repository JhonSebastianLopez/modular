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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'modular' );

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
define( 'AUTH_KEY',         'Jawr7^oB_Rl7,b_`B[x`P>sgfr&8iY)-L7C,aLD9yhU{B%Dxp 9Q*k&{gyzz j9Y' );
define( 'SECURE_AUTH_KEY',  '|vmXG[&_<tYZ)k_qg4XFWo~yoSuHhk0we%Qwn}o4_X[:P=PqSwKpT7ZuRQ:E-xLb' );
define( 'LOGGED_IN_KEY',    'A3f@(;?-iy ;gS 0XheV8i ``U=iF:MC7ZR9D4`j7|()&KrPmUBG#Ep0gp~VC:#E' );
define( 'NONCE_KEY',        't9Ad3oFp,!.5{fP--!]Lphk>1 <Mz!hIQzm2su=Kn;6(BFxrQo@8k^3B_Pa1/Xf5' );
define( 'AUTH_SALT',        'ivi|nvtAL5=vrjkN2.dnDc:F@+f5_J:&s=KBP5%i8Uv+GJ?(sulH2)^q$bHvb^3 ' );
define( 'SECURE_AUTH_SALT', 'n}24,)BL_^qR9og)e}_F+X.8/G4#2ys|A8@48~S5$P-J7D+0XF_ehVa>nALCm1k)' );
define( 'LOGGED_IN_SALT',   '-6{I8++{PP:mbmFL?|gH[#JFpZ.mMDMak|1,>}M<96s]m3,y#vco,SZ8;O]})Lms' );
define( 'NONCE_SALT',       'W8|6Q|l$=^WsO?zY1VA;pJe*d*>g/k2vC:2%J88CNcf-w(LN|[%v6BCWcCZ>nA68' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_001';

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
