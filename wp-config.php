<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sourasis_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true);

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
define( 'AUTH_KEY',         'Wy>+Gk*gG.#s6,|~ R@m!a#,@0g/oVLEW70&G>+vgp5yM)+Y$r8D;&fFS<~[3Y=;' );
define( 'SECURE_AUTH_KEY',  'W|<|C!x%k)Ly:Y6mTWL$7C^jG,b(hjAblydsK.+*T~n+LF>g!FJp8=?lQj1N {. ' );
define( 'LOGGED_IN_KEY',    '*qC0HDk>Y<[0}8Bs/L&(dgOyk_Pa2V5cYDHaIF9iBz cR<=YLM<]0sNtz87ETd4X' );
define( 'NONCE_KEY',        '>/v!$t!99I!Js/@cJ),!_%4cdF{ShT5in/mish>Q&.2OLA%z<sMQU(PfKsDT^gHQ' );
define( 'AUTH_SALT',        '!;RS lSHIT?Hl/{irJcbeO[5$d^vK#mwTYpX`)Iu/Q}<uO_Zm[&x;vK>,~:mBany' );
define( 'SECURE_AUTH_SALT', '*hIk7Q~NJqSWJmOK5d$@#GOZq|fq$`Ymhx o#r=)UV#w&@YpI2z97|R8g!B#zL:*' );
define( 'LOGGED_IN_SALT',   'w0}+o+Gfaw2m][$%R8}Bq]3v@zkOkK@q&Epe27Qs fV|~X{2b{a%&-lE5`*N~;,,' );
define( 'NONCE_SALT',       '=zIhc|&E|XRiujb%7^(:e`3)`t~I(tbH0&hakKVc>$A]{R4ZmTPgA-r&)iu[i)Dg' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
