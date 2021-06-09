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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'jsiona' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pmapass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|]>mUFxY[Q#&SzV.bG6P0,hd%ANz;^LFjABX-GYbuqY2|O>R/BktA5 cp|RyU(H2');
define('SECURE_AUTH_KEY',  '&-A|H+}X1rV@swgxPC5j{0@?o@{(IG%#/($>-r~N(eiFeam=2Jgbrq92Ks|ZwOC ');
define('LOGGED_IN_KEY',    '6;]x6.iq|bDT6u>f_{mb4&aGp9w9,;hgLwE&ofD+v3^+Sza(JMZ1{~c0(wg$xB+?');
define('NONCE_KEY',        '~z)m r2#JlY&>z$B}N1qW*|k$k8xK3]FP-n?wynFvl[DezGU(e8t%B U{)60^&^+');
define('AUTH_SALT',        'Ge>||F5G>VY{Iw_I~P(G47ht^AdNtDVWecwD+g/~`(yc-e}xmM(Dtc w5+YRVaW+');
define('SECURE_AUTH_SALT', 'y!|(eZ,9#1|mPdz^B.)N+[>lI[Fk*3?y~@9VHW<K&@&sNFW1l%77%Rjzj;*.}~TX');
define('LOGGED_IN_SALT',   '<w,p*oXy-ZFFVJZ-1]b_aan8+)&X=Cx/oIHBl9L-5F;0bH`PI%}&%?sp-f6L~{M2');
define('NONCE_SALT',       '<,|v;(QH? l=|enq[H|ro)>+^%d9t+r0B&m52qdPaPI+P9w}8tp@~2-HiWGuU>Da');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
