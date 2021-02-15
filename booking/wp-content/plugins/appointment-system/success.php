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
	if( !empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){ 
		// Get transaction information from URL 
		echo $item_number = $_GET['item_number']; 
		$item_name = $_GET['item_name'];
		$orderno = $_GET['item_name'];
		
		$txn_id = $_GET['tx']; 
		$payment_gross = $_GET['amt']; 
		$currency_code = $_GET['cc']; 
		$payment_status = $_GET['st'];
		
		print_r($_GET);
		
	
		 // Check if transaction data exists with the same TXN ID. 
		 $paymentRow = $wpdb->get_results("SELECT * FROM $ap_payment WHERE txn_id ='$txn_id'"); 
		 
	 
		 
			// Insert tansaction data into the database 
			$paymentRow = $wpdb->get_results("SELECT * FROM $ap_payment WHERE booking_id ='".$orderno."'");
			if(!empty($paymentRow))
			{
				$query="UPDATE `$ap_payment` SET`payment_status`='$payment_status',`payment_amount`='$payment_gross',`txn_id`='$txn_id' WHERE booking_id='$orderno'";
				
				$wpdb->query($query);
			
			 $payment_id = $wpdb->update_txn_id; 
			}else{			
			$query="INSERT INTO  $ap_payment (item_number,booking_id,txn_id,payment_amount,payment_currency,payment_status) VALUES ('$item_number','$orderno','$txn_id','$payment_gross','$currency_code','$payment_status')";
			$wpdb->query($query);
			
			 $payment_id = $wpdb->insert_id; 
			}		
			
			$payment_id = $paymentRow[0]->payment_id; 
			
			$PaymentResult = $wpdb->get_results("SELECT * FROM $ap_payment WHERE booking_id = '".$orderno."'"); //$payment_id
			
			  $booking_id = $PaymentResult[0]->booking_id;
			  
			  
			  
			$order_list = $wpdb->get_results("SELECT * FROM $ap_order_list WHERE order_no = '".$item_name."'");
				


	$results = $wpdb->get_results("SELECT * from  $ap_appointment where order_no = '".$booking_id."'"); 

	 $service_id=$order_list[0]->service;
	$service = $wpdb->get_results("SELECT * from  $ap_services where id='$service_id'"); 


	$location_id=$order_list[0]->location;
	$location = $wpdb->get_results("SELECT * from  $ap_location where id='$location_id'"); 

	 
	//************start mail **********************************

	$to = $results[0]->email; 
	$from = 'info@enviro-flame.co.uk'; 
	$fromName = 'EnviroFlame'; 
	 $subject = "Booking success";
	 
	$htmlContent = '
	<!DOCTYPE html>
	<html>

	<head>
	<title>EnviroFlame Payment has been Successful</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
	<link rel="icon" href="images/favicon.png" type="images/x-icon">
	</head>

	<body style="background:#fff;font-family:Arial, sans-serif;max-width:800px;width:100%;margin:0px auto;overflow-x:hidden;padding: 2em 0;font-weight:500;color:#000;">


	<header id="header" style="padding-top:10px;display: flex;float:left;width:100%;">
		<div class="container" style="width:800px;float:left;padding: 0px 15px;border: 1px solid #000;">
			<div class="header_content">
				<div class="header-left pull-left" style="float:left;"><a href="#"><img src="http://demotbs.com/dev/appointmentsystem/wp-content/themes/appointment/images/logo/logo.png" alt="logo"></a></div>
				
			</div>
		</div>
	</header>

	<div class="content-section" style="padding:2em 3em;border: 1px solid #000;border-top: 0;border-bottom:0;display: flex;">
		<div class="container" style="width:800px;float:left;">
			<h1 style="font-size:25px;margin-bottom:6px;margin-top:0;">Hi '.$results[0]->name.',</h1>
			<p style="font-size:16px;margin-bottom:4px;margin-top: 0;line-height:1.6;">Below are the requested service details:</p>
			
		</div>
	</div>


	<div class="service-section" style="padding:0px 0 2.3em;text-align:center;border: 1px solid #000;border-top: 0;display: flex;">
		<div class="container" style="width:800px;float:left;">
		   <table width="614px" align="center" style="background: #F1F1F1;">
	 <tr>
	   <td>
		 <div style="width:614px; border:1px solid #efefef; font: normal 12px Verdana, Arial, Helvetica, sans-serif; padding:2px; border:1px solid #ccc; margin:0px auto; 0">
		  
		   <div style="padding:10px;">
			 <h2 style="margin:0; padding:5px 0 10px;margin-bottom:15px; border-bottom: 1px solid #bbb8af;color: #020a65;">View Details</h2>
			 <table width="100%" border="0" cellspacing="0" cellpadding="0">

			   <tr>
				 <td colspan="3">';
					
			$htmlContent .= '<table  width="100%" cellpadding="0" cellspacing="0"  style="border:1px black solid;">
				<tr style="border:1px black solid;width:100%">
					<th style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">Service</th>
					<th style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">Number Service</th>
					<th style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">Booking Date</th>
					<th style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">Start Time-End Time</th>
					<th style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">Price</th>
				</tr>
			</table>
			';
			foreach ($order_list as $orders) {
					$service = $wpdb->get_results("SELECT * from  $ap_services where id='$service_id'"); 
			 $htmlContent .= '
			 <table  width="100%" cellpadding="0" cellspacing="0"  style="border:1px black solid;">
				<tr style="border:1px black solid;width:100%">
					<td style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">'.$service[0]->name.'</td>
					<td style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">'.$orders->service_no.'</td>
					<td style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">'.$orders->booking_date.'</td>
					<td style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">'.$orders->start_time.'-'.$orders->end_time.'</td>
					<td style="border: 1px solid #9fb2c5; text-align: left; padding-left: 7px; width: 20% !important;">'.$orders->service_price.'</td>
				</tr>
			</table>';
				}
					
					
			$htmlContent .= '
				  </td>
			   </tr> 
				<tr>
				 <td height="25">Location</td>
				 <td height="25">:</td>
				 <td height="25">'.$location[0]->name.' </td>
			   </tr> 			    
				<tr>
				 <td height="25">Name</td>
				 <td height="25">:</td>
				 <td height="25">'.$results[0]->name.'</td>
			   </tr>
				  <tr>
				 <td height="25">Phone</td>
				 <td height="25">:</td>
				 <td height="25">'.$results[0]->phone.'</td>
			   </tr>
				   <tr>
				 <td height="25">Email</td>
				 <td height="25">:</td>
				 <td height="25">'.$results[0]->email.'</td>
			   </tr>
				 <tr>
				 <td height="25">Road Name</td>
				 <td height="25">:</td>
				 <td height="25">'.$results[0]->road_name.'</td>
			   </tr>
				<tr>
				 <td height="25">Country</td>
				 <td height="25">:</td>
				 <td height="25">'.$results[0]->country.'</td>
			   </tr>
				 <tr>
				 <td height="25">House Name</td>
				 <td height="25">:</td>
				 <td height="25">'.$results[0]->house_name.'</td>
			   </tr>
			   <tr>
				 <td height="25">Town</td>
				 <td height="25">:</td>
				 <td height="25">'.$results[0]->town.'</td>
			   </tr>	
			   <tr>
				 <td height="25">Post Code</td>
				 <td height="25">:</td>
				 <td height="25">'. $results[0]->post_code.'</td>
			   </tr>
				  <tr>
				 <td height="25">Description</td>
				 <td height="25">:</td>
				 <td height="25">'. $results[0]->description.'</td>
			   </tr>	
				<tr>
				 <td height="25">Total Paid Amount</td>
				 <td height="25">:</td>
				 <td height="25"> '.$currency_code.' '.$payment_gross.'</td>
			   </tr>			   
			 </table>
		   </div>
		  
		 </div>
	   </td>
	 </tr>
	</table>
		</div>
	</div>	


		
	</body>
	</html>';
	 

	//Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	 
	// Additional headers 
	$headers .= 'From: '.$fromName.'<'.$from.'>'; 
	//$headers .= 'Cc: welcome@example.com' . "\r\n"; 
	//$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
	 
	// Send email 
	if(mail($to, $subject, $htmlContent, $headers)){ 
		echo '<br><h6 class="text-center">Email has sent successfully.</h6>'; 
	}else{ 
	   echo '<br><h6 class="text-center">Email sending failed.</h6>'; 
	}

	//**************mail end*******************
	
	} 


?>

<div class="container">
	<div class="row">
		<div class="status">
		<?php if(!empty($_GET['amt'])){ ?>  	<!--$_GET['amt']-->
				<br>
				<h2 class="success" style="color:green;">Your Payment has been Successful</h2><br>			
				<h4>Payment Information</h4>
				<p><b>Reference Number :</b> <?php echo $orderno; ?></p>
				<p><b>Transaction ID :</b> <?php echo $txn_id; ?></p>
				<p><b>Paid Amount :</b> <?php echo $currency_code.' '.$payment_gross; ?></p>
				<p><b>Payment Status :</b> <?php echo $payment_status; ?></p>
				
			   
			<?php }else{ ?>
				<h1 class="error">Your Payment has Failed</h1>
				<?php// echo $_GET['amt']; ?>
			<?php } ?>
			<p><a href="<?php echo home_url()?>" class="btn btn-link">Back to Home</a></p>
		</div>		
	</div>
</div>
<?php
//session_destroy();
} ?>
