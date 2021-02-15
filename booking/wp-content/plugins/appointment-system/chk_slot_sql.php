<?php 
error_reporting(1);
$base = dirname(__FILE__);
if (@file_exists(dirname(dirname(dirname($base)))."/wp-includes/wp-db.php"))
{
$db_path = dirname(dirname(dirname($base)))."/wp-includes/wp-db.php";
}
if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php"))
{
$config_path = dirname(dirname(dirname($base)))."/wp-config.php";
}
require_once( $db_path );
require_once( $config_path );
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


if (!$wpdb) { $wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST); } else { global $wpdb; }


if(isset($_POST['location'])){
	 $location_id=$_POST['location'];
	 $service_id= $_POST['service'];
	 
	 
	          $my_array=array();
			  $my_array2=array();
	$servec_chk = $wpdb->get_results("SELECT * FROM $ap_engineer ");
	foreach ($servec_chk as $servec_all) {
			
			
			$arr =$servec_all->capabilities;  // $servec_all->id;  //
			$day =$servec_all->day_of_week;
			
			$id =$servec_all->id;
			
		    $daysss=explode("<br>",$day);
			
			$dayssscount=count($daysss);
			
			array_push($my_array,$dayssscount);
			array_push($my_array2,$id);
			
	}
	 
	 $id_daycount=array_combine($my_array2,$my_array);
	 
	 
	 arsort($id_daycount);

foreach($id_daycount as $eng_id => $x_value) {
	 
	 

	$servec_chk2 = $wpdb->get_results("SELECT * FROM $ap_engineer where id=".$eng_id." ");
	


			$arr =$servec_chk2[0]->capabilities;  // $servec_all->id;  //
			$day =$servec_chk2[0]->day_of_week;
			$engineees=explode(",",$arr);
		    $daysss=explode("<br>",$day);

			$servec_con = $wpdb->get_results("SELECT * FROM $ap_connection where service='$service_id' AND location='$location_id'");
			 $da_i =$servec_con[0]->service;
			 	$da =$servec_con[0]->day_of_week;
			 	$dayss=explode("<br>",$da);
			 	$i=0;
 			

 					
 					

 			 if(in_array($service_id, $engineees)){
 			// 	foreach($daysss as $days){
 			// 	echo $da;
 			// 	exit();
 			// }
 			
 			// //$i++;
 	 	// }else{
 	 	    	//foreach($dayss as $days){
 	 	    	    $cout1=strlen($day);
 	 	    	    $cout2=strlen($da);
 	 	    	    
 	 	    	    //$chekk=min($cout1,$cout2);
 	 	    	    
 	 	    	   //  echo $da;
 	 	    	   // exit();
 	 	    	    if($cout1 < $cout2){
 	 	    	        echo $day;
 	 	    	        exit();
 	 	    	    }else{
 	 	    	         echo $da;
 	 	    	        exit();
 	 	    	    }
 	 	    //echo $day;
 	 	    
 	 	   // exit();
 	 	}
 	 //	}
 	 //}
	
//	exit();
 
		
		
// exit();
}
}