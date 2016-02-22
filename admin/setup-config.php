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
require_once ( ABSPATH . 'sd-includes/sd-functions.php' );
$conf = new Configure();

if ( file_exists( ABSPATH . 'sd-config-sample.php' ) )
	$config_file = file( ABSPATH . 'sd-config-sample.php' );
else
	$conf->set_error('Hmm, it appears you don&apos;t have an sd-config-sample.php file. I need this file to work from. Please re-upload this file to your Bitcraft Service Desk installation.' );

// Check if sd-config.php has been created
if ( file_exists( ABSPATH . 'sd-config.php' ) )
	$con->set_error("<p>The file 'sd-config.php' already exists. If you need to reset any of the configuration items in this file, please delete it first.</p>"
);

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