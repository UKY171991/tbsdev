<?php
function theme_options_panel(){
  add_menu_page('Appointment System', 'Appointment System', 'manage_options', 'enviro-appointment-system', 'wps_theme_func_appointment','dashicons-calendar-alt',59);
  add_submenu_page( 'enviro-appointment-system', 'Appointment', 'Appointment', 'manage_options', 'enviro-appointment-system', 'wps_theme_func_appointment');
  add_submenu_page( 'enviro-appointment-system', 'Location', 'Location', 'manage_options', 'appointment-system-location', 'wps_theme_func_locations');
  add_submenu_page( 'enviro-appointment-system', 'Servicess', 'Services', 'manage_options', 'appointment-system-services', 'wps_theme_func_services');
  add_submenu_page( 'enviro-appointment-system', 'Connection', 'Connection', 'manage_options', 'appointment-system-connection', 'wps_theme_func_connection');
  
  add_submenu_page( 'enviro-appointment-system', 'Connection Price', 'Connection Price', 'manage_options', 'appointment-system-connection-price', 'wps_theme_func_connection_price');  //wps_theme_func_connection_price
  
  add_submenu_page( 'enviro-appointment-system', 'Engineer', 'Engineer', 'manage_options', 'appointment-system-engineer', 'wps_theme_func_engineer');
  add_submenu_page( 'enviro-appointment-system', 'Add new', 'Add new', 'manage_options', 'appointment-system-addnew', 'wps_theme_func_addnew_admin');
  add_submenu_page( '', '', '', 'manage_options', 'ap-view-appointment', 'wps_theme_func_view_appointment');
  add_submenu_page( '', '', '', 'manage_options', 'ap-view-appointment-location', 'wps_theme_func_view_appointment_location');
  add_submenu_page( '', '', '', 'manage_options', 'ap-pay-appointment', 'wps_theme_func_pay_appointment');
}
add_action('admin_menu', 'theme_options_panel');
?>