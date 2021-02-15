<?php 
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
if (!$wpdb) { $wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST); } else { global $wpdb; } ?>
		<table  id='exampleapp'>
			<thead>
                <th>Id </th>
				<th>Location </th>
				<th>Service </th>
				<th>Date</th>
				<th>Time</th>
				<th> Price(<i class='fa fa-gbp' aria-hidden='true'></i>) </th>
				 <th>Status </th>
                <th>Name</th>
				<th>Phone</th>
                <th>Action</th> 
			  </thead>
			  <tbody  id='load_all_data' > 
			  <?php          
		$connection_no=1;
      	$ap_appointment = $wpdb->prefix . 'ap_appointment';
		$ap_order_list =$wpdb->prefix . 'ap_order_list';
		$ap_payment=$wpdb->prefix .'ap_payment';
		$result = $wpdb->get_results("SELECT * FROM $ap_appointment where order_no !='' order by id DESC");
		if(!empty($result))
		{
			
          foreach ($result as $print) {
          	echo "<tr><td >".$connection_no++."</td>";
            $location_id=$print->location;
            $service_id=$print->service_id;
				$ap_location = $wpdb->prefix . 'ap_location';
              $location_data = $wpdb->get_results("SELECT * FROM $ap_location where id='$location_id' ");
              foreach ($location_data as $print_location) {
                
                echo " 
				<td>".$print_location->name."</td>";
              }
              echo "<td>";
			  $ap_services = $wpdb->prefix . 'ap_services';
			  $order_no=$print->order_no;
			  $service_id = $wpdb->get_results("SELECT * FROM $ap_order_list where order_no='$order_no'");
			  foreach ($service_id as $print_service) { 
			  	$print_service=$print_service->service;
              $service_data = $wpdb->get_results("SELECT * FROM $ap_services where id='$print_service'");
              
                echo $service_data[0]->name.'<br>';
              }
               echo "</td>";
              $service_id = $wpdb->get_results("SELECT * FROM $ap_order_list where order_no='$order_no'");
              echo "<td >";
			  foreach ($service_id as $print_service) { 
              echo date('d/m/Y', strtotime($print_service->booking_date)).'<br>';
			}
			echo "</td ><td >";
			  foreach ($service_id as $print_service) { 
			
              echo date('h:iA', strtotime($print_service->start_time)).'<br>';
			}
			echo "</td ><td> ";

			$service_id = $wpdb->get_results("SELECT SUM(service_price) as total_price FROM $ap_order_list where order_no='$order_no'");
			  foreach ($service_id as $print_service) { 
			  	echo $print_service->total_price;
			  }
			  	echo "</td>";
				 $booking_id=$print->id;
				 $booking_status = $wpdb->get_results("SELECT * FROM $ap_payment where booking_id='$order_no'");
					if(empty($booking_status))
					{
				 		echo "<td style='background-color:yellow;'>Pending</td>";					
					}
					else
					{
						foreach($booking_status as $booking_conf)
						{
							$pstatus=$booking_conf->payment_status;
							?>
							<td <?php if($pstatus=='Completed'){ echo "style='background-color:green;color:white'"; }else{ echo "style='background-color:yellow;'";}?> ><?php echo $booking_conf->payment_status?></td>
						<?php }
					} 

                echo " <td >".$print->name."</td >
				<td >".$print->phone."</td >
				
				<td ><a href='admin.php?page=ap-view-appointment&upt=$print->order_no'><button type='button' class='btn btn-success btn-sm'><i class='fa fa-eye' aria-hidden='true'></i></button></a>
				 <button type='button' onClick='return conf(".$print->order_no.")' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></button></td>
              </tr>            
            ";
          }
		  echo "</tbody></table>";
		}

	?>