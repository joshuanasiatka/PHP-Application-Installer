<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-config.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * wp-config.php file.
 *
 * Will also search for wp-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package WordPress
 */

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) . '/' );
define( 'SDCUST', ABSPATH . 'custom/' );

/** Check for config file */
if ( file_exists( ABSPATH . 'sd-config.php') ) {

	/** The config file resides in ABSPATH */
	require_once( ABSPATH . 'sd-config.php' );
	require_once( ABSPATH . 'app.php' );

} else {

	// A config file doesn't exist

	define( 'SDINC', 'sd-includes' );

	require_once( ABSPATH . SDINC . '/sd-functions.php' );

	$path = '/admin/setup-config.php';

	/*
	 * We're going to redirect to setup-config.php. While this shouldn't result
	 * in an infinite loop, that's a silly thing to assume, don't you think? If
	 * we're traveling in circles, our last-ditch effort is "Need more help?"
	 */
	if ( false === strpos( $_SERVER['REQUEST_URI'], 'setup-config' ) ) {
		header( 'Location: ' . $path );
		exit;
	}
}
