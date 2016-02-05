<?php

/*

		Plugin Name: PHG Management Console 
		Plugin URI: http://yodogmarketing.com
		Tags: phg, yodog marketing 
		Description: Adds a management console for the PHG websites. Please use this only for the PHG websites. 
		Author: AK Nwede
		Version: 1.0.0
		Author URI: http://aeekay.com

*/

global $wpdb;

error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);

require_once('inc/dcwp_admin.php');

class dc_phgmgmtconsole {

	function __construct() {

	}

	function dc_phgmgmtconsole_init(){
		if(is_admin()) {
			$phgmgmtconsole_admin = new phgmgmtconsole_admin();
		}
	}

	/*
	 * Add custom CSS

	 */

	function header(){
		return;
	}

	

	function footer(){
		return;
	}

	

	function get_plugin_directory(){
		return plugins_url() . '/phg-plugin';	
	}
}

?>