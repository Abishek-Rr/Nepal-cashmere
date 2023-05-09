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
define( 'DB_NAME', 'hitechm1_wp754' );

/** Database username */
define( 'DB_USER', 'hitechm1_wp754' );

/** Database password */
define( 'DB_PASSWORD', '4)S]6p0y8j' );

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
define( 'AUTH_KEY',         'cqr0axt7ynxhkefqobjemj05hcm7drcf1yij2mnbjldzm9dbylkd8bj5avx9svl5' );
define( 'SECURE_AUTH_KEY',  'z0ywzu6zgsnqxb3kbia0ukritoxjqcubi312jllaknqmfkpp0cq1djqcgwtch9c9' );
define( 'LOGGED_IN_KEY',    '4230mqznb856e92ceixesptwoufojgjgwhp3scvvznkmreiaphtknzgqugh9trjo' );
define( 'NONCE_KEY',        '9dbdtd7kudpru3cxs4lsi1whqpr1tvphafaspfycxdgcjpwyu5dlldcxyb6ssbq2' );
define( 'AUTH_SALT',        '2vdraw5rip3o9np0gijnpgbrwczlunwbx3pb4pdl9gws40str3pk8dci7jh3wuba' );
define( 'SECURE_AUTH_SALT', 'wrheheqwhogcgbtbrhsignjxkptchjsm9wizdr5rurowepiplb7uggdqlh0clfys' );
define( 'LOGGED_IN_SALT',   'lsxcatk0wrgdytyefrapv4aolrfcxn3hov9ihrj9wn3tsi3v1w4l67ibb0h7g3dj' );
define( 'NONCE_SALT',       'hrqefgqt9qkp1hlrbkxlmeskmcfp3j6cmns7o3tzfmgfwlzwympap3bxyhkduryg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpim_';

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
