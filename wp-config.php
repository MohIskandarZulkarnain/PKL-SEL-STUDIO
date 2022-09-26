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
define( 'DB_NAME', 'db_selstudio' );

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
define( 'AUTH_KEY',         '_vfB.SoK4+}$z}6@WL0)=}Zgx:$qS+#H8[ s-[+X$Y=~{!S`bNK__<]f[M.uK]Rm' );
define( 'SECURE_AUTH_KEY',  'k9|(M1t~.V?sS~XEfg$Z?9KrRMP[=+9ce[7{A):(*T~xTos>/8O= |d%,:`I+l[m' );
define( 'LOGGED_IN_KEY',    'f>1]!hJ0QGsCY7}F$NMdBeB73ApgV]_8^S^jIb(=-GL2j.nC4xmkDE,Y@YfYI2{w' );
define( 'NONCE_KEY',        ';zb5K0Fu<OZA{Nh5 dh,s,EIMoX^aTz&a8A R2O>at::{D/vy?YDD1fxXs.n+`0+' );
define( 'AUTH_SALT',        '8idb;e)~9bC#xkt-l`qX[mW)J<o}#0L(tr}-t-G-|_PD<wbS^u;6baFA,-gN(yM.' );
define( 'SECURE_AUTH_SALT', '9q=QX4Pe>.oNa@XsK~c| 4X5C{=6:imi{KGK_i@_(Y4VKE;(50m^lR>pM+)U6#Wb' );
define( 'LOGGED_IN_SALT',   '*Th|:8wN1mN]%MJ^Y.=[_c$91+}LOgTvm`Z+BwNxu{cQS}I5,3htGXeI6 y0:`TM' );
define( 'NONCE_SALT',       'rLGW?2xb_<P(k)84g1pc`e,8$.@+S|#65AF#U[ob;/x~A+R25U$Z:`w~9fiTB(e+' );

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
