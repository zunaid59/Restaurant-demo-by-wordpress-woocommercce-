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
define('DB_NAME', 'newspaper');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'OSZ(FQS/.eTLq)fQTQO^6e`G5XlT#F[O:~`UE0V[!>e79#lZsw#,4lj4wJpy%cc}');
define('SECURE_AUTH_KEY',  '7z*(}[DrB+-R-BdIX2^Nl3~YSg8Z{|7>u^]c1g-F@Kp#t/_j#^6WW O,,k6Hh(P=');
define('LOGGED_IN_KEY',    '@5.,/# q&gx/]3?K>^(wRY7sQMb9YO^~jz35M8nLfm:ReOa-&i,C(m8>zYj~Vo#Y');
define('NONCE_KEY',        'mrClH@{&U4eF]f,NK.n2w#MWxEOX+zvf.Xmy>R~=dJ8GR!OkIaEshpDPD:8&-:SA');
define('AUTH_SALT',        ':kD2Zz;lY%- u`>mG9;ct%zCQO#PSAlOOiT SE%$N<EdsDTTS hO}tsIlo_/<6Az');
define('SECURE_AUTH_SALT', 'JV+%yB=eWN@_bIQ_&q>UnV8 g>*%vl?}^mODryt!&-I3*r$y-{w+`~EVw+Q=jM^G');
define('LOGGED_IN_SALT',   'Csp}qBGr:m8Xk0;f,r.353G)mhBN@T7[9HE@GlT7^AwM}0/jk n^mRvuCr8nx<,`');
define('NONCE_SALT',       '$uLLz;J[S/Dau>SLl^c:OWuJoKk>lOJj[G[Zs#z=UyNEAI51D[6|fJ;u&HDry]8{');

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
