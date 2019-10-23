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
define('FS_METHOD', 'direct');
/** The name of the database for WordPress */
define( 'DB_NAME', 'xeIXra0oG1' );

/** MySQL database username */
define( 'DB_USER', 'xeIXra0oG1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iIdTx5TXUO' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'kjgD:)9n`MrHB~7P+U%5P-v+!h>lmzYDJ`gy65]FNh*w_COXXCNJ:TtJx&5:iRX,' );
define( 'SECURE_AUTH_KEY',  'Rduj:GdX1(&^gn.)OzER/#~uR.w$5C_E{PR7K)Q0VXp^P-;7vYnERUvbbfOVCiMW' );
define( 'LOGGED_IN_KEY',    'oI#<{*cQ +TRyUY]h+_b8 Bry72Xgn+.E_0#k|8dpK}gbV$OB;]~cKBr#o/ES#tN' );
define( 'NONCE_KEY',        '/]C:Adm#YW7Pt&4g;}y]U0g#{X]k5c&Xi^FE`*zL[6kjJY8jw,[T[M7U,K!lP6oA' );
define( 'AUTH_SALT',        'SK*o!)WR^x4xXQ]TrEoWk:6C%MfXRLe?n5PxA A!#~8-~lMH{2t?fq>d*3^au}G4' );
define( 'SECURE_AUTH_SALT', 'J+}*%R0b7To00}C]lpNaM sbR8Clxmvr{iJUQ:$uU8Q9ElcDFxaZUJV~UmEZf?[R' );
define( 'LOGGED_IN_SALT',   'FA-VQn,m_H}PB,VgV-QmQ[.D 2k}[ St@ADGpe!s5[L(rj5H5.q^nf]?jW7$5q/0' );
define( 'NONCE_SALT',       'O;WIf;(CUV3*|EuLKUB2NA77n+/Zb3@;cM~/S-Gd~SoygW4X*;Cbbd-a/5a7>J*c' );

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

