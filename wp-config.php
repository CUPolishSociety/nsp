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
define('DB_NAME', 'libraring_nsp_wp');

/** MySQL database username */
define('DB_USER', 'libraring_nsp_wp');

/** MySQL database password */
define('DB_PASSWORD', 'ukFzWMIJ');

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
define('AUTH_KEY', '3UTsfrcugcqJg1qokbMwABbITeDz5wTnuTyRrfkmeioTF6u5lzgPlnQiW7Qs0Bu8');
define('SECURE_AUTH_KEY', '5u25VAe8pO8jQLuhwk487Xv2IP5UHc3NjFW6k9iF4xoQjxxwsR7ga0qB7X6YMJOS');
define('LOGGED_IN_KEY', '7Rveii9Rfh2NMGYC9yqPbBmBVjoV5iykDiQ6a3gmoD2p6xduRsUXXXNMSYJnPEkx');
define('NONCE_KEY', 'vdelh3jaZBL1Wt6Yj8pXoKKxqDTQztWc6aVyHhNnzfo1emOhI5Kn7l1NBUJMPxqV');
define('AUTH_SALT', 'qOdFSClL2RpUwgv6k21LjelCUhp5nn1BJlXFLENhaJzCUrdgEvv52AFknYEWNnds');
define('SECURE_AUTH_SALT', 'CD3YmNc6EJgnE6JKRQMeCOgQnxHV4InnJSfi6KpBcCNTxB1jFRrKgWMms1L45vLN');
define('LOGGED_IN_SALT', 'sHgto8l8JtBKCxIF9ZtRH1Y2dXqPAVibUmFM0hnd2AvWZaguyRjjx6qF5Bvuyp3n');
define('NONCE_SALT', 'SiRxPut5yoZmUxLHH6PZuej9dik8OW10sGAzWkBYLYS8LGbYt9gY05lSNTljsyla');

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
define('WP_HOME','http://www.nextsteppoland.org');
define('WP_SITEURL','http://www.nextsteppoland.org');
