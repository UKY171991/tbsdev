<?php 
function wps_theme_func_pay_sucess()
{
	 global $wpdb;
	
	
$ap_slot =$wpdb->prefix . 'ap_slot';
$ap_order_list =$wpdb->prefix . 'ap_order_list';
$ap_price_con =$wpdb->prefix . 'ap_price_con';
$ap_engineer =$wpdb->prefix . 'ap_engineer';
$ap_leave =$wpdb->prefix . 'ap_leave';
$ap_services =$wpdb->prefix . 'ap_services';
$ap_payment=$wpdb->prefix . 'ap_payment';
$ap_appointment=$wpdb->prefix . 'ap_appointment';
$ap_location=$wpdb->prefix . 'ap_location';
$ap_connection=$wpdb->prefix . 'ap_connection';


// If transaction data is available in the URL 
//http://localhost/new_ap/success/?amt=420.00&cc=GBP&item_name=20200122061655&st=Completed&tx=1WD621527U839645P

	if(!empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){ 
		// Get transaction information from URL 
		$item_name = $_GET['item_name']; 
		$txn_id = $_GET['tx']; 
		$payment_gross = $_GET['amt']; 
		$currency_code = $_GET['cc']; 
		$payment_status = $_GET['st']; 	
			//print_r($_GET);

		 $paymentRow = $wpdb->get_results("SELECT * FROM $ap_payment WHERE booking_id ='$item_name'"); 
		 if($paymentRow){ 
			
			// Insert tansaction data into the database 
			
			$query="UPDATE `$ap_payment` SET`payment_status`='$payment_status',`payment_amount`='$payment_gross',`txn_id`='$txn_id' WHERE booking_id='$item_name'";
			$wpdb->query($query);
			
			echo '<h2 class="success" style="color:green;">Your Payment has been Successful</h2><br>';

		 }else{ 
			// Insert tansaction data into the database 

			
				$query="INSERT INTO  $ap_payment (booking_id,txn_id,payment_amount,payment_currency,payment_status) VALUES ('$item_name','$txn_id','$payment_gross','$currency_code','$payment_status')";

				$wpdb->query($query);
				
				echo '<h2 class="success" style="color:green;">Your Payment has been Successful</h2><br>';
		 } 
		 
		 
		 
		 $booking_result = $wpdb->get_results("SELECT * FROM $ap_payment where booking_id='$item_name'");
		 
		 $booking_result=$booking_result->booking_id;
		 $order_list = $wpdb->get_results("SELECT * FROM $ap_slot where order_no='$booking_result'");
		 
		 
		 $results = $wpdb->get_results("SELECT * from  $ap_appointment where order_no = '".$booking_id."'"); 

		$service_id=$results[0]->service_id;
		
		$service = $wpdb->get_results("SELECT * from  $ap_services where id='$service_id'"); 

		$location_id=$results[0]->location_id;

		$location = $wpdb->get_results("SELECT * from  $ap_location where id='$location_id'"); 
		 		
	
	} 		$to = "umakant@absoluteranking.com, umakant171991@gmail.com";		$subject = "Appointmentsystem";		$message = 'hiii';				$headers = "MIME-Version: 1.0" . "\r\n";		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";		// More headers		$headers .= 'From: <webmaster@example.com>' . "\r\n";		$headers .= 'Cc: myboss@example.com' . "\r\n";		$mail=mail($to,$subject,$message,$headers);		if($mail)		{			echo '<h2 class="success" style="color:green;">Email  has been sent Successful</h2><br>';		}else{			echo '<h2 class="success" style="color:green;">Email has been failed</h2><br>';		}echo "ghhjh";
}

