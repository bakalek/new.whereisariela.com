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
define('DB_NAME', 'whereisariela');

/** MySQL database username */
define('DB_USER', 'whereisarielausr');

/** MySQL database password */
define('DB_PASSWORD', 'slEYiumb9413wI');

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
define('AUTH_KEY',         'r!O=I,Uz*K<}S/<tZ|+l4G^3z)9cc9cNTa>FkOm!U59l0,[cL48{>Gw0 ;8R;7b;');
define('SECURE_AUTH_KEY',  '3oHZ3<nOGkA&dvRlg%W$lQv*2tmZ-2xA,CLKfTs)120^Rq1.EruM,g9AxMrl5X7?');
define('LOGGED_IN_KEY',    '1YjK/wZOLg?PKHca$Sd3m($G[n-k&G|xw%].u:>2jn9vunJ6lk/1+? I~{p}?!M~');
define('NONCE_KEY',        ',nkKm#lO7T{;.@u`L.RqWO}2bW2(*PSPdm@gkZR3$]k7DcNX7;8SVnljAMR<svb`');
define('AUTH_SALT',        '3EBH-^R4D/kjJ{#?]Foi}sy$+A=7~%-RZwJ0?B7B4+B7^/(C)gs=/f$=b(*!XS{=');
define('SECURE_AUTH_SALT', 'XqcN2_Bpj@A8t}1~<KeG#On&^Wlmt#WK=VdFr[[/TX[-NzJU==>0]fE=f0=^&]0,');
define('LOGGED_IN_SALT',   '(!,f^^l`GIJHl:^!$7X+~7:Oe/Rbgku0!%oEXHB.:Gg1OiIo!4](i*c$0i>%wM(N');
define('NONCE_SALT',       '~?%d/Xsw]V:)bi<hzW`[AVMV?CS}#en=xTI%%:7JW+mY|ZmZ}<u1vGTX(p_E_JT}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
