<?php
function wps_theme_func_view_appointment_location()
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

	
	
	
      ap_header_function();
	  $view=$_GET['view'];
	  $resultsss = $wpdb->get_results("SELECT * FROM `$ap_appointment` WHERE engineer_id='$view' ORDER BY id DESC");
      ?>
			  <div class='container card'>
			  <h4 class="text-center"><?php echo $name=$_GET['name'];?>'s Job Location details</h4>
			  <table id='example' class='table'>
				<thead>
					<th>Sr. No.</th>
					<th>Location</th>
					<th>Service</th>
					<th>Date</th>
					<th>Time</th>
				</thead>
                <tbody>
				<?php
				$i=1;
				
				foreach($resultsss as $resultssss){
				$idss=$resultssss->location_id;
				$idsss=$resultssss->service_id;
				$results = $wpdb->get_results("SELECT * FROM $ap_location where id='$idss' order by id DESC ");
				?>
				<?php
				$todaydate=date('Y-m-d');
				$bookindate=$resultssss->booking_date;
				$location_name=$results[0]->name;
				$ap_services = $wpdb->prefix . 'ap_services';
				 $results_service = $wpdb->get_results("SELECT * FROM $ap_services where id ='$idsss'");
				 //$bookindate >= $todaydate AND 
				if($bookindate!=''){
				?>
					<tr>
						<td><?php echo $i++;?></td>
						<td><?php echo $location_name;?></td>
						<td><?php echo $results_service[0]->name;?></td>
						<td><?php echo date('d-m-Y', strtotime($resultssss->booking_date));?></td>
						<td><?php echo date('h:i', strtotime($resultssss->start_time));?> To <?php echo date('h:i', strtotime($resultssss->end_time));?></td>
					</tr>
				
				<?php
				} }?>
					
                
				 
					
          <?php 
          echo " </tbody></table>
		  <center><a href='admin.php?page=ap-view-appointment-location' class='btn btn-primary btn-sm'>Back</a></center>
		  </div>";
	  ?><script>
	  $(document).ready(function() {
			$('#example').DataTable();
			$('.dataTables_empty').html('No any job assign');
			
		} );
		
	  </script><?php
}
?>