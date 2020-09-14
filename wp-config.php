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
define( 'DB_NAME', 'applab' );

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
define( 'AUTH_KEY',         'lMLY wQ*=g$[i`!x!ZVr7.ml )Vqq:l10w!ijj:8$1MWX7~<Qi39A-~MaJ2@$`^<' );
define( 'SECURE_AUTH_KEY',  '4Tu#(A>iDK+ i=9n)P_JAmr:4mNN Dn$B`3VQy_G/&ACJs$^$:MDb_+ftMu0^ Gb' );
define( 'LOGGED_IN_KEY',    '#v3uAkYe@q:6dqcXIleNV1nX:l. +mi.QW%cIF1}VR0LEP[eLskdRi(b]a#CR$g/' );
define( 'NONCE_KEY',        'qgD]d-cj~yb.H#8?VmfmaF/z?F$-f|C:GrZWUwS;fJoQ#1[ER,@^fv>35_~%Ed0G' );
define( 'AUTH_SALT',        '_n9e4(azK4nan@x$r)^@!b4],D),[!83U 4fx;]6s=Ihu+)u8%-QQr}82jcA3:5:' );
define( 'SECURE_AUTH_SALT', 'w.Bf$h{DZ8xs=l#gUE6^I6T)V 1V `baX_r6FBKXR&<#$]I.Mk&Dd0q4.kR8X`P|' );
define( 'LOGGED_IN_SALT',   'Pm9|*/T_^NioOsss?21(Zg5bC ;}(gyYEU|mf9Z?~P yy/$d5hfxU7o RdE!P2kU' );
define( 'NONCE_SALT',       '@v6+B2@O?#y)VrPB@97&kw&t*@@h*L}7x0DR :/n<t&QZBWsh:#u+oWYdwjBnAa;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'appl_';

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
