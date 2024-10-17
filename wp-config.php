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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sae303' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<@Ls2iEX2P*RY0W=)r>I|EHP+DBvprpni-=^c_MAd1AT%smZ]>3X0lF|#HOXBt`6' );
define( 'SECURE_AUTH_KEY',  'B46{.@zz4*Ec+tnDI+*x8M[IluD}[CKc8Jzsr@aAOTZ.a|,dDEYP1VQxrBLPoa)%' );
define( 'LOGGED_IN_KEY',    'o@#!B(gDx4@A%#a_V )7)t{}Ruc?$dUS<D0lP2Xq356xU4eDOu86k.C.PcYuE`MJ' );
define( 'NONCE_KEY',        '`.e],]o&|fOoVs{2(K*@&eFIsn0-.F@1_+zxO<<2*5~E+sF+_t5W9:Qy.rKLUyK5' );
define( 'AUTH_SALT',        '`%)sH_R-Iqx3Td33mY~*K/T3R[FB`v !phsV-1[f*Npc.jSiH&H<Sgzz?cBbw(2u' );
define( 'SECURE_AUTH_SALT', '-:2NrD7t8_i[{)yK%/U;,K} ZXUqkX S+a/:!z$Fdb/m2FK$pnkd;-)#/#({9ZQb' );
define( 'LOGGED_IN_SALT',   '/p6U{g@G]2 ]o3bhZ{)TzBXYMk)!O:5?Hvm;{!ZvTHJR|#%$(KiB`4d+x?YO(7H ' );
define( 'NONCE_SALT',       'l..cK]EWuY3Er&_xMcPOR6KNw4}h$n)xm73_kH<RyNh:m?(T@2*^N?f(<^#@WR02' );

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
