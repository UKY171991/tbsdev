<?php
function crudOperationsTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  
  /*This function create price connectiob table*/
  $table_leave = $wpdb->prefix . 'ap_leave';
  $sql = "CREATE TABLE `$table_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(220) DEFAULT NULL,
  `leave_start` varchar(220) DEFAULT NULL,
  `leave_end` varchar(220) DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_leave'") != $table_leave) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
  
  /*This function create price connectiob table*/
  $table_price_con = $wpdb->prefix . 'ap_price_con';
  $sql = "CREATE TABLE `$table_price_con` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` varchar(220) DEFAULT NULL,
  `service_id` varchar(220) DEFAULT NULL,
  `price` varchar(220) DEFAULT NULL,
  `status` varchar(220) DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_price_con'") != $table_price_con) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
  
  

  /*This function create location table*/
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

  /*This function create services table*/
  $table_services = $wpdb->prefix . 'ap_services';
  $sql = "CREATE TABLE `$table_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) DEFAULT NULL,
  `duration` varchar(220) DEFAULT NULL,
  `slot_step` varchar(220) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_services'") != $table_services) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  } 
/*This function create slot table*/
  $table_slot = $wpdb->prefix . 'ap_slot';  
  $sql = "CREATE TABLE `$table_slot` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `location` varchar(220) DEFAULT NULL, 
  `booking_date` date DEFAULT NULL,  
  `start_time` time DEFAULT NULL,  
  `end_time` time DEFAULT NULL,  
  `service_price` decimal(10,2) DEFAULT NULL,  
  `current_booking_date` date DEFAULT  NULL,     
  `service` varchar(220) DEFAULT NULL,    
  `service_no` varchar(220) DEFAULT NULL,
  `order_no` varchar(220) DEFAULT NULL, 
  `my_ip` varchar(220) DEFAULT NULL,
  PRIMARY KEY(id)  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;  ";  
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_slot'") != $table_slot) {   
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');    dbDelta($sql);  }

  /*This function create ap_order_list table*/
  $ap_order_list = $wpdb->prefix . 'ap_order_list';  
  $sql = "CREATE TABLE `$ap_order_list` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `booking_date` date DEFAULT NULL,  
  `start_time` time DEFAULT NULL,  
  `end_time` time DEFAULT NULL,  
  `service_price` decimal(10,2) DEFAULT NULL,  
  `current_booking_date` date DEFAULT  NULL,  
  `time_schedule` varchar(250) DEFAULT NULL,
  `engineer_id` varchar(220) DEFAULT NULL,  
  `location` varchar(220) DEFAULT NULL,    
  `service` varchar(220) DEFAULT NULL,    
  `service_no` varchar(220) DEFAULT NULL,
  `order_no` varchar(220) DEFAULT NULL,   
  `my_ip` varchar(220) DEFAULT NULL,
  PRIMARY KEY(id)  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;  ";  
  if ($wpdb->get_var("SHOW TABLES LIKE '$ap_order_list'") != $ap_order_list) {   
  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');    dbDelta($sql);  } 
  /*This function create connection table*/
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

  /*This function create engineer table*/
  $table_engineer = $wpdb->prefix . 'ap_engineer';
  $sql = "CREATE TABLE `$table_engineer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) DEFAULT NULL,
  `capabilities` varchar(500) DEFAULT NULL,
  `day_of_week` varchar(500) DEFAULT NULL,
  `starttime` time  NOT NULL,
  `endtime` time  NOT NULL,
  `status` varchar(500) DEFAULT NULL,
  `leave_start` varchar(500) DEFAULT NULL,
  `leave_end` varchar(500) DEFAULT NULL,
  PRIMARY KEY(id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_engineer'") != $table_engineer) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }

    /*This function create appointment table*/
     $table_appointment = $wpdb->prefix . 'ap_appointment';
     $sql = "CREATE TABLE `$table_appointment` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `location` varchar(220) DEFAULT NULL, 
     `created` date  NOT NULL,
     `name` varchar(250) DEFAULT NULL,
     `phone` varchar(250) DEFAULT NULL,
     `road_name` varchar(250) DEFAULT NULL,
     `email` varchar(220) DEFAULT NULL,
     `house_name` varchar(220) DEFAULT NULL,
     `town` varchar(220) DEFAULT NULL,
     `post_code` varchar(220) DEFAULT NULL,
     `description` text DEFAULT NULL,
     `country` text DEFAULT NULL,
	 `order_no` varchar(220) DEFAULT NULL,
	 `parking` varchar(220) DEFAULT NULL,
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