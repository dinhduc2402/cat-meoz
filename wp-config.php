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
define( 'DB_NAME', 'db_cat_meoz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         '-6YIb%V+.3Y1O-#Te{$/s)Fz&4tnb[MBw?]^,n~Ct-R7|/^O`ziPq-}^kx.u%=<@');
define('SECURE_AUTH_KEY',  'sm{`LG%nn}4]p=-|*jd/[Y98gxq=-W,N}[BBhQfX &2=b_,-5n|^%`o}+rbN+6/+');
define('LOGGED_IN_KEY',    'vAH)H?JIi1+66%()4z#ZvhYN=w{C~V/%[|HEIi|lwJY6-X@evWiN.mI#a+Ylwl]$');
define('NONCE_KEY',        '+ scsr:J!(xaDh+EDcH}.HKN|88v^#ZRjgqF49H7&V&jLyE=<1CG|H5)H+|OqyQ[');
define('AUTH_SALT',        'qUG_,5DL]DN+c6_Eod /M9HhLfq[KnfL~6R{=ua#L=3J9qfdn^~al,|C)BVs/E^o');
define('SECURE_AUTH_SALT', '5xLX%eTyqHt!wc+br^x>0Z_p^nt`:Rl)5zK)[+&%RwP)zSUj/#K==z6WQs[7b%zy');
define('LOGGED_IN_SALT',   '&9UH$g7-(|bh]{0-|BHc)CFlu-29Xf:+}BECMYz*|*O-#z+RL!nOMb#o?@>I*+#-');
define('NONCE_SALT',       'Jih4H$?6gjL/n4>#OFjOCPNz D|.+fEWwWxV*-J*Vwm.Q}9/zyNF1F }ujh!qR9,');

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
