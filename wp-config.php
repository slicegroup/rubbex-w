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
define('DB_NAME', 'rubbex');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MzTG*mf90@7{=j;ATCe!iiq7lF{(5FY6LNCtR[H/xf[)a?mQ2/l~SobigQ{r5tII');
define('SECURE_AUTH_KEY',  '6!D9l8B}5e/&u$<foNdB:I)L|?(Px/o,./1<nITqnX04?I0+& ~MwOPQfu$JGLc8');
define('LOGGED_IN_KEY',    '#62QJF?~}>TcS`r470aFB^Le~w=91r[ Ymec0v<o3#rD3pF,7B:sHKOxkf[g__yA');
define('NONCE_KEY',        '1;=qGhuI]k$,e.EJ0-Cc6?)q3>Ldqv#7.GXiSv)[}.?8E]Pp{~RNVYg,b3?X;y^c');
define('AUTH_SALT',        '1@4fFy}-Hs*,C;f0+&w..%xSQ@7^<1_3>E^.PYt@&S1rATDb.A&9qn*q+[K.!n&x');
define('SECURE_AUTH_SALT', 'Y2lXM:O5(X=s*w00=9D4]0`4Vh%?$ts;~hZS3*ivP=$C{K?3KuLV`d_LS._DQm*%');
define('LOGGED_IN_SALT',   'e#@Ve,2JMy@a{oOdf^p9X:D<F$F<QDg`trtQf&>oEA:t.>AgwQ&X<C |1u(4oNqY');
define('NONCE_SALT',       'X2X?&{2ZX,@sxYO7/m//fbz V3l,*KR4(nzBv_b*4ZmW9`eZ?1U)1=&NFO}5%ox|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
