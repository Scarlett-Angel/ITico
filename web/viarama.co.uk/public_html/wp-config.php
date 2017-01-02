<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'viarama' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  'utf8_general_ci' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         '&76Zx&]*NPUBx;7(1:knHG?^41Yb}w|-<@n5-+uS+^lfYmYDRF7%Hik* Q-sVHs+');
define('SECURE_AUTH_KEY',  '_4q`x?N+>3.!}|8eI##K>F{J?pz8|WV:$|Zx2{+Ouj0Z1#fr<#BvJKPWT9V4 $-1');
define('LOGGED_IN_KEY',    '}H7q.7QjS-{]');
define('NONCE_SALT',       'rr7S@/?MeF%_{q~WR,SYBi9+Qh$6}aR?J?Et@F$(|C7+GcrJD,wHe+q|o5,Q=MY+');


/* Custom WordPress URL. */



/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');