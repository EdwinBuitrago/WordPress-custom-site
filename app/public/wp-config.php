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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KsNi34v1hi/fu23rDR1FxKE1IP2+FZGP4DAWblyWDVWK0b6hzsl9v5FzTgC9NCuOrSnbp+WPGEnJy7mJZzvcpA==');
define('SECURE_AUTH_KEY',  'OJ11cJ+YGlQaH2AXc35NqDuUoHkdcRL7gJLQw5tF78UUDr+NrAGLUYxjNAYR8i//HoNkpCLvaR6aneBHUZmFgA==');
define('LOGGED_IN_KEY',    'DPX6+jSRxlYmehLlDLelrJqYrlE6HcllCUXmxqVPAFJZcyeqUGitcIS/nBW2HWbKIaOpGr6u3CIc2VLmuzjo6w==');
define('NONCE_KEY',        'BQH3zyj7nLb1lOf7Os55otg5BcP9rQo8imDIyRdkpyLRRrpryiVNvgFXIiSVyRuB3BF4AeCI6jWbcA3MMzQguw==');
define('AUTH_SALT',        'rdGNI5rFoUIB4VXZGPY77LNtJjf9ymygpNL2kA8ZB/ysy9kq8pUm4lyWTDWlYiY5gKn4Qx2l4TdqItKrFFtL0Q==');
define('SECURE_AUTH_SALT', '1br6HoICWMgxhN36GG02L26BoX2aDTFm6zyTXsm5JVdmzfgrc8F8BYCqWvwSxbpHfXHadRI5qYkvehOnOltqQg==');
define('LOGGED_IN_SALT',   'NtoXnrSFRzbz0g0EDmEO7Su5SeFPMsqgE9J3tVwX0JWLDz6e4eXKV0LlmxrQKcMCT49m278XeruT2tZKnS6yLg==');
define('NONCE_SALT',       '/LzgwBAnyVm1gBbs3s+o8kJlyakKA3/Fv4yec7yrO83YYXiWUdT/QmjNmgg88ytWV9uDwPNcv14Tu/w4aitvKA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
