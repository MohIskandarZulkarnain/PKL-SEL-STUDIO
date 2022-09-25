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
define( 'DB_NAME', 'db_company' );

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
define( 'AUTH_KEY',         '&B;,,jy5M57h[ OG?8c,j5XK+<mQ/[q51a+x>][mS.~=Uf^ir@$!#nA@y 1P%!z`' );
define( 'SECURE_AUTH_KEY',  'EVNZgLi7=lX |A6/lyy[C^,Yt<Jqbv9J]h]TrfkmirZ)N<b?5X]za!Z%64(A ``^' );
define( 'LOGGED_IN_KEY',    'nWU?dBbj.>}!jsG<ha_l&&_lCY D?wI^1> YtO7/ToR9C6B A`za[Sg9r.5rz`gt' );
define( 'NONCE_KEY',        'FD{<4M!k>E=iz=>u&/-G;pyCwO q2J%|zPjyv&UUHt7{)Iy3S+w`Nfjk}}nk*w7<' );
define( 'AUTH_SALT',        'ib|?R<p>r/D6D c}Nq[DvUW`%LPq]T,-slXOwQ#peZ,4V.?f@Ln3(XNyb5NNjcB?' );
define( 'SECURE_AUTH_SALT', '<xQsQ/$PcRX,O1j2?[9Gpq1~3GUnpoMiDYVX:N^wgJ6BSaOPLXN5mW!^UOwk^xYF' );
define( 'LOGGED_IN_SALT',   'Q:htr,+OYY-@LAP rJo}fd4f@~~k!QdIxqc+VR$rVy^f?{FL#=UWLxW%:`MUqdP]' );
define( 'NONCE_SALT',       '^=?HAk9h=%Fc`-VmL61k992E~.zQNY7#^>)E}ZVTaXu&E-+^6mxct8Ls)Xu@&IRl' );

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
