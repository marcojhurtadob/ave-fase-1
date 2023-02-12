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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cHan<m *;169xw<#l?_y`D8mxwLe D<WJKFf{Axu/W9;*(pbt]OvD^5@u?b~B};C' );
define( 'SECURE_AUTH_KEY',  '0A|-2KXJ5zoaK6Ry-m?&JPNhnU+ISd^Gp,IG4K+>r)Aa7]6w[Tn&Xy&gsWwuKq}f' );
define( 'LOGGED_IN_KEY',    '10I/FKIEfN![PMozGb*t?d7YWv@HPr1m/WrX97BnkATmA9MrWxfCt`9hHqqG y$!' );
define( 'NONCE_KEY',        '4kcSH5U A{Rg;Y(jKv}t3X/3GV;n0G8k;Xbw2N=c<UKw:T>4$n7*aGIM.VyTI!hs' );
define( 'AUTH_SALT',        '=70727 I3Fp;hgCfSt0YddleC&G5f1Zjise|o[.!1FvBqe861%f=dl-0CB9U3=Pl' );
define( 'SECURE_AUTH_SALT', '*Dg@a{&@{6iqlv^Q(thFB1o]KbCXBqCQ})lPmY1MoY{#/g2rZ:KyU,{q-0$qR-j}' );
define( 'LOGGED_IN_SALT',   'FrNusdnP%h)qE`o6kP]H|o|tYT%p~`lqY;i%iE(v4!]{@EW8[g(SQK8c;O?ch /o' );
define( 'NONCE_SALT',       'JDqP+|F|2U*Hwkte:W$o/)Fzg?<pm!lb^lrg1TiNM73+ApH!:IB8GiDYfwFrsPtX' );

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
