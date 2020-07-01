
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
define( 'DB_NAME', 'cleaning' );

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
define('FS_METHOD' , 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q:%[KlH^+J$h=]Aa=Va2=Q3mj^y]@h@}LT?9hSA4)vy@~ELylb6FA_>n{N(^C=8o' );
define( 'SECURE_AUTH_KEY',  'OP`HO7n_`ZOF)bkFdA2,AVJ#b+VTR=mHD(AO_SEvGO2,^w^Q!eQ7~bD c;u(-MX^' );
define( 'LOGGED_IN_KEY',    'dKcO>0:#(iokT=N|eDXJ9Hi^YAAjVAt9j>@k2+dE,HQZrJK;vB%YBr& %WTm>}Lt' );
define( 'NONCE_KEY',        '5I.Y4EObQxH99S#$^g~6Z(k=tY=cpn~ O8LXV`xrE+3.M>l2f@ZB-r`PqF<+1#J`' );
define( 'AUTH_SALT',        '*?Zv(XKuAWoarEokb?-%}Xaqr{SoM.^Z=)/ z53^&Ay[>Jd;Qwpl9@Y{1^Eu6+G(' );
define( 'SECURE_AUTH_SALT', '_?!@d>bfEOh%]6FUS+ra^ubIgw/fI+& ;2`meNuyR,R9JWHAoR%m]1FUP+Xz[b&;' );
define( 'LOGGED_IN_SALT',   'D~[[SQvR4.D>EvM(-nd=q[)AJReKk}k]q:lAbj/Gq!k:L&#!jV/xW,{3Zf]P)2Yd' );
define( 'NONCE_SALT',       'z@9D5wdH0JZnQ={?p>V0)`PN:I.-!;<&t}.R/Y ,A6WD$`r<4Vj%$la>`V*j__&h' );

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
