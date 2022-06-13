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
define( 'DB_NAME', 'wp_dev' );

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
define( 'AUTH_KEY',         '8<i?:wj{&I=gNA$G{pmAJd7H=yvFKyoJy ag1A~U3W)|c>k?[Gt<Sx2}vuYg^onO' );
define( 'SECURE_AUTH_KEY',  'EZlV W<A{i|,:y>PmMj4[/>dF1`QSVY^{$$.&~}+u1HF/dO7Q/U|BOcW{no_]olX' );
define( 'LOGGED_IN_KEY',    'N*9a2ezviyeU6iY8p*pZ~usl$-Ycdb!]`q!@&_W?X7am}lO]QZi>x_~Sj`LtuE$W' );
define( 'NONCE_KEY',        'v=wEkX!4uz?M!ftzS15O8Fo.a2{PchB5&2)mmVcV/{FvGB=<c!AR|n.Je>$E%[.Y' );
define( 'AUTH_SALT',        'GTyp>fWGy(49}:u$WCO14e4Xc1,wOGv]mn-x5 X3?3EB$nhNG1Kg@6,Nbq_/sde>' );
define( 'SECURE_AUTH_SALT', 'R*nB=Gd<`$)E$SRI8@|_$mu?y&:@s[>beqhBIdp;~|w(bI-C/4qSn)J^xKA`wg/.' );
define( 'LOGGED_IN_SALT',   'Vg+%d[DFO&WU5!4#A{]J[mny-GVVEgD2Q:guozE=MoBf@( fTWA&09tydM8o6!V{' );
define( 'NONCE_SALT',       'hQ(wU5Eskz|UXDm`_js+G~;B5W,:>O!FQ43M^hz-mBP|>%5:k;=:hfSk&+,U7b_?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'deve_';

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
