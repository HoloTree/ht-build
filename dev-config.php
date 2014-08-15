<?php
/**
 * WordPress configuration for development in VVV
 */

/**
 * DB Authenticate
 */
define( 'DB_NAME', 'htdev');
define( 'DB_USER', 'wp' );
define( 'DB_PASSWORD', 'wp' );
define( 'DB_HOST',  'localhost');

/**
 * Define URLs/ content directory
 */
$root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . '/ht-build/htdocs';
define( 'WP_SITEURL', 'http://holotree.dev/wp' );
define( 'WP_HOME', 'http://holotree.dev' );

/**
 * Custom Content Directory
 */
define( 'CONTENT_DIR', '/ht/' );
define( 'WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . CONTENT_DIR );

/**
 * DB settings
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

/**
 * Debug
 */
//HoloTree Debug mode
define( 'HT_DEV_MODE', true );
define( 'HT_NEW_VIEW', false );
define( 'HT_DEVICE', false );

//General debug
define( 'WP_DEBUG', true );
define( "WP_DEBUG_LOG", true );
define(	'FS_METHOD', 'direct');
define( 'SAVEQUERIES', true );

if ( defined( 'HT_DEV_MODE' ) && HT_DEV_MODE ) {
	define( 'WP_DEBUG_DISPLAY', true );
}
else {

	define( 'WP_DEBUG_DISPLAY', false );
}

//Pods debug
define( "PODS_DEVELOPER", true );
define( "PODS_GITHUB_UPDATE", true );
define( 'PODS_ALT_CACHE_TYPE', 'file' );

/**
 * Much memory, very resource
 */
define( 'WP_MAX_MEMORY_LIMIT', '-1' );


/**
 * Memcache
 *
 * @todo add memcache
 */
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );



/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY', '12345' );
define('SECURE_AUTH_KEY', '12345' );
define('LOGGED_IN_KEY', '12345' );
define('NONCE_KEY', '12345' );
define('AUTH_SALT', '12345' );
define('SECURE_AUTH_SALT', '12345' );
define('LOGGED_IN_SALT', '12345' );
define('NONCE_SALT', '12345' );

/**
 * Other Random Settings
 */
define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'DISABLE_WP_CRON', true );
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Bootstrap WordPress
 */
if ( ! defined('ABSPATH' ) ) {
	define('ABSPATH', $webroot_dir . '/wp/' );
}
