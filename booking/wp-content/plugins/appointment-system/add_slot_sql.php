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

if (!$wpdb) { $wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST); } else { global $wpdb; }
if($_POST['content_new'] != ''){
	


	//*********Time schedule***********
	$service_id=$_POST['content_new'];
	$sqlServ = "SELECT * FROM $ap_services  where id=$service_id";
    $resultServ = $wpdb->get_results($sqlServ);
	  $slot_step=$resultServ[0]->slot_step;
	  $time_slot=$slot_step*60;
	  $output_new='';
	  $start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];
	 $open_time_new = strtotime($start_time);
     $close_new_time = strtotime($end_time);
	   for( $i=$open_time_new; $i<$close_new_time; $i+=$time_slot) {
		    $output_new .=date("H:i",$i).',';
	   }
	$str = rtrim($output_new, ',');
	$parms['time_schedule']=$str;
	$ap_location = $wpdb->prefix . 'ap_location';
	$location_id = $_POST['location_id'];
	$sqllocation = "SELECT * FROM $ap_location  where id=$location_id";
	$resultlocation = $wpdb->get_results($sqllocation);
	$locationPrice=$resultlocation[0]->location_price;
	//*********End Time schedule***********


	$booking_date=$_POST['booking_date'];
	$start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];
	$number_service=$_POST['number_service'];
	$service_price=$_POST['service_price']*$number_service;
	$current_booking_date=$_POST['current_booking_date'];
	//$number_service=$_POST['number_service'];
	$location=$_POST['location_id'];
	$content_new=$_POST['content_new'];
	$my_ip=$_POST['my_ip'];
	$my_order=$_POST['order_no'];
	$engineer_id=$_POST['engineer_id'];
	
