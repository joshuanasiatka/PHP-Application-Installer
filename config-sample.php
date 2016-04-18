<?php
/*
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Still in [Alpha] Development

Thank you for using Bitcraft Service Desk, we appreciate you trusting us with your ITSM needs

This is a generated file from system settings. Modifying this file can harm the integrity of the
application.
*/
$conf = array (
  /* --- MySQL Settings --- */
  /**
   * @NOTE SQL settings can be manually edited here
   *       just change host, user, pass, name, etc. as needed
   */
  'sql' => array (
    'host'    => 'DB_HOSTNAME',
    'user'    => 'DB_USERNAME',
    'pass'    => 'DB_PASSWORD',
    'name'    => 'DB_DBNAME',
    'prefix'  => 'DB_PREFIX'
  ),

  /* --- Security Settings --- */
  /**
   * @NOTE Not implemented yet, for future use
   */
  'security' => array (
    'restrict_ips'      => false,
    'allowed_networks'  => array()
  ),

  /* --- Theme Design Options --- */
  /**
   * @NOTE Please use the admin panel to modify these
   *       settings
   */
  'customize' => array (
    'skin'            => 'purple',
    'darkmode'        => 'dark',
    'sysemail'        => 'support@bitcraftlabs.net',
    'main_logo'       => 'bcl_logo.png',
    'login_size'      => 'medium',
    'main_logo_small' => 'bcl_logo_small.png',
    'main_logo_top'   => 'bcl_logo_top_light3.png',
  ),

  /* --- Site Settings --- */
  'site' => array (
    'company_name'            => 'Bitcraft Labs',
    /**
     * @var formatted_company_name is only used on the auth pages
     */
    'formatted_company_name'  => '<strong>ServiceDesk</strong> Pro',
    /**
     * @var url is the REQUEST_URI hardcorded for direct link references
     */
    'url'                     => 'http://localhost/',
    'maintenance_mode'        => 'on',
    'maintenance_msg'         => 'Please bear with us as this software is extremely alpha. Maintenance will be taking place always.',
    'maintenance_show'        => 'on',
    'AUTH_KEY'								=> 'AUTHKEY_PHRASE',
    'RAND_KEY'								=> 'RANDKEY_PHRASE'
  )
)
?>
