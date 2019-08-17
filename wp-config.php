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
define( 'DB_NAME', 'test3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@$&mysql' );

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
define( 'AUTH_KEY',         'wzMy;{(pT;&R?9+LF_A!NWE$I`s.s^}vJ=tuO3(@(p]BE}H`YaM(XKpcr!04ZoT)' );
define( 'SECURE_AUTH_KEY',  'WyRoFz@Vx(_?o8v0sPP5{~)sliS6l$DXBR4p|?TNyoUhbQ=tPHwpm^9OVa-b)@zV' );
define( 'LOGGED_IN_KEY',    'viU%1T*4p{N41RX=+C5bu#TPU@3E:+ =A^vu|[bPhff]dQLA$?,0S44oQZpKUL2g' );
define( 'NONCE_KEY',        'r!R21he{c1CvbcQ766-feidU*<hTS%7BCP6xTjOJ!n+#&`<:.xeXz}GDQx1q_pn[' );
define( 'AUTH_SALT',        'mO2n!;=!A: o3u5S6/W-:F$6YBFI`a1tqN5/h6,jw:B)`JzDn^j1;/!=,Z`w>=F0' );
define( 'SECURE_AUTH_SALT', '9q]]-a?p6^A-AfuX]V[61H6qKs^`S8R y;z!U9[1rW|a8#A8 >4@QFR^mTq_?NGi' );
define( 'LOGGED_IN_SALT',   '#oZ%rQHZHv9DiSQ6oR<u1&[22$ 5gulCwT6t3B4ba`RC]!$QyKO:EWgszvWO|PkN' );
define( 'NONCE_SALT',       'VXVGA}:b/G_U)m/ySm(Nba@!DbQg[t#EGMm{_88U:v-y;2},G5q!<8X]4J6(i7p>' );

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

