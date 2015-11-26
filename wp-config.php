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
define('DB_NAME', 'paw_ux');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '1|7k51kkmR[CbZp,x9,I6Wrkhi;Chn4iMV+?2iAo!x 3=iSIjO,K/N y$ljVg*&}');
define('SECURE_AUTH_KEY',  'I4K?@P[t{xX<Z7aw+tg!o;f7Cn2J ~6N@g(}7OVD |7kP4|+`GG7q+E|)A6:l&NU');
define('LOGGED_IN_KEY',    'PLHn2ZzDCsL<((l-{zc&2`wp(HovM3FV1{w7(fw*!Lpjcn$,;m}tA:zvs&L%CU 6');
define('NONCE_KEY',        '-ZKD|`gxmYS3[;?yQhj!k2wAI; &+Ue9!So#6|KS[UgeNdwjdLFFA|yZ6^d20F#1');
define('AUTH_SALT',        'csZ<w|@M(y7T3+KDR}GPe.t9t =nyU!x6t;1N0jU<N%~Tjjg@O>{4(B*dG_spQ2v');
define('SECURE_AUTH_SALT', '4|/i| w2:l^zq<dkb}N~F8QP]OTc3/%91n]FXxO2{%nF!&-HWjcT/=/_{0,2O2Zk');
define('LOGGED_IN_SALT',   'H~eh+#OZ6EhuPevHtA+1 SG`~+sE|>99hu|5$Ih$Q|hL@@sx=C2m+}E+5<y.Uj |');
define('NONCE_SALT',       'h|v:zPi&Rq3X-#UGF^]#voEp9gdCH1|)q6.7WrB.ER7BZdbZ:I]6Vag(wl&l2+py');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jkl_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
