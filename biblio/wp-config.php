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
define( 'DB_NAME', 'sql11479036' );

/** Database username */
define( 'DB_USER', 'sql11479036' );

/** Database password */
define( 'DB_PASSWORD', 'w2RaSw37uA' );

/** Database hostname */
define( 'DB_HOST', 'sql11.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'E$:%{ql/(}PIaMar.!CYDF,~:g`d4S7aq/mHuL-jo[VRx9u]t%|_>s|N_n=Y?Ok0' );
define( 'SECURE_AUTH_KEY',  '8,A9%eraMC}-.=B0-t!jCdd(JCZB[hyA[Q&*Wke#uq?=-J2%Cmwd87!b<mE/i:WU' );
define( 'LOGGED_IN_KEY',    'Ny~/9d/|G_#!sB:i_Iij::/y|p4v!-<J?zJ8N(Zy~^Zp;ZM`I4r(>5nN//S##+C1' );
define( 'NONCE_KEY',        '6UM{1Jucx8A=|u7K,gyb4jf_n2q!h.mmes`p#zmTqnDI]+5BbHvW0P]9<;Rvm9z_' );
define( 'AUTH_SALT',        'wTvBQ`S~!mbUE1i?l/ct~[vS3?=5%y{C)}}PGh=:tbCxeGWF(E7yWSYMhexu(kAO' );
define( 'SECURE_AUTH_SALT', '|7h4#.6$Z]t72}7ZSnP%z8U/O0YII@6$c#20/U#NzaH5HwY-e^|vp,I8nA&&Ze(F' );
define( 'LOGGED_IN_SALT',   'zwiInRBBB{rvfW`L8zTEU,f{.3JZ[:,(`zJp%q+1,(a~I2[G])a#B%R*(rs/s0pE' );
define( 'NONCE_SALT',       '4t.m:|t)CiG!l2+7FHKsE_.9Qf)>3>@*-B_!D6wOb,$EJ@uB?9)UtJEG{zg<sFNP' );

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
