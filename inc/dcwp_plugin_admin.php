<?php

/**
* Admin DC plugins
* Version 1.0.1
*/

if(!class_exists('dcwp_plugin_admin_dcpmc')) {
	class dcwp_plugin_admin_dcpmc {

		var $hook 		= '';
		var $filename	= '';
		var $longname	= '';
		var $shortname	= '';
		var $optionname = '';
		var $homepage	= '';
		var $accesslvl	= 'manage_options';

		function __construct() {
			add_filter("plugin_action_links_{$this->filename}", array(&$this,'add_settings_link'));
			add_action('admin_menu', array(&$this,'add_option_page'));
			add_action("admin_init",array(&$this,'add_admin_styles'));
			add_action("admin_init",array(&$this,'add_admin_scripts'));
		}

		function add_admin_styles() {
			//wp_enqueue_style("dcwss_admin_css", plugins_url() . "/wordpress-social-stream/css/dcwss_admin.css");
		}

		function add_admin_scripts() {
			//wp_enqueue_script('postbox');
			//wp_enqueue_script('jquery');
			//wp_enqueue_script('dcwss_jquery_admin', plugins_url() . '/wordpress-social-stream/inc/js/jquery.dcwss.admin.js');
		}

		function add_option_page() {
			add_menu_page($this->longname, 'PHG Management Console', $this->accesslvl, $this->hook, array(&$this,'option_page'));
		}

		function add_settings_link($links) { 
			$settings_link = '<a href="options-general.php?page='.$this->hook.'">Settings</a>'; 
			array_unshift($links, $settings_link); 
			return $links; 
		}

		function close_admin_page() {

		}

	}

}