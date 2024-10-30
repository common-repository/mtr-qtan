<?php
/*
Plugin Name: wp-qtan
Version: 5.1.0
Description: plugin hỗ trợ flance
Author: Vô Minh
Plugin URI: http://muatocroi.com
Text Domain: wp-flance
Domain Path: /lang
*/

include dirname( __FILE__ ) . '/scb/load.php';

function _qtan_init() {
	require_once dirname( __FILE__ ) . '/core.php';

    Qtan_Core::init();
}
scb_init( '_qtan_init' );

