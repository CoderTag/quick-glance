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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_kasar' );

/** MySQL database username */
define( 'DB_USER', 'kaushik' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kaushik123' );

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
define( 'AUTH_KEY',         '@c)9hpi4#4fX{PVdd2MJ}{7 +WS>~G&w%F8( Um|/8Eimrb[p8 4rd*dumNCppk(' );
define( 'SECURE_AUTH_KEY',  '!%1V-UCA4_MTvo4JC!hhra*TAcpWJ8+R*2jf~m-rycj9V#[M/N`%^$nT>6<Ij#45' );
define( 'LOGGED_IN_KEY',    'ZwBM;r*{BSX~1F^u5pLpX69=H<c)U:pB&l-@FJwj8J}!4qe27SG~eIHzXw$o:ZnC' );
define( 'NONCE_KEY',        '4::2CA.H8X8#I_L%S2^o6)(,/whf/n+Zw<2Y|=P]fzd)R3v8V/JUpqn|Y61I$25H' );
define( 'AUTH_SALT',        'X+Y;*HnI[rgD,W7w;3Gj]d^jsJX$~w3 GR|<Fm(W>Q9vrKIZ:*5CqvclyZ:*X3Bg' );
define( 'SECURE_AUTH_SALT', '9zvb@xG,HfRXyCnTye``*@qq|VswTC6BQq? !xBc7.T*Vu.u<R3T2N]1qbOkYS+,' );
define( 'LOGGED_IN_SALT',   'vK3yR@72*cmMjGACfJXX>$f/[?|}%m-Y}dX#-?+^=u&&T}H[:mzYF= ej?uD-+53' );
define( 'NONCE_SALT',       'xD*ds|u..P{$cFm}p75h $ji6Z[NB a~?=[pJ,ZI}sT#lD }>gnhS{s?sShxV$-T' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
