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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Nachita-e' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '8#RV2NDgN3bZ`lbS@U{yh(LF(oLDA]3*gS_9[+2g]L 7C_ZXK:g]%*:s?-:@AN#A' );
define( 'SECURE_AUTH_KEY',  '&}VkbA<0w(Xpwp0%#36mth.eg`h>b[=-]MdFa^)mRduc-1!OWE]0W`e0i)O(p+8@' );
define( 'LOGGED_IN_KEY',    'LF{@@tP- k W{j2MoeU!^|i|,%$g~lR|menX[rhZC?uY.j4}1aO!i:;L @I{_6HP' );
define( 'NONCE_KEY',        'j=jCKT,(/j@NVj!Kr(ncz^W5^ <]072XI8|?f&ZA5]Om^%wnQ:9~Z1YPelsZCkhG' );
define( 'AUTH_SALT',        '[_m,}!J<=iI% ;70b-MBU=e>Eu[QL%l5U,|wNG6Rt:K!jBhi}LH2379=0`.`Ld5$' );
define( 'SECURE_AUTH_SALT', 'jfhzBqJ_nliv{FVu,k:^Gej$v}T17fMf6--Ea5)qhFl8%rY!Q;]!^E6=vk{Y1)$x' );
define( 'LOGGED_IN_SALT',   'cl8ay!R=Hs4Si14K:Gn?IjXQs;YLiDXN.X!5PKn<g([HIgxW[bbKh23$5pPQX4`:' );
define( 'NONCE_SALT',       '(W(NJ) 8jjaH.IKuv`fKUjo~v1D()<><l0DSa(WPF{}R|h`=kXk9e:VREZ`yg6?4' );

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
