<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thenudebkk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'CJ$}|E6y+r6o)AX~`1{R=^qvj#$:f&RxCu-^kD|g1-BISGx+=Pn6BgKqdlGZR?lk');
define('SECURE_AUTH_KEY',  'H]5B!h+bHm0>RNWK03s%luxvgb!b1gc*}>,/^MWc%[[];>Hyv22W5B-,@*<7L;{3');
define('LOGGED_IN_KEY',    'J|=Y:y]a.P*}}TMOs~~#rN-s?R^W#?r;|rV>kmg>^#E9otPjBMkoIGasoii[tHT.');
define('NONCE_KEY',        'L%|wk^AJ<M7<}-Qk6l9pTPOQm7RK&g5/g Eh;-hl</04|`7(iq]UC8IENp_0qPJr');
define('AUTH_SALT',        '~^3TZWzM,3]QQ!RFaSIspCO7 5-n7VN7Z-,an+PHkRh1 iBHH#15&&|OL76:nX?o');
define('SECURE_AUTH_SALT', 'JyGHGI|TkgT%Vdnjr}NFP}pEu(<a*Kb5-d]au9^n1ScSK:26Dz$J-b~$`@P4KW=4');
define('LOGGED_IN_SALT',   '$H-!R4:{Q_[:z]2O4*DJ!P^bDN0|b[18T(tWPJmZ{-&VFc;eP d5*{28c)V_n#a_');
define('NONCE_SALT',       'kr-qh[o+Uy<+I0])jbV9*K1C4=+{jWPq_+GDQ8~N5.7ER.+il<o~QMw pJh6@P0I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
