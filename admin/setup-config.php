<?php
/**
 * Retrieves and creates the sd-config.php file.
 *
 * The permissions for the base directory must allow for writing files in order
 * for the sd-config.php to be created using this page.
 *
 * @package Bitcraft Service Desk
 * @subpackage Administration
 */

define( 'ABSPATH', dirname( dirname( __FILE__ ) ) . '/' );
define( 'SDCUST', ABSPATH . 'custom/' );
require_once ( ABSPATH . 'sd-includes/sd-functions.php' );
$conf = new Configure();

if ( file_exists( ABSPATH . 'config-sample.php' ) )
	$config_file = file( ABSPATH . 'config-sample.php' );
else {
	$conf->set_error('Hmm, it appears you don&apos;t have a config-sample.php file. I need this file to work from. Please re-upload this file to your Bitcraft Service Desk installation.' );
	echo $conf->get_error();
	exit;
}

// Check if config.php has been created
if ( file_exists( SDCUST. 'config.php' )) {
	$conf->set_error("<p>The file 'config.php' already exists. If you need to reset any of the configuration items in this file, please delete it first.</p>");
	echo $conf->get_error();
	exit;
}

$step = (int) $_GET['step'];

if (!$step || ($step < 1)) {
	$conf->loadStep(0);
} else if ($step == 1) {
	$conf->loadStep(1);
} else if ($step == 2) {
	$conf->loadStep(2);
} else if ($step == 3) {
	$conf->loadStep(3);
}
