<?php
define( 'CONTENT_DIR', '/ht' );
define( 'WP_CONTENT_DIR', WP_WEBROOT_DIR . CONTENT_DIR );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . CONTENT_DIR );

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
	if ( defined( 'HT_DEV_MODE' ) && HT_DEV_MODE ) {
		define( 'WP_DEBUG_DISPLAY', true );
	}
	else {
		define( 'WP_DEBUG_DISPLAY', false );
	}
}

if ( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', 'localhost' );
}


define( 'WP_MEMORY_LIMIT', '512M' );

if ( ! defined( 'WP_DEBUG_LOG') ) {
	define( 'WP_DEBUG_LOG', true );
}

if ( ! defined ( 'WP_CACHE' ) && ! WP_LOCAL_DEV  ) {
//	define( 'WP_CACHE', true );
}

if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) ) {
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );
}


define( 'PODS_ALT_CACHE_TYPE', 'file' );

define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'DISABLE_WP_CRON', true );
define( 'DISALLOW_FILE_EDIT', true );


if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', WP_WEBROOT_DIR . '/wp/' );
}


