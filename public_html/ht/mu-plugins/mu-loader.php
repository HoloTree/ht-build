<?php
/*
 Plugin name: Load Mu-Plugins
 */

$vendor_dir = dirname( __FILE__ ) . '/vendor';

require_once( $vendor_dir . '/shelob9/caldera-forms/caldera-core.php');

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
