<?php 
error_reporting(0);
/*
* Plugin Name: Appointment System
* Plugin URI: http://www.thinkbizsolutions.com
* Description: Appointment System
* Version: 1.0.0
* Author:Umakant Yadav
* Author URI: http://www.thinkbizsolutions.com
* License: GPL2
* Text Domain: Appointment System
* Domain Path: /languages
*/
//Define Constants
if ( !defined('AP_PLUGIN_DIR')) {
   define('AP_PLUGIN_DIR', plugin_dir_url( __FILE__ ));
}
if ( !defined('AP_PLUGIN_DIR_PATH')) {
   define('AP_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ));
}
//echo $_SERVER['HTTP_REFERER'];
//die;

function ap_plugin_stylesheet() {
   wp_enqueue_style('ap-bootstrap', AP_PLUGIN_DIR. 'assets/css/bootstrap.min.css');
   //wp_enqueue_style('ap-css', AP_PLUGIN_DIR. 'assets/css/ap-style.css');
   wp_enqueue_style('jquery-ui.css', AP_PLUGIN_DIR. 'assets/css/jquery-ui.css');
   wp_enqueue_style('gijgo.min.css', AP_PLUGIN_DIR. 'assets/css/gijgo.min.css');
   wp_enqueue_style('jquery.dataTables.min.css', AP_PLUGIN_DIR. 'assets/css/jquery.dataTables.min.css');
   wp_enqueue_style('ap-css', AP_PLUGIN_DIR. 'assets/css/ap-style.css');

   wp_enqueue_script('jquery-1.12.4.js', AP_PLUGIN_DIR. 'assets/js/jquery-1.12.4.js');
   wp_enqueue_script('jquery.min.js', AP_PLUGIN_DIR. 'assets/js/jquery.min.js','',false);
   wp_enqueue_script('popper.min.js', AP_PLUGIN_DIR. 'assets/js/popper.min.js','',false);
   wp_enqueue_script('bootstrap.min.js', AP_PLUGIN_DIR. 'assets/js/bootstrap.min.js','',false);
   wp_enqueue_script('gijgo.min.js', AP_PLUGIN_DIR. 'assets/js/gijgo.min.js');
   wp_enqueue_script('jquery-ui.js', AP_PLUGIN_DIR. 'assets/js/jquery-ui.js' ,'',false);
   wp_enqueue_script('jquery.dataTables.min.js', AP_PLUGIN_DIR. 'assets/js/jquery.dataTables.min.js' ,'',false);
   wp_enqueue_script('jquery.sweetalert.min.js', AP_PLUGIN_DIR. 'assets/js/sweetalert.min.js' ,'',false);
}
add_action('init', 'ap_plugin_stylesheet'); //admin_enqueue_scripts  init    
register_activation_hook( __FILE__, 'crudOperationsTable');
require AP_PLUGIN_DIR_PATH. 'ap-db.php';
require AP_PLUGIN_DIR_PATH. 'ap-header.php';
require AP_PLUGIN_DIR_PATH. 'ap-menu.php';
require AP_PLUGIN_DIR_PATH. 'ap-location.php';
require AP_PLUGIN_DIR_PATH. 'ap-services.php';
require AP_PLUGIN_DIR_PATH. 'ap-connection-price.php'; 
require AP_PLUGIN_DIR_PATH. 'ap-connection.php'; 
require AP_PLUGIN_DIR_PATH. 'ap-appointment.php';
require AP_PLUGIN_DIR_PATH. 'ap-engineer.php';
require AP_PLUGIN_DIR_PATH. 'ap_add_appointment.php';
require AP_PLUGIN_DIR_PATH. 'view_appointment.php';
require AP_PLUGIN_DIR_PATH. 'view_appointment_location.php';
require AP_PLUGIN_DIR_PATH. 'ap_admin_add_appointment.php';
require AP_PLUGIN_DIR_PATH. 'wps_theme_func_pay_appointment.php';
require AP_PLUGIN_DIR_PATH. 'success.php';
function ap_appointment(){
   wps_theme_func_addnew();
}
add_shortcode('new_appointment','ap_appointment');
function ap_appointment_pay(){
   wps_theme_func_pay_appointment();
}
add_shortcode('new_appointment_payment','ap_appointment_pay');
function ap_appointment_pay_sucess(){
   wps_theme_func_pay_sucess();
}
add_shortcode('appointment_payment_sucess','ap_appointment_pay_sucess');