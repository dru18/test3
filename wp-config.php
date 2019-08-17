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
define( 'AUTH_KEY',         ' [=`(%gp1XQye~jXACPGh>iZgZ*<3O1vq?6t3I[6~fXUvfLc cyh8U@#|MFh-#Kb' );
define( 'SECURE_AUTH_KEY',  'uK#Nj/Og>rG3$*_}</S%i7^B>hyYGf4 5@e5%7*>yo[V9h_GknOuGWO;@5fSU|&|' );
define( 'LOGGED_IN_KEY',    'b#),.)8Vn6qRe{7pVdcLsHzBr3IS9jsPh0X-&MugEVa]ZZ`K$G)V9kTL:puaI0C!' );
define( 'NONCE_KEY',        'D8huJK,i<_t^8LU|DMpi@kZNiNzratcjxq96|DB[Zl75WExtG&xY~}@fKb^/,UV(' );
define( 'AUTH_SALT',        '>fuVq!5H)W<N-_d!AKmm62]ZW{Ag})oc=4bhM]81y=rovk}e*R89Uv&;O&fDb)2,' );
define( 'SECURE_AUTH_SALT', 'YWZ.[x>NS;1W(umj?$Q4<qobBAEJ../.!9aM]/7<a)1^{OIU9OrC5&D~bw#AGcP@' );
define( 'LOGGED_IN_SALT',   '&J,GYOUwI!q]ozb]t^o+$&)BBFxj08XI[Ow,z.wJ=^UXJnOVeTO%1d4R]t}%rs+t' );
define( 'NONCE_SALT',       '`#Ct1WtxQ&+WJ9O+*~ ou9;+!z<0?H(wkWcj0Gdpt/Z)5L8fA7oN&,IjRQP@k>o;' );

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

