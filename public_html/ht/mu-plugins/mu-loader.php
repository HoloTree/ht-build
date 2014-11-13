<?php
/*
 Plugin name: Load Mu-Plugins
 */

$vendor_dir = dirname( __FILE__ ) . '/vendor';

/**
 * Path to vendor dir for project
 */
if ( ! defined( 'VENDOR_DIR' ) ) {
	define( 'VENDOR_DIR', $vendor_dir );
}

/**
 * Path to autloader for project
 */
if ( ! defined( 'AUTOLOADER' ) ) {
	define( 'AUTOLOADER', dirname( __FILE__ ). 'autoload.php'  );
}
