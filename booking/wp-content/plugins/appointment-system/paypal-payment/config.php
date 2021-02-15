<?php /* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration 
define('PAYPAL_ID', 'Insert_PayPal_Business_Email'); 
define('PAYPAL_SANDBOX', FALSE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://www.example.com/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://www.example.com/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://www.example.com/ipn.php'); 
define('PAYPAL_CURRENCY', 'INR'); 
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'thinkbiz_asystem'); 
define('DB_PASSWORD', 'asystem@123'); 
define('DB_NAME', 'thinkbiz_appointmentsystem'); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");

?>