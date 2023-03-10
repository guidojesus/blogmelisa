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
define( 'DB_NAME', 'desafio-wp' );

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
define( 'AUTH_KEY',         ')eM`x.L89cf&P%3iyf~(,;ZkCU7TR[8l|w$bp7K6q#~GV,:W4cB/|S7M14N|V>TR' );
define( 'SECURE_AUTH_KEY',  'wmOPH89teY?fLbX>&d5WXz_6nXHW;`oUNYvqkdbCOq)2Y[wfIbhQkSgYy3sc:MEQ' );
define( 'LOGGED_IN_KEY',    '>jql?9-i#xQQLWWZDj|pL`%_B4yKR_#u+a( R_B])rZxasSnq<QKyaL+aAQp?tiG' );
define( 'NONCE_KEY',        'Mv9ShlEHsR3FQXS,m$~+=,%GjO_q=)Ge91<7&zCjmgX1V>&K^$1<nh~xhZAFA}rw' );
define( 'AUTH_SALT',        'u]miXxz81QzF9cr~w*`lw`-A&=~>g=::9?5vu(jXAVNgC{y(:24+67,IIoC~,lRg' );
define( 'SECURE_AUTH_SALT', 'p)%YnlMQ3XQ4ljoVAK]8+2H0z+8rk!#al6ytZ5Bl6Gm&9RXau;6$c0Y`O.u>i,BW' );
define( 'LOGGED_IN_SALT',   'I0NAO8%TH.W89seG;ik1D-JylcQ7e?]&JvH&hcQa=OaCt1xi?jfV oH;JVj.WqH=' );
define( 'NONCE_SALT',       'ydwROL#;(9)|ej~;_[@A:xU<A#Bs!<lPJ)u% 8gGUQx<7-8y);ZS3)?{>wArS7n2' );

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
