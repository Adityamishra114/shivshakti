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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shivshakti' );

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
define( 'AUTH_KEY',         ' 8p?S}a0AWem!F_3U#SQK;FJ/;Z%Ri4F?Xc`; jby3Ot UT<A&-z@X85%Sg 6:Cl' );
define( 'SECURE_AUTH_KEY',  'H}_.Epc.[1Wj%jRs z;SVc@M-_SBd~inergA:o Ok,%qiY1XUyx>v7Zei%OL$x]1' );
define( 'LOGGED_IN_KEY',    'fWL}R(#9FYm`a|T+XT!8P{mhc^mm/xxIW}7R2jLQ5Te^*LOuoV74mvH7|SG8N,6@' );
define( 'NONCE_KEY',        'DMc]qr~&XnFTM!Mhj#AW 2B07,3}q=%DMF)#lR+rrB>E2CrT<eT~o+F#/t#8@NAU' );
define( 'AUTH_SALT',        'KwHXf,`JIqg(7S!;bLQoLPA#HtrG*!^*sJIC/|?40`.9f#mm.LE<7uDZOQrxy>G:' );
define( 'SECURE_AUTH_SALT', '@{(WD8U#U[LfTCA5FTiExQ=wOxgJ1humA_]EYB]Py(vj[W~t#bw9-dTIs|hzF70~' );
define( 'LOGGED_IN_SALT',   '3X&.I@1/!!an.RZ[>?(W`,00lwhpc66HgqB`7` j!YthToT5}y-OX:`L8`?cd2&B' );
define( 'NONCE_SALT',       'Nr}Xmdw=)QppB-u$C:-%4eOosI!5GU/d>?9B*omiOAz$n#AWlvG{i8DNd%nCtjdj' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