$already_service='';
$engineer_id="";
	
	$servec_chk = $wpdb->get_results("SELECT * FROM $ap_engineer order by id asc ");
	foreach ($servec_chk as $servec_all) {
			$e_id=$servec_all->id;
			$arr =$servec_all->capabilities;  // $servec_all->id;  //
			$engineees=explode(",",$arr);
			
			
		
			$service_result = $wpdb->get_results("SELECT * FROM $ap_price_con where service_id='$content_new' AND location_id ='$location_id'   ");
	
	$service_price=$service_result[0]->price*$number_service;
		
		if($service_price ==''){
			$engineees='';
		}

			
			
			
			// checking leave start
				$servec_chkk = $wpdb->get_results("SELECT * FROM $ap_leave  where  eid='$e_id' AND leave_start <='$booking_date' AND leave_end >='$booking_date'   order by id desc limit 1  ");
			//AND leave_start <= '$booking_date' AND leave_end >= '$booking_date' 			
				foreach( $servec_chkk as $servec_chk){

				$servec_chk_id=$servec_chk->eid;
				$servec_chk_leave_start=$servec_chk->leave_start;
				$servec_chk_leave_end=$servec_chk->leave_end;
				
				if($booking_date >= $servec_chk_leave_start && $booking_date <= $servec_chk_leave_end    ){
				
					$engineees='';
					//$service_id='';
					//die;
				}
			}
				//die;
			// checking leave end 
			// 
			
		//print_r($servec_chk);
		//die;
		

			
				
			
			if(in_array($service_id, $engineees) ){
				$engineer_id=$servec_all->id;
				$already_service='';
				
				
				$servec_chks = $wpdb->get_results("SELECT * FROM $ap_order_list where start_time BETWEEN '$start_time' AND ' < $end_time' AND booking_date ='$booking_date' AND engineer_id ='$e_id' OR end_time BETWEEN '$start_time' AND ' > $end_time' AND booking_date ='$booking_date' AND engineer_id ='$e_id' OR start_time >='$start_time' AND end_time <='$end_time' AND booking_date ='$booking_date' AND engineer_id ='$e_id' OR start_time <='$start_time' AND end_time >='$end_time' AND booking_date ='$booking_date' AND engineer_id ='$e_id' limit 1");
				/////start_time BETWEEN '$output' AND '$output_new' OR start_time BETWEEN '$output' AND '$output_new' OR start_time >='$output' AND end_time <='$output_new'
	
		
	if(empty($servec_chks) ){    //AND $service_price !="0"

      $already_service='';



			$new_id=$servec_chks[0]->engineer_id;

			 

			 if($new_id == $engineer_id){

					$engineer_id=$new_id;

				}else{

					$engineer_id=$servec_all->id;

				}
				
		 $engineer_id=$servec_all->id;
 
				$time_schedule=$str;//$_POST['time_schedule'];
				$ap_slot =$wpdb->prefix . 'ap_slot';
				$resultss = $wpdb->get_results("SELECT * FROM $ap_slot where my_ip='$ip' order by id asc");
				foreach ($resul as $prin) {
				$old_ordeno=$prin->order_no;
					if($my_order !=$old_ordeno){
						$wpdb->get_results("DELETE FROM $ap_slot where order_no='$old_ordeno'");
						}
					}
	
	
	
		
		//echo $engineer_id;
				//die;
	
	$inserted=$wpdb->query("INSERT INTO `$ap_slot`(`booking_date`, `start_time`, `end_time`, `service_price`, `current_booking_date`, `service`, `service_no`,`my_ip`,`location`,`order_no`) VALUES ('$booking_date','$start_time','$end_time','$service_price','$current_booking_date','$service_id','$number_service','$my_ip','$location','$my_order')");
	$inserted=$wpdb->query("INSERT INTO `$ap_order_list`(`booking_date`, `start_time`, `end_time`, `service_price`, `current_booking_date`, `service`, `service_no`,`my_ip`,`location`,`order_no`,`time_schedule`,`engineer_id`) VALUES ('$booking_date','$start_time','$end_time','$service_price','$current_booking_date','$service_id','$number_service','$my_ip','$location','$my_order','$time_schedule','$engineer_id')");
			 
	
		if($inserted)
		{
			//echo "Time slot added";
			die;
		}
	}
	
			}else{
			    //
			    
			    //echo "booked";
			    //exit();
			    //if(!empty($service_id)){  //in_array($service_id, $engineees)
			    
			    $service_res = $wpdb->get_results("SELECT * FROM $ap_services where id='$service_id' ");
			    
			   $already_service=$service_res[0]->name;
			    
			    //echo "booked";
			    
			    //}
			    //
			}
		}
		
		if($already_service!=''){
			echo $already_service;
			
			die;	
		}
		
	
		
		//exit;
		
}

if($_POST['my_c_ip'])
{
	$my_c_ip=$_POST['my_c_ip'];
	$order_no=$_POST['order_no'];
	
	
	$wpdb->get_results("DELETE FROM $ap_slot where my_ip='$my_c_ip' AND order_no=''");
	$wpdb->get_results("DELETE FROM $ap_order_list where my_ip='$my_c_ip' AND order_no='$order_no'");
}

if($_POST['my_ips'])
{
	$my_ip=$_POST['my_ips'];
$wpdb->get_results("DELETE FROM $ap_slot where my_ip='$my_ip'");
$wpdb->get_results("DELETE FROM $ap_order_list where my_ip='$my_ip' AND order_no=''");
}

if($_POST['engineer_list_id'])
{
	$engineer_list_id=$_POST['engineer_list_id'];
	$engineer_assign_id=$_POST['engineer_assign_id'];
	
	$order_no=$_POST['order_no'];
	$date=$_POST['date'];
	$eid=$_POST['eid'];
	$start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];  // engineer_id
	
	$order_chk = $wpdb->get_results("SELECT * FROM $ap_order_list where start_time ='$start_time' AND end_time='$end_time' OR start_time BETWEEN '$start_time' AND '$end_time' OR end_time BETWEEN '$start_time' AND '$end_time' AND booking_date ='$booking_date' AND engineer_id ='$e_id' AND service_price !='0.00' limit 1");
	
	if(count($order_chk) == 0)
	{
		$wpdb->get_results("UPDATE `$ap_order_list` SET `engineer_id`='$engineer_assign_id' WHERE id='$engineer_list_id'");
		echo"Assign Engg. successfully";
		
	}else{
		echo"Assign Engg. already another work this time";
	}
	
	exit();
}

