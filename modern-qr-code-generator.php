<?php
/**
 * @package QRCode Generator
 */
/*
Plugin Name: Modern QR Code Generator
Plugin URI: http://www.sumin-it.com/qr-code-generator
Description: 
Version: 1.0
Author: Sumon Sarker
Author URI: http://www.sumon-it.com/
License: GPLv2 or later
Text Domain: qrcode
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
//IF SomeOne Directly access plugin file
if(!defined('ABSPATH')){
    exit;
}
//Constant
define( 'QRCODE_VERSION', '1.0' );
define( 'QRCODE__MINIMUM_WP_VERSION', '4.0' );
define( 'QRCODE__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'QRCODE_DELETE_LIMIT', 100000 );

//Hook
register_activation_hook( __FILE__, 'plugin_activation' );
register_deactivation_hook( __FILE__,  'plugin_deactivation');

//Includes File
require_once (QRCODE__PLUGIN_DIR."/inc/plugin_activation_deactivation.php");
require_once (QRCODE__PLUGIN_DIR."/class/QrCode.php");
require_once (QRCODE__PLUGIN_DIR."/inc/main/qrlib.php");

function qr_code_widget() {
    register_widget( 'Qr_Code' ); // QrCode =>class name
}
add_action( 'widgets_init', 'qr_code_widget' );
