<?php
/** 
 * Loads the Service Desk environment
 *
 * @package Bitcraft Service Desk
 */

if ( !isset($sd_did_header) ) {

	$sd_did_header = true;

	require_once( dirname(__FILE__) . '/sd-load.php' );

}