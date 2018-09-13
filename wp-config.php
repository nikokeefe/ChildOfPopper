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
define('DB_NAME', 'childofpopper');

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
define('AUTH_KEY',         'psS#10YgR7g-&St^U*6MXORq*Y}fy*:_EepCE]J3anbb_a6%d`_,7z.PQ[dPMZzQ');
define('SECURE_AUTH_KEY',  'M/@<4~)8?y}g!d:xO5`>;Y9}rk:QmKMRaFITgJgu&kPw|7j]IbK_!96azFNPjBu.');
define('LOGGED_IN_KEY',    '@+ruezP)(uc|9^sLcN$%7wkMECU(N.c5a(IHCw,sr:n3^DeH!`$[aYx8DQ?0yUTT');
define('NONCE_KEY',        'nCk7^;Bq[?<|z*~S(uu>Z`L2^YUCyF{ rt6)FHbp@ho@~RWn}$B,)5vfMSmc+c+#');
define('AUTH_SALT',        ';1llh;#dqJB]:w2:mm>K>Y-}W$^UUx)`A0u@@(cK^d?]7BqQ$?VjB!Qa28 L?uZ8');
define('SECURE_AUTH_SALT', 'h)HHdqZH&5dLP6|35&Q/Nf{%48)Z4aswC27-}Q(iLPQ<c?6z.J_b$-jy}(W5ZwO4');
define('LOGGED_IN_SALT',   '%}bHM|%*s&MOx6+yalC.*(bJF`Q|KhVtPLGP$k;.=K}cs2<}-jxnAYkln=Yn~]LE');
define('NONCE_SALT',       '0Y^zQPVm4B=#f#4wIk`J55%(hL4V#Rh{zOc=4v]8kTc!FbXa%X{roukh.}:Ri1(K');

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
