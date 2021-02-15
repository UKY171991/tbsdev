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
if (!$wpdb) { $wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST); } else { global $wpdb; }
 if($_POST['del_id'] != '') {
        $del_id = $_POST['del_id'];
        $wpdb->query("DELETE FROM wp_ap_appointment WHERE order_no='$del_id'");
        $wpdb->query("DELETE FROM wp_ap_order_list WHERE order_no='$del_id'");
        $wpdb->query("DELETE FROM wp_ap_payment WHERE booking_id='$del_id'");
		//echo "<script>location.replace('admin.php?page=enviro-appointment-system');</script>";
      } 
if($_POST['email'] != ''){
		//*********Time schedule***********
	$service_id=$_POST['service_id'];
	//*********End Time schedule***********
	$upt=$_POST['upt'];
	$edit_id=$_POST['edit_id'];
	$number_service=$_POST['quantity'];
	$start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];
	$time_schedule = $str;
	$booking_date=$_POST['booking_date'];
	
	$location_id=$_POST['location_id'];
	$created=$_POST['created'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$road_name=$_POST['road_name'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$house_name=$_POST['house_name'];
	$town=$_POST['town'];
	$post_code=$_POST['post_code'];
	$description=$_POST['description'];
	$engineer_id=$_POST['engineer_id'];
	$status=$_POST['status'];
	$parking=$_POST['parking'];
	
	//parking
	
	$order_no=$_POST['order_no'];//$my_order=date("Ymd").date("his");
	if(empty($status))
	{
		$status="Pending";
	}
	$ip=$_SERVER['SERVER_ADDR'];
			
	$result = $wpdb->get_results("SELECT * FROM wp_ap_slot where my_ip='$ip' order by id asc");
			if($wpdb->num_rows){
				foreach ($result as $print) {
					$service=$print->service;						
					$location=$print->location;						
					$service_no=$print->service_no;						
					$service_price=$print->service_price;						
					$start_times=$print->start_time;						
					$end_times=$print->end_time;						
					$booking_dates=$print->booking_date;

					$location_ids = $wpdb->get_results("SELECT * FROM $ap_location where id='$location' ");
					$service_price=$service_price+$location_ids[0]->location_price;
				

				}	
				$wpdb->query("INSERT INTO  wp_ap_appointment (country,`location`,`created`, `name`, `phone`, `road_name`, `email`, `house_name`, `town`, `post_code`, `description`,`order_no`,parking) VALUES ('$country','$location','$created','$name','$phone','$road_name','$email','$house_name','$town','$post_code','$description','$order_no','$parking')");								
					$wpdb->get_results("DELETE FROM wp_ap_slot where my_ip='$ip'");
					$wpdb->get_results("UPDATE `wp_ap_order_list` SET `order_no`='$order_no' where my_ip='$ip' AND `order_no`=''");			
			}else{				
				$wpdb->query("INSERT INTO  wp_ap_appointment (`location`,`created`, `name`, `phone`, `road_name`, `email`, `house_name`, `town`, `post_code`, `description`,parking) VALUES ('$location','$created','$name','$phone','$road_name','$email','$house_name','$town','$post_code','$description','$parking')");					}

}
if(isset($_POST['location_id'])){
$location_id=$_POST['location_id'];
$query= "SELECT * FROM wp_ap_connection con join wp_ap_services ser on con.service = ser.id where con.location = $location_id";
$results = $wpdb->get_results($query);
$option='';
foreach($results as $row){
$option.='<option value='.$row->id.'>'.$row->name.'</option>';
}
echo $option;
}
	if(isset($_POST['slot_date'])){	
	 $loc_id = $_POST['loc_id'];
	 $service_id = $_POST['service_id'];
	 $number_service = $_POST['number_service'];
	 $slot_date = $_POST['slot_date']; 
		// week day
	 $dayOfWeek = $_POST['dayOfWeek'];  
		

     $sql = "SELECT * FROM wp_ap_connection  where location = '$loc_id' and service='$service_id' ";
	 $result = $wpdb->get_results($sql);


	$sqlapp = "SELECT * FROM wp_ap_order_list  where location = $loc_id and service=$service_id and booking_date='$slot_date' ";
		
		
		

	$start_time='';
	$slot_start_new='';
	 $rowapp = $wpdb->get_results($sqlapp);
	 foreach($rowapp as $row_slot){
		 
		 $slot_start_new=$row_slot->time_schedule;
		 $start_time .= $slot_start_new.',';
		 	 }
	 if($rowapp){
		$slot_start=explode(',',$start_time);
	 }else{
		$slot_start=array(00); 
	 }
	$sqlServ = "SELECT * FROM wp_ap_services  where id=$service_id";
    $resultServ = $wpdb->get_results($sqlServ);	
		
		
	
	 
	 if($number_service >1)
	 {
		 $slot_step=$resultServ[0]->slot_step;
		 $mynew_time=($slot_step)/2;
		 $slot_price=$resultServ[0]->price;
		 $slot_step=($number_service*$slot_step)/2+$mynew_time;
		 $time_slot=$slot_step*(60);
		 
		 $response = array();
		$time_from=$result[0]->time_from;
		$time_to=$result[0]->time_to;
		 
		 if($dayOfWeek=="5"){
			
			 $time_from="9:00";
			 $time_to="14:00";
			
		}
		 
		 
		 $open_time = strtotime($time_from);
		 $close_time = strtotime($time_to);	
		 
		
		 
		 
		$output = "";
		$slot_all='';
		
				for( $i=$open_time; $i<$close_time; $i+=$time_slot) {
			   $output =date("H:i",$i);
			   $time = strtotime($output);
			   //$slot_step=$slot_step*(60/2);
			   $output_new=date("H:i",strtotime('+'.$slot_step.'minutes',$time));
				
				//if($slot_start==$output){
					//count end
				 	
					/**Enginer id avilable in service ***********/
            $response_engineer_id=array();
               $servec_chk = $wpdb->get_results("SELECT * FROM wp_ap_engineer order by id desc ");
				 	foreach ($servec_chk as $servec_all) {
				 			$e_id=$servec_all->id;
				 			$arr =$servec_all->capabilities;  // $servec_all->id;  //
				 			$engineees=explode(",",$arr);
							
                    if(in_array($service_id,$engineees)){
						
						 /**Leave Enginer check ***********/
						$leave_check = $wpdb->get_results("SELECT * FROM wp_ap_leave  where  eid='$e_id' AND leave_start <='$slot_date' AND leave_end >='$slot_date'   order by id desc limit 1  ");
						
						if(empty($leave_check)){
						array_push($response_engineer_id,$e_id);
						}
						
				         }
				
					}
					
					
					
			
					//echo $my_query="SELECT * FROM wp_ap_order_list  where   (start_time  BETWEEN '$output' And '$output_new') AND booking_date ='$slot_date' OR  (end_time  BETWEEN '$output' And '$output_new') AND booking_date ='$slot_date'  order by engineer_id desc ";
						
			         
					 
				 $my_query=" SELECT * FROM wp_ap_order_list where  start_time >= '$output' AND end_time <= '$output_new'   AND booking_date ='$slot_date' order by engineer_id desc ";
					  $servec_chk_new = $wpdb->get_results($my_query);
			
					 $response_engineer_idOrder=array();
					foreach( $servec_chk_new as $new_service_row){
						
						$engineer_id_newOrdr=$new_service_row->engineer_id;
						//$engineer_id_news=$new_id=$new_service_row->service;
						
						array_push($response_engineer_idOrder,$engineer_id_newOrdr);
						
					}
					if(count(array_diff($response_engineer_id, $response_engineer_idOrder))==0){
								
								          
									$slot_all .='<li class="booked_slot"  >'.$output.'-'.$output_new.'</li>';
				 				//break;	
								}else{
									$time        =  $output.'-'.$output_new;
				 				 $slot_all .='<li class="slot_time" id="'.$output.'" data-id="'.$output_new.'" data-price="'.$slot_price.'" >'.$time.'</li>';
				 				// break;	
									
								}
					
						//count end
					//$slot_all .='<li class="booked_slot"  >'.$output.'-'.$output_new.'</li>';
				

		    }
	 }else{
		 $slot_step=$resultServ[0]->slot_step;
	  
		  $slot_price=$resultServ[0]->price;
		 $slot_step=$number_service*$slot_step;
		 $time_slot=$slot_step*60;
		 
		 $response = array();
		 $time_from=$result[0]->time_from;
		$time_to=$result[0]->time_to;
		 
		  if($dayOfWeek=="5"){
			
			 $time_from="9:00";
			 $time_to="14:00";
			
		}
		 
		 
		 $open_time = strtotime($time_from);
		 $close_time = strtotime($time_to);	
		 
		
		 
		$output = "";
		$slot_all='';
		
				for( $i=$open_time; $i<$close_time; $i+=$time_slot) {
			   $output =date("H:i",$i);
			   $time = strtotime($output);
			   $output_new=date("H:i",strtotime('+'.$slot_step.'minutes',$time));
				
				//if($slot_start==$output){
					//count start



                /**Enginer id avilable in service ***********/
            $response_engineer_id=array();
               $servec_chk = $wpdb->get_results("SELECT * FROM wp_ap_engineer order by id desc ");
				foreach ($servec_chk as $servec_all) {
				 			$e_id=$servec_all->id;
				 			$arr =$servec_all->capabilities;  // $servec_all->id;  //
				 			$engineees=explode(",",$arr);
							
                   if(in_array($service_id,$engineees)){
						
						 /**Leave Enginer check ***********/
						$leave_check = $wpdb->get_results("SELECT * FROM wp_ap_leave  where  eid='$e_id' AND leave_start <='$slot_date' AND leave_end >='$slot_date'   order by id desc limit 1  ");
						
						if(empty($leave_check)){
						array_push($response_engineer_id,$e_id);
						}
						
				         }
				
				}
					 		
		 					
		    $my_query="SELECT * FROM wp_ap_order_list  where   start_time ='$output' AND end_time ='$output_new' AND  booking_date ='$slot_date'  order by engineer_id desc ";
			
			$servec_chk_new = $wpdb->get_results($my_query);
			
					 $response_engineer_idOrder=array();
					foreach( $servec_chk_new as $new_service_row){
						
						$engineer_id_newOrdr=$new_service_row->engineer_id;
						//$engineer_id_news=$new_id=$new_service_row->service;
						
						array_push($response_engineer_idOrder,$engineer_id_newOrdr);
						
					}
						
									//if (count(array_intersect($response_engineer_id, $response_engineer_idOrder)) !== 0) {
								
								
								if(count(array_diff($response_engineer_id, $response_engineer_idOrder))==0){
								          
									$slot_all .='<li class="booked_slot"  >'.$output.'-'.$output_new.'</li>';
				 				//break;	
								}else{
									$time        =  $output.'-'.$output_new;
				 				 $slot_all .='<li class="slot_time" id="'.$output.'" data-id="'.$output_new.'" data-price="'.$slot_price.'" >'.$time.'</li>';
				 				// break;	
									
								}
				 
				

		    }
	 }
 
	
       echo $slot_all;     
	}
	?>