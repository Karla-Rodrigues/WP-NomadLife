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
define('AUTH_KEY',         'sEF1R3g+Ezhrs92r6HXS5y46HnkUBk4HI0gzQGV9cMTRmGy0apIQlbT62O1kmHdB/zcTTQX3xMwwC1ZN3dGL9g==');
define('SECURE_AUTH_KEY',  'l/8/h03jBvYffTIfQyORXrwwMVD6XXVKw4TwDH6j+Jr+i9NKhDy+me7OXnVPiJF/iiKlMo0ccvaGnKqMd3o15A==');
define('LOGGED_IN_KEY',    'P0J4khTVR2zh1QPV7pB5actmPNabmEJcYjlAkRe1M0Zdpv/jiQvIyvjAVzTOIRC+LRaRw57rAL/ZJvin+LRsVg==');
define('NONCE_KEY',        '15I//kUiPACfHw34TN/HnT/vlx7DLH6+f5vkPvrjXWM9at4jHJpQqL5o3SeCIA2aFu3VApltlGavMSJACReK4w==');
define('AUTH_SALT',        '9wrwh8PnN50V1bTzePHLy51BJ0E2PX780EXi7ZMVgu7rOAEF7b9gHO789YEb9qqxqv42L+8G2i+wX5Q5ZgXvIQ==');
define('SECURE_AUTH_SALT', '0kmaJ8OsBc9UORa0598qIf66OO+7RH78+0Hs28rNYcngE/+tBn6SCIjJ9OacDi+yKBU4WelDgbLtiTwFFKBmPw==');
define('LOGGED_IN_SALT',   'aTwWed7c3qUuhFYr+nGsbFm+RIwUqO1W7m+lF5gerX5jQRDdKwDPmO5w1MZgdur8WbzdGmxJOGepzTMBsa0yIg==');
define('NONCE_SALT',       'jypbI01KJe+Q4YwqySstGPXwqyX9nhUxkqqYmWk+m8XS/rr2+9zZEdjcpNcQDiQn4+0JtTquWcvaH9edoeKDxA==');

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
