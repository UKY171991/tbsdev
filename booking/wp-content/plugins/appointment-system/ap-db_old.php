<?php
function crudOperationsTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_name = $wpdb->prefix . 'ap_location';
  $sql = "CREATE TABLE `$table_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) DEFAULT NULL,
  `address` varchar(220) DEFAULT NULL,
  `location` varchar(220) DEFAULT NULL,
  `location_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
  $table_services = $wpdb->prefix . 'ap_services';
  $sql = "CREATE TABLE `$table_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) DEFAULT NULL,
  `duration` varchar(220) DEFAULT NULL,
  `slot_step` varchar(220) DEFAULT NULL,
  `price` varchar(220) DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_services'") != $table_services) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  } 
  $table_connection = $wpdb->prefix . 'ap_connection';
  $sql = "CREATE TABLE `$table_connection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(220) DEFAULT NULL,
  `service` varchar(220) DEFAULT NULL,
  `day_of_week` varchar(220) DEFAULT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `day_from` DATE DEFAULT NULL,
  `day_to` DATE DEFAULT NULL,
  `is_working` varchar(220) DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_connection'") != $table_connection) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);}
    /*This function create appointment table*/
     $table_appointment = $wpdb->prefix . 'ap_appointment';
     $sql = "CREATE TABLE `$table_appointment` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `location_id` int(11) NOT NULL,
     `service_id` int(11) NOT NULL,
     `number_service` int(11) NOT NULL,
     `start_time` time  NOT NULL,
     `end_time` time  NOT NULL,
     `time_schedule` varchar(250) DEFAULT NULL,
     `booking_date` date NOT NULL,
     `price` decimal(10,2) NOT NULL,
     `created` date  NOT NULL,
     `name` varchar(250) DEFAULT NULL,
     `phone` varchar(250) DEFAULT NULL,
     `road_name` varchar(250) DEFAULT NULL,
     `country` varchar(250) DEFAULT NULL,
     `email` varchar(220) DEFAULT NULL,
     `house_name` varchar(220) DEFAULT NULL,
     `town` varchar(220) DEFAULT NULL,
     `post_code` varchar(220) DEFAULT NULL,
     `description` text DEFAULT NULL,
     `status` text DEFAULT NULL,
     PRIMARY KEY(id)
     ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
     ";
     if ($wpdb->get_var("SHOW TABLES LIKE '$table_appointment'") != $table_appointment) {
       require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
       dbDelta($sql);
 }$ap_payment = $wpdb->prefix . 'ap_payment';
  $sql = "CREATE TABLE `$ap_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(220) DEFAULT NULL,
  `booking_id` varchar(220) DEFAULT NULL,
  `payment_status` varchar(220) DEFAULT NULL,
  `payment_amount` double(10,2) NOT NULL,
  `payment_currency` varchar(220) DEFAULT NULL,
  `txn_id` varchar(220) DEFAULT NULL,
  `create_at` timestamp on update CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$ap_payment'") != $ap_payment) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
 } ?>