<?php
define(  'WP_WEBROOT_DIR',  dirname( __FILE__ ) );

//define locations for configs
$local_config = WP_WEBROOT_DIR . '/dev-config.php';
$prod_config = WP_WEBROOT_DIR . '/production-config.php';

//use local-config if we have one
if ( file_exists( $local_config ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( $local_config  );
}
else{

	//attempt to load production-config
	if ( file_exists( $prod_config ) ) {
		define( 'WP_LOCAL_DEV', false );
		include( $prod_config );
	}
	else {
		//@TODO include a static HTML fallback file before dying
		die( 'No config found:( Much saddness, very failure.' );
	}
}

require_once( dirname( __FILE__ ). '/application.php' );
require_once( ABSPATH . 'wp-settings.php');
