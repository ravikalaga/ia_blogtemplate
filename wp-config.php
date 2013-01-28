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
define('DB_NAME', 'ravikalaga_blog');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'rck90210');

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
define('AUTH_KEY',         'cO|sIpznRa zH7c ~0G=Mdi8E}w!Jlb4W|0|CNK}`}MMhZSBA@ch$FEdB+sV4U@K');
define('SECURE_AUTH_KEY',  '-R1I)YhRZbtERWaP8s0}z6iI`O:F^URH;(N;.+|zi!b+])c@}3!0I0TDwvs*U/`2');
define('LOGGED_IN_KEY',    'I+I1`0KJ$c|;SC>+;Qn0a9tI|hNy0TYtbJgVA/W<IfMg3;0PYIf$OKNtf:exhXRW');
define('NONCE_KEY',        'E_CK xDNZiMIH;jKgLfV$K!d/Cpf{>l[tE6+lW)FR#KhaMHf84bSvBfT8$eh*98R');
define('AUTH_SALT',        '`O .|x~eY>:, J)q-k2wj8]$B+x(6~eKs+!SOi?.|v8|HMIG(fT,i-}vM=%O-.c-');
define('SECURE_AUTH_SALT', 'NWx_D$;goQ=,){P(2GrXh|L1zf]cj<@jdgxN/=*<~0skV3!hCP-,/ywNt#.I<= *');
define('LOGGED_IN_SALT',   'Hs}R 6F!~yyY5Y#g,u/~0v{e|Z&%0:-nxBs||PG:hzRm;H:rQg+Q*L*6qqzN6g.1');
define('NONCE_SALT',       '!DaMNclR*bSh8*`K5+z+#=)#LhL#jIW{ySzR35C<yo-Dj^()Ye>QUt9#~:xRH,SI');

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
