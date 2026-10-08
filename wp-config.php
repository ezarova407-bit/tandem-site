<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'Ve5!NOZQx=2M`ARN>OL[#s[c{.<68I?wfClrWL^~{Z$ega{dF^cF&z nOy_$]BVu' );
define( 'SECURE_AUTH_KEY',  'A_uC}e@F8AA]c8SL-PYnOk2#(!IQ/EtIdK=cs8Id{=>KO7&py,%/B[k]a2|C<Ben' );
define( 'LOGGED_IN_KEY',    '2%Y$szOP@Gi7K3:9c,&xXnMdW!3N6~lh_=u](ufZ|_fw+f ekkvI#;G*(XeOa,vc' );
define( 'NONCE_KEY',        'NE5) G>geZp>iDq%6e-GCuSEM?]#``ZggL(86fu!&g&A@srF/;;3$y:1.65xs-v*' );
define( 'AUTH_SALT',        'D?Uin. 6{d7INPO&Ne%j-g%&0+@nWw|t1P:d8]0Yn~!NVOI.[Eip?LN;*)1}s9cs' );
define( 'SECURE_AUTH_SALT', '_H^Y@rK/G;W{?$y~E>|LoME4|}wgX#Hl0)Wq1O$)jvi4-/I5cAu3Fb:MQ_TLWLit' );
define( 'LOGGED_IN_SALT',   'BzAw]cW?4yyR>eZHV0y:&x0tA*17N=TSCmo%*v#h9SZ;yJQN~)gc_5s}%y@31dtG' );
define( 'NONCE_SALT',       'j}%#%+wC6/sZj8o4@[]}um`Rn(=3#YIFgf%*.f+JT~@zrI:ex-|(N*)oHYfdf%Q#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
