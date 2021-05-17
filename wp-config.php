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
define( 'DB_NAME', 'labongdb' );

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
define( 'AUTH_KEY',         'Vr(=CULp&3Fr>e>@-5_I+zpE3?<:!G53Ut:uin0gi3}m{J;u$9:0}HG0?elo3.[3' );
define( 'SECURE_AUTH_KEY',  '?K=f[`Q;Cy9Dt&B,GrQ03tJYpzP2+JD;ZeJeccyr>Fd 5V>bf$=!ck+ [F^]M7$H' );
define( 'LOGGED_IN_KEY',    'F3=dv^O02ly=FO=T[&0$-rY4f27I`s;AVDX@*7-!(g([VOwj1?Dye-P~aL~I0+Ov' );
define( 'NONCE_KEY',        'I0T|mcj1:MZIz1PcC:uv8HZD::s*|4,1D.377exGFlhqK2vu%4WT)Fj_8kC;9^6o' );
define( 'AUTH_SALT',        'KR+?_Ll(j)D-]wm;5sf[jgiXpiOuatOG}(],u>#tEcOFmih)gBL21];S^478,KR ' );
define( 'SECURE_AUTH_SALT', 'XJ0@S.2y`=[C69l<G%<+SwJl7,8o1RfY$Tlm_L;Slt;RF3mU;]IhcLJc!k!]H3<W' );
define( 'LOGGED_IN_SALT',   'hFY44@96b}(v}aGz`B@6a}6=K|AcsbU.+}q@&u^xx/Zr?7WA~sv|t!7:EJq#_~hy' );
define( 'NONCE_SALT',       '>+%`@/u9CMvwo9t@4]giv+/EcZ{L{zt:@7=`6A?x8}nTF2il/FX;pbsT8{F)?:oy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'labong_';

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
