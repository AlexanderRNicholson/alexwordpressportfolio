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
define('DB_NAME', 'learningWordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '19sacha87');

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
define('AUTH_KEY',         ';yH]7f&9P.H#(/@RDWGu#/7cOvZ8AB4H4h!AapF`Q$Mf)C/Swhz|-DMLG*t<loUp');
define('SECURE_AUTH_KEY',  'IB=-cr=@`e6*;oUr!J!Ed]}M!=@)Ms~~1SJ1>MB1Y~D2==ZE?[P_CFCFp;$^3WzH');
define('LOGGED_IN_KEY',    'c yZ/:X9@Zz7o7Kh76ET)(gS<2UcIL-3Wn5zj]&a^iN:kIx5o_9hB.B3c^A(,h@_');
define('NONCE_KEY',        'goYnbwc.MQ6ND%WK*1gn(K,:xF.|p1RAUz<.?/6a{HNW&:$0I[we=3(Tg&~t%j87');
define('AUTH_SALT',        'Yq/Sb)kLjvoTi4+9)Z)w+m8tL=+F0Rm#Q#CDU?4A6upVsj+tpJ?e/<,f>0KhF|wt');
define('SECURE_AUTH_SALT', '7GPhM[*-K&w:+6pC.}2(LZ[;/H(G >e6w%{ejc%Ua#Y9lWP0W5$mec. OrnQ&8GD');
define('LOGGED_IN_SALT',   'Ggs$HPUUN)eR$*ulup]Yc%Z*3QFe)fmJ&a1XEK?/H;7%29=v&rM:hiX*t8#)U]Ri');
define('NONCE_SALT',       'D3OI0NP/16lQoC^tD_ -lA/<0OpD]s3aM6/_J93Ts-tk8 y<-mp>]Cd5GNd`&-}m');

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

define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
