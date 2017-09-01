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
define('DB_NAME', 'ipad-05');

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
define('AUTH_KEY',         'k~`8G<_6=-AfKL;K;d48TRE$ -Yi)-fu(,tAKcr_4L7h=tR0AK ?V)P+>]yqyTgL');
define('SECURE_AUTH_KEY',  '?I=<j()|OGEpu0awHWDk~c%$c,`iVO1z(%X0uct}MzG+p5XgIK;0{DAeAvMQlU^p');
define('LOGGED_IN_KEY',    'x]1.?,FWYLbhT`3dPK.d OrPwovI0b@3&&Zk-{,^{$Xba|~J@]^lyi+.JiQHN-+S');
define('NONCE_KEY',        '2dS*UA(bH XOY.|J9Z/Mmkg1wd`.3a3>!*/L1yUmYZ]j=;%v{wG%d#BbfWp b4Vv');
define('AUTH_SALT',        '=sUl%-jPW<5l*p]8`)%e:`Q&waN]U8;L93Gq:rPc_?@VrwujCUcLH)%znL$-Dl|A');
define('SECURE_AUTH_SALT', 'BakoO;X.s,086.9wKB Tqa1):6]Q?!coMVqcXw9w`8lrbID<`ZKB5uO7bm~;1T&o');
define('LOGGED_IN_SALT',   'm+SB<;^hsAJVZO>$3#qMcEjwOh-GRa8{LK>^:CxJ,@hKa@Wo[&4;GV$/T`x5f{|&');
define('NONCE_SALT',       '+Hyfxe5R/+K[_#7^(RE);V!5`)#apW`-:~<o@@kJ1=KY(,^!l_Cm|`>9O,qKM:Q3');

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
