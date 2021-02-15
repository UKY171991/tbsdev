<?php
function wps_theme_func_view_appointment()
{
	ap_header_function();
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

	
	
	  $upt=$_GET['upt'];
		 $results = $wpdb->get_results( "SELECT * FROM $ap_appointment where order_no='$upt' ");	
	$location_id=$results[0]->location;
	$location_p = $wpdb->get_results( "SELECT * FROM $ap_location where id='$location_id' ");
	foreach ($results as $print) { 
	?>
    <div class='container'>
		<table class='table view'>		
		<tr><th colspan="2"><h4 class="text-center ">Appointment Details</h4></th></tr>
		<tr>
			<td colspan="2">
				<table class="table">
					<tr>
						<th>SrNo</th>
						<th>Location</th>
						<th>Service</th>
						<th>Number Service</th>
						<th>Booking Date</th>
						<th>Start-End</th>
						<th>Service price</th>
						<th>Engineer</th>
					</tr>
					<?php
					$i=1;
					$location_id = $wpdb->get_results( "SELECT * FROM $ap_order_list where order_no='$upt' ");
					foreach ($location_id as $locations) {
					$order_list_id=$locations->id;
					$booking_date=$locations->booking_date;
					$start_time=$locations->start_time;
					$end_time=$locations->end_time;
					$engineer_chk=$locations->engineer_id;
					$location_id=$locations->location;
					$order_no=$locations->order_no;
					$id=$locations->id;
					
					$location = $wpdb->get_results( "SELECT * FROM $ap_location where id='$location_id' ");
					$service_id=$locations->service;
					$service = $wpdb->get_results( "SELECT * FROM $ap_services where id='$service_id' ");
					$engineer_id=$locations->engineer_id;
					 ?>
					<tr>
						<td><?php echo $i++;?></td>
						<td><?php  echo $location[0]->name; ?></td>
						<td><?php echo $service[0]->name;?>  </td>
						<td><?php echo $locations->service_no; ?></td>
						<td><?php echo date('d-m-Y', strtotime($locations->booking_date)); ?></td>
						<input type="hidden" name="" id="date_<?php echo $id;?>" value="<?php echo $booking_date;?>">
						<td><?php echo date("h:i A", strtotime($locations->start_time)); ?>-<?php echo date("h:i A", strtotime($locations->end_time)); ?></td>
						
						<input type="hidden" name="" id="order_no<?php echo $id;?>" value="<?php echo $order_no; ?>">
						<input type="hidden" name="" id="start_time_<?php echo $id;?>" value="<?php echo $start_time; ?>">
						<input type="hidden" name="" id="end_time_<?php echo $id;?>" value="<?php echo $end_time; ?>">
						<input type="hidden" name="" id="eid_<?php echo $engineer_chk;?>" value="<?php echo $engineer_chk; ?>">
						
						
						<td><i class="fa fa-gbp" aria-hidden="true"></i><?php echo $locations->service_price; ?></td>
						<td>
							<input type="hidden" name="" id="engineer_list_id_<?php echo $order_list_id; ?>" value="<?php echo $order_list_id; ?>">
							<select name="engineer_assign" class="engineer_assign_<?php echo $order_list_id; ?>">
								<option value="">---Select Engg---</option>
								
								<?php 
								$not_booked = $wpdb->get_results( "SELECT * FROM $ap_order_list where staus ='Pending' ");
								$get_id=$not_booked->engineer_id;
								
								
								$engineer = $wpdb->get_results("SELECT * FROM $ap_engineer where id != '$get_id'");
								
								
								foreach ($engineer as $engineers) {
								
								$capabilities=$engineers->capabilities;
									$capab=explode(',',$capabilities);
									
								$engg = $wpdb->get_results("SELECT * FROM $ap_engineer where capabilities = '$cap'");
								//if(in_array($cap,$engg['id'])){
								$i=0;
								$num= $coutt=count($capab); 
								while($i <= $num)
								{
									if($capab[$i]==$service_id){
								?>
								<option value="<?php echo $engineers->id;?>" <?php if($engineer_id==$engineers->id){ echo "selected"; }?>><?php echo $engineers->name;   
								?></option>
								<?php  } $i++; }   } // } ?>
							</select>
							<script>
							$(".engineer_assign_<?php echo $order_list_id; ?>").on("change",function(){
								var engineer_assign_<?php echo $order_list_id; ?>=$(".engineer_assign_<?php echo $order_list_id; ?>").val();
								var engineer_list_id_<?php echo $order_list_id; ?>=$("#engineer_list_id_<?php echo $order_list_id; ?>").val();
								
								
								var date=$("#date_<?php echo $id ?>").val();
								var start_time=$("#start_time_<?php echo $id;?>").val();
								var end_time=$("#end_time_<?php echo $id;?>").val();
								var eid=$("#eid_<?php echo $engineer_chk;?>").val();
								var order_no=$("#order_no<?php echo $order_no;?>").val();
								//alert(end_time);
								$.ajax({	
										url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
										type:"POST",	
										data:{engineer_list_id:engineer_list_id_<?php echo $order_list_id; ?>,engineer_assign_id:engineer_assign_<?php echo $order_list_id; ?>,date:date,start_time:start_time,end_time:end_time,eid:eid,order_no:order_no},	
										success:function(data){	
											alert(data);
											//$('#content_slot_1').html('');
										}	
								});
							});
							</script>
						</td>
					</tr>
				<?php } ?>
				</table>
			</td>
			
		</tr>   
		<tr>
			<td>Name</td>
			<td><?php echo $print->name; ?></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><?php echo $print->phone; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $print->email; ?></td>
		</tr>
		<tr>
			<td>Road Name</td>
			<td><?php echo $print->road_name; ?></td>
		</tr>
		<!--<tr>
		<td>Country</td>
			<td><?php //echo $results[0]->country; ?></td>
		</tr>-->
		<tr>
			<td>House Name</td>
			<td><?php echo $print->house_name; ?></td>
		</tr>
		<tr>
			<td>Town</td>
			<td><?php echo $print->town; ?></td>
		</tr>	
		<tr>
			<td>Post Code</td>
			<td><?php echo $print->post_code; ?></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><?php echo $print->description; ?></td>
		</tr>
		<tr>
			<td>Parking Status</td>
			<td><?php echo $print->parking; ?></td>
		</tr>
		<tr>
			<td>Payment Status</td>
			<td>
			
			<select name="" id="payment_status">
			<?php 
				
				$booking_id=$print->id;
				 $booking_status = $wpdb->get_results("SELECT * FROM $ap_payment where booking_id='$upt'");
				 ?>	 
					  <option valus="Failed" <?php if($booking_status[0]->payment_status=="Failed"){ echo "selected"; }?>>Failed</option>
					  <option valus="Pending" <?php if($booking_status[0]->payment_status=="Pending" || empty($booking_status[0]->payment_status)){ echo "selected"; } ?>>Pending</option>
					  <option valus="Completed" <?php if($booking_status[0]->payment_status=="Completed"){ echo "selected"; }?>>Completed</option>	
			</select>	
			</td>
		</tr>
		<tr>
			<td>Total Price</td>
			<td>
			<?php 
			$location_price = $wpdb->get_results( "SELECT SUM(service_price) as total_price FROM $ap_order_list where order_no='$upt' ");
					foreach ($location_price as $price) { ?>
			<i class="fa fa-gbp" aria-hidden="true"></i> <?php echo $price->total_price;//+$location_p[0]->location_price;?>
		<?php } ?>
		</td>
		</tr>
	</table>
  
	 <center><a href='admin.php?page=enviro-appointment-system' class='btn btn-primary btn-sm'>Back</a></center>
</div>
<input type="hidden" id="booking_id"value="<?php echo $upt;?>">
<script>
$("#payment_status").on("change",function(){
	var payment_status=$("#payment_status").val();
	var booking_id=$("#booking_id").val();
	//alert(booking_id);
	$.ajax({	
			url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
			type:"POST",	
			data:{payment_status:payment_status,booking_ids:booking_id},	
			success:function(data){	
				alert(data);
			}	
	});
});
	
		
</script>

<?php } } ?>