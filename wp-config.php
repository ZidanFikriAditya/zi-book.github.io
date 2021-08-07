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
define( 'DB_NAME', 'belajar' );

/** MySQL database username */
define( 'DB_USER', 'zidan' );

/** MySQL database password */
define( 'DB_PASSWORD', '@zidan270504' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~RZKf0Uzr/bb`p6(XDWUNK&gT64px@lczB/ym:a[?-Fv^JjhI*6 pye^_R,}>Z76' );
define( 'SECURE_AUTH_KEY',  '-FTL*LUTjx]-a5br^YmDZqt9M~A;qRRABu >c&Mg+|DYS<XYp2~+_jYwjpIf#RM0' );
define( 'LOGGED_IN_KEY',    '](d^%/^%@lRIzCm-[;;caR{@dQ(U/HVn3I6SP&)m-Qt$RILy$M DmCEI3^%rrn[D' );
define( 'NONCE_KEY',        '1I?QT4-Pd^#KKaa=qliCbladJKEv@G1:$u$XKY|`zknKt-T|=0~afl=n&H_<7/Sd' );
define( 'AUTH_SALT',        '.%O0Xhd5dv8-L7=wI{E=16q)243#a|p)`s6}M?op!0dd~lSFXN87B>%I8$K-D`R>' );
define( 'SECURE_AUTH_SALT', 'fQrn1R=t3^?7a:4Smvq`.zh84MIDp,!k6%&^!39FHKjW`k4|[>mK<`~0s.lyxh)a' );
define( 'LOGGED_IN_SALT',   'B3wxgJ=+[n9aaX2Dk88)4( TC&L[iqZC#hP<o$1 yep/K=__S_pRydgX^8>[pGa]' );
define( 'NONCE_SALT',       'nJ]#Q66Q0k+r#Er9?i_zk`P-#I?y[91PlMK~(*`5[!+xpXKiw-qK@K1UW}U7L)}F' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