if($_POST['booking_ids'])
{
	$booking_ids=$_POST['booking_ids'];
	$payment_status=$_POST['payment_status'];
	$paydate=date('Y-m-d');
	$booking_result = $wpdb->get_results("SELECT * FROM $ap_payment where booking_id='$booking_ids'");
	if($booking_result)
	{
		$wpdb->get_results("UPDATE `$ap_payment` SET `payment_status`='$payment_status',txn_id='Admin' WHERE booking_id='$booking_ids'");
		echo"Payment Status change successfully ";
	}else{
		$wpdb->get_results("INSERT INTO `$ap_payment`( `booking_id`, `payment_status`,`txn_id`, `create_at`) VALUES ('$booking_ids','$payment_status','Admin','$paydate')");
	
	echo"Payment Status change successfully ";
	exit();
	}
}

//leave start_time
if($_POST['leave_start'])
{
	$leave_start=$_POST['leave_start'];
	$leave_end=$_POST['leave_end'];
	$eid=$_POST['eid'];
	$id=$_POST['id'];
	
	$order_chk = $wpdb->get_results("SELECT * FROM $ap_leave where eid='$eid' AND `leave_start`<='$leave_start' AND `leave_end`>='$leave_end' OR  eid='$eid' AND`leave_start`>='$leave_start' AND `leave_end`<='$leave_end' OR  eid='$eid' AND leave_start BETWEEN '$leave_start' AND '$leave_end' OR  eid='$eid' AND leave_end BETWEEN '$leave_start' AND '$leave_end'  order by id desc");
	if(count($order_chk) == "0"){
		$inserted=$wpdb->query("INSERT INTO $ap_leave(`eid`,`leave_start`, `leave_end`) VALUES ('$eid','$leave_start','$leave_end')");
		
		echo "<h6 class='text-center text-success hide_text'>Leave added Successfully<h6>";
	}else{
		
		echo "<h6 class='text-center text-danger hide_text'>Leave already added ".$order_chk[0]->leave_start." to  ".$order_chk[0]->leave_end." <h6>";
		
	}
}
if($_POST['current_id']){
    
    $current_id=$_POST['current_id'];
    $order_ch = $wpdb->get_results("SELECT * FROM $ap_leave where  eid='$current_id' order by id DESC");
    if(count($order_ch)=='0'){
        echo "
                <tr>
		            <td colspan='4'>0 record found</td>
		        </tr>
        ";
		exit();
    }
	echo "
	<tr>
		            <td>#</td>
		            <th>Start date</th>
		            <th>End date</th>
		            <th>Action</th>
		        </tr>
				";
    $l=1;
    foreach($order_ch as $order_cha){
		//<td><button type='button' class='btn btn-success btn-sm' onclick='edit_list(".$order_cha->id.")'>Edit</button>
        echo "
                <tr>
		            <td>".$l++."</td>
		            <td>".$order_cha->leave_start."</td>
		            <td>".$order_cha->leave_end."</td>
		            <td><button type='button' class='btn btn-danger btn-sm' onclick='return del__list(".$order_cha->id.")'>Delete</button></td>
		        </tr>
        ";
        
    }
    exit();
}

if($_POST['del_list_id'])
{
	$del_list_id=$_POST['del_list_id'];
	$wpdb->get_results("DELETE FROM $ap_leave where id='$del_list_id'");
}
if($_POST['edit_list_id'])
{
	$edit_list_id=$_POST['edit_list_id'];
	$order_c = $wpdb->get_results("SELECT * FROM $ap_leave where  id='$edit_list_id' ");
	echo json_encode($order_c);
}
//leave end


if($_POST['del_id'])
{
	$del_id=$_POST['del_id'];
	$wpdb->get_results("DELETE FROM $ap_slot where id='$del_id'");
	$wpdb->get_results("DELETE FROM $ap_order_list where id='$del_id' AND order_no=''");	$wpdb->get_results("DELETE FROM $ap_appointment where order_no=''");

}
