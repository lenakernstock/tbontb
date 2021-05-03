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
define( 'DB_NAME', 'db_flock-1674_1' );

/** MySQL database username */
define( 'DB_USER', 'flock-1674' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u7XPKKt3BFL?' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql5' );

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
define( 'AUTH_KEY',         ':;wTFU]* l_^{3B-W!c[.Y6ffZo_WC@BOh]6COP$&*F)UxQ~06gr?HQA)L:.FXNx' );
define( 'SECURE_AUTH_KEY',  'Vv9Z4n)`=2QH,wt5SSmFP-6WuFh:sHn1h@6d?2d8T]H)M9YIxDQ`~lW2=-;.^v{6' );
define( 'LOGGED_IN_KEY',    '`G**MNG7:w&xz)H0gQVBLyO2OnrCJMRi4OMl)|Lp,su!4(S0%.vJ^$NDq*n=vbAD' );
define( 'NONCE_KEY',        'bdXKjdT<kfy^?P/@dJ6P9cd~J0v9H-d[>XTTEr0syY:=l>`,|JI2N.nkFCMcmu$i' );
define( 'AUTH_SALT',        '@?1_fs{Wxt|h_]3dwa2|R3f0lr#nn*U-~gUX>bSi)g1dn>k^?UEfzf!e7~AjIZj@' );
define( 'SECURE_AUTH_SALT', 'M$q#N_94<rh9-KQJgpQ(]eNyz87FB#r&Y|#gg+T))r3wJ~9[gLyD[ov}5x@ &-%~' );
define( 'LOGGED_IN_SALT',   '<*AA%v.<6VT@>b%`yxA] :dLVcxvtmY2[F*qF};LWY/nP<4_>j<KNf-JgOl]`gRG' );
define( 'NONCE_SALT',       '(OdSxyd[I,={y#:S5]{xm4zE,#IeXMG5F.-Fb1r}A<,Kl@zfq+A6o^7(I~!6OwV:' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
