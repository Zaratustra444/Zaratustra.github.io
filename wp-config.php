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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Zaratustra444.github.io_db' );

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
define( 'AUTH_KEY',         '_|7D48[G3n^bFu#e;_p(^G9mW~#2*_tQza*9`RUdp%Qov6?+:0`2S^LFEO5z#X/H' );
define( 'SECURE_AUTH_KEY',  ' f9ssxx!fC5IM#)S+g~;|3R@q)12;zu~q+v}P62Q{/ax-ygw>cOY_FRg~=``<{[X' );
define( 'LOGGED_IN_KEY',    '/sg3keiM>_EgB[b$UQ4c`Uwxf47Vp_P:N6ydOm;LL^Uf|5g/6co-.2zQvbN==L:~' );
define( 'NONCE_KEY',        'cJR5%KFaO>(R/$Z4gE_aEc3fjst!GY:WM,z)K-~C@DGy/]kB68}X6lYB%jna0V1!' );
define( 'AUTH_SALT',        '[QD)tQy-0%T4%tZmJ/OIr@}cd@#1xk#M%~I_.X79p.bZzU.&0xijs4k^X_>:Ij&Q' );
define( 'SECURE_AUTH_SALT', 'OhJwjlbVtzxwB1%WbU]^;00A/-)m>n9/AR&K2bH#~x:%Nf9<w0OUO|?,)faBs#$)' );
define( 'LOGGED_IN_SALT',   'KpGVP<Un).KnC1*_N>/nK +>hbCAm+#sYlX#$k~PZ?hLl$dS8h+IUJ|6Lr{a5$d;' );
define( 'NONCE_SALT',       'E@%|UQtab~Md@i7q/$=>4fstUjdArUn:v92IZSy@[~pURITpM]=ZF)WKO6}4>-[}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
