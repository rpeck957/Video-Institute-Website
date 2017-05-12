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
define('DB_NAME', 'videoinstitute');

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
define('AUTH_KEY',         'Q^)~^!Ymr>AxX36|({OAphk~_f[{nWkvv)wGY:Cw[m~.$p>01[&4Ldr,f{BrSkd?');
define('SECURE_AUTH_KEY',  ',zLHMVvFpH].Wh{O!5a:oY|L8|Q_}RYiw705lQ9x/hQOq^9T:o3Y]2$AFg<a=OJ2');
define('LOGGED_IN_KEY',    '0Tt%aoz`&`+>qVL=XjXukv_+p5y;/m4/K]@`P[%$5LL#J8<;SoCEV<$3w1thDs_V');
define('NONCE_KEY',        'zHF@ XtvvFP+@Pwus.gXFlx.z9IYc!lM ^5}w;%]=SE6$:QC$&FR]!Gi|)!c~p|t');
define('AUTH_SALT',        '-C^p|A=a@BaAlWCn- |3feF.xXE[z43VOyzl-e2*QvD/Z(?E<.rF0!c7r]r.0?v2');
define('SECURE_AUTH_SALT', 'HXe8P`l1.5GwiSW4Wr+lO[wcIS[,Bd~,G]`8466*?.X$@Bv,I:R.dRR-4JYnJeX?');
define('LOGGED_IN_SALT',   'IDb`[2n#R&buY:(VKck8T3FIM0]%bu&yg;Vc=H^LK>Xb!x!T5$mZ:/X}f@Qz_I=K');
define('NONCE_SALT',       '&#1VowqHyDp]#yy-wY&Qy=b1Fp^b^qe8wokK@&0n6gBxdLys7jj^LQ&CbKmg{Ya=');

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
