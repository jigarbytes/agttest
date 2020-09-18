<?php
/*
Plugin Name: AGT AUTO UPDATE
Plugin URI: http://www.bytestechnolab.com/finale3d
description: a plugin to create awesomeness and spread joy
Version: 5.3.0
Author: BytesTeam
Text Domain: finale3d
Domain Path: languages
Author URI: http://bytestechnolab.com
License: GPL2
*/

if (!defined('ABSPATH')){
	die('<h3>Direct access to this file do not allow!</h3>');
}

if (!function_exists('get_plugin_data')) {
	require_once (ABSPATH . 'wp-admin/includes/plugin.php');
}


require 'vendor/autoload.php';
