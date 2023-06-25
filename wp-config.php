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
define( 'DB_NAME', 'fourpal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'pCgGRzUVE;xk?njsHH16GL=E($bgtr4*^&94=6&Q)2p?Y3o}F4H1J_!s7Va92ZU ' );
define( 'SECURE_AUTH_KEY',  '~Kb7Y{V{E<MUMuIy?9o@*js4F9=Gxyw;~^9^m]),}8;Ek%e,kBO)xY:k<->#Z0xm' );
define( 'LOGGED_IN_KEY',    '?]R>n;7Qbnr(`SN3#K;iYlw(uRs(q=fg, R@}Vddg^$g^rl(NWCS%tT|>wBw>Emw' );
define( 'NONCE_KEY',        ';E:%3tAkRq$]$C1+g,]{c+))Xt6-U rKE3NL{em_=CHdX-+JoPdMPF]BP@J?3n;$' );
define( 'AUTH_SALT',        '[rn!SwO^`Ppc%J1PC5fOw10@9:Yq,c${[@/n]w0il?;)*e^lqBuTBFysKazXnxjL' );
define( 'SECURE_AUTH_SALT', 'zv7DwUR8?%>2=)/0-6L,N K6Az*3IPE*W1*dJ1p8v|y4`v^wf.!+U|c?XoqwXFT)' );
define( 'LOGGED_IN_SALT',   'Z,yyUvcW:5yBy!u%<Kt_=A/98,;,G7W(5CiWQ<n;Nvs)3@(yn>$C%]y^r09g>/@S' );
define( 'NONCE_SALT',       'HxkZ)B_ln#+@0]9&`>82%fCg8qg#InQqsh3g!,?FL:I/P$Yj]f${k 3?O5CH( hP' );

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
