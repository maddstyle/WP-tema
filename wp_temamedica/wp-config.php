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
define( 'DB_NAME', 'tema' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`}!$D+=^$>64TyTT}u#e1(Ku0PDS^xQ*~.$_SEas12218#t`[;[L4#HI/irm>1fr' );
define( 'SECURE_AUTH_KEY',  'i]sfd2vi5.LvK:eN{PAdrhBQjpfojPT7Z)GcE{:{F6;H{_>j_D*ta&S:l30@UBah' );
define( 'LOGGED_IN_KEY',    'uh&l>XG^r3S>@]UFb912XT!=IL#^U7x=,6*5KbBv#GjAXA/.f$YZ$U(=X0_6:F=k' );
define( 'NONCE_KEY',        'J#mh!LF>?ysgTvyd!k/Mm+Q.ic%igC)!o#`-rL-j>]1,6*mlG9am/_`/|$M;.Soh' );
define( 'AUTH_SALT',        '/s^wQWRq8i+a[QnujO+xw:*CX1liJ?W-cW#,#5Y^CmlTL0>y[f@qk<YO@6W}tNCw' );
define( 'SECURE_AUTH_SALT', 'N,>Ff4d+EQw*e<.AJ_.sa`!u|e{1IB@CQFi`fO5L*R5%Kd6dcbcuc<s-$x=js2)3' );
define( 'LOGGED_IN_SALT',   '<Zxo.e)(pU0.9ypRX8,|Ozki3d<Fw=Q`-H5e|#,csI<?c5PU4E5yK.zJiz/[nZSN' );
define( 'NONCE_SALT',       'weHAWn%SGB;YHN_;w-2W!-hpPaV|7!a#gEcsozE$1bk2LU^f)t;DXX#^$mWgLc=$' );

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
