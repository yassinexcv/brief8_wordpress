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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief8_wordpress' );

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
define( 'AUTH_KEY',         'I)bqah|R))|$f7J;d=E3;73A_dR?3-kh||XWR@,g7i=c0sq(%&(e)hl5XtYSW0AE' );
define( 'SECURE_AUTH_KEY',  'G3tc4dex}jyBb1Vr]Q0962hDS7XiuY*m=^{C5}zh_uTWzU:q%vGomN];zmZa!5}A' );
define( 'LOGGED_IN_KEY',    'A!3V9#{td0WZ68VY*9XWBZw({t,Fr]CEq5$OOF?q7DN$ii!Xi}wrn8^_-diKV~X%' );
define( 'NONCE_KEY',        '*}h)]Eqt-2AA_nk5b]2*O-+T9K0Sx_B1;8*{yTSE}~Yr]nS~U(;(_ =wcirDxnDv' );
define( 'AUTH_SALT',        'bsmo5Z#@BDkVS>Z!3Wi` =XE5 NL {B)V{z(fgQLIi1[]:3&0__TD|N^7rk-wiR7' );
define( 'SECURE_AUTH_SALT', 'AZ9O>lz1=T{Eh`9PJE|:apM_#@0(Up4@ECc?zLfEeV&?i he7xC#dd8w=`k@[MZ`' );
define( 'LOGGED_IN_SALT',   ']|2EMIIyBxlA49_{IWflv3mWZ $g}W1dj/0C>sU.~jntt>h `*m#x_FM0*ZWQ5t:' );
define( 'NONCE_SALT',       'xP9WQkoK1.a[?:XigwE3Os&sW{[x,><sB.b:=YE/4]0c)Wn?Q;J;xf%8E]).5P3f' );

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
