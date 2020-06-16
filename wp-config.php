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
define( 'DB_NAME', 'db_digimarrv' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '84hW BAaNl`4H($Im}Q49Dk!|fni9`_s5P:0.0L}A{V]Q}y]+|9MH|KX.cy)-=E!' );
define( 'SECURE_AUTH_KEY',  'r]^?q+rt}NK!!*jC_i{GN/S9YO]$N@IS}(WX]xK/vL0GTKiZ<)4W[C3l3=fuhv8C' );
define( 'LOGGED_IN_KEY',    'T=Pr],.rWl($|FtQZ&%]BGhHO,Ax.mB_Xf&LNJrG_*v8b{@*%aa2wh:XVJFHa;s9' );
define( 'NONCE_KEY',        '91k- 5UGCn{dP*r6fu$bYjfit}/;nwjM=_q#yP`Eid^*96Glynmbv9<R5`d|B!^E' );
define( 'AUTH_SALT',        '!T/LHo(eCncCta)mb#$e-#Tqm+&buZrHhH.^/Lhi5zS<Qm|XuALyU*dq|fh&Lqf;' );
define( 'SECURE_AUTH_SALT', 'k%WF&9M`7/t(^`bJ02U9*}Rc`})f.Xo,?t9mV|eK>B9Hyhvu9X,tGHmYu+jGS,m%' );
define( 'LOGGED_IN_SALT',   '8KU3~*:97!X*]W,K&ZCTjj=q$W./Rd%9y *fUwPRnoVLXc%o#OS[`.[.ILEKU+TC' );
define( 'NONCE_SALT',       'HPj/#@g#9d *,M ;2;vd#V6!|CxjrIk:ola0roz&vzxi%bk[76+OIMfgMTZvSb>o' );

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
