<?php
function wps_theme_func_connection_price(){
	ap_header_function();
	global $wpdb;
	
	$message="";
	
	  $ap_connection = $wpdb->prefix . 'ap_price_con';
	  if (isset($_POST['newsubmit'])) {
	  	$daysArr = $_POST['day_of_week'];
		$day_of_week = implode("<br>",$daysArr);
	    $location = $_POST['location'];
	    $service = $_POST['service'];
	    $price = $_POST['price'];
	    $is_working = $_POST['is_working'];
	    $upt=$_GET['upt'];
	    if($_GET['upt']){
	    		$wpdb->query("UPDATE $ap_connection SET location_id='$location',service_id='$service',price='$price' ,status='$is_working' WHERE id='$upt'");
      			echo "<script>location.replace('admin.php?page=appointment-system-connection-price')</script>";
	    	}else{
				$resuls_price=$wpdb->get_results("SELECT * FROM $ap_connection where location_id='$location' AND service_id='$service' ");
				if(count($resuls_price) == '0'){
	    		$wpdb->query("INSERT INTO $ap_connection(location_id,service_id,price,status) VALUES('$location','$service','$price','$is_working')");
				}else{
					$message="<h6 class='text-center text-danger'>This lacation and service already existes! try another</h6>";
				}
				} 
	  }
	  echo $message;
	  echo '<table class="table">
			<tr>
				<th>Location </th>
				<th> Service</th>
				<th>Price</th>
				
				<th> Edit/Delete </th>
			</tr>';
	  if(empty($_GET['upt'])) {
		  $btn_name="Save";
		  $upt='';
		  $printss=array();
	  }else{
		  $upt=$_GET['upt'];
		  $btn_name="Update";
	  $resultss = $wpdb->get_results("SELECT * FROM $ap_connection where id ='$upt'");
	  foreach ($resultss as $printss) {} } ?>		
        <form action="" method="post" id="connecton">
          <tr>
          	<input type="hidden" id="id" name="id" value="'.$prints->id.'">
            <td>
			<select class="form-control" name="location" required>
				<?php
				$ap_location = $wpdb->prefix . 'ap_location';
					if(empty($printss->location_id)){
					echo '<option value="">Select Location</option>';}
					$location_id=$printss->location_id;
					if($location_id){
						$result12 = $wpdb->get_results("SELECT * FROM $ap_location where id ='$location_id'");
						foreach ($result12 as $prints12) : 
						echo '<option value="'.$prints12->id.'">'.$prints12->name.'</option>';
						endforeach; }
					$result1 = $wpdb->get_results("SELECT * FROM $ap_location order by id DESC");
					foreach ($result1 as $prints1) : ?>
				<option  value="<?php echo $prints1->id;?>"><?php echo $prints1->name;?></option>
		    <?php endforeach; ?>
			</select>
			</td>
			<td>
			<select class="form-control" name="service" required="">
				<?php 
					$ap_services = $wpdb->prefix . 'ap_services';
					if($printss->service_id){
						$result13 = $wpdb->get_results("SELECT * FROM $ap_services where id='".$printss->service_id."'");
						foreach ($result13 as $prints11) :
						echo '<option value="'.$prints11->id.'">'.$prints11->name.'</option>';
						endforeach;
					}else{ echo '<option value="">Select Service</option>'; }		
					$result = $wpdb->get_results("SELECT * FROM $ap_services order by id DESC");
					foreach ($result as $prints) : 
					?>
				<option  value="<?php echo $prints->id;?>"><?php echo $prints->name;?></option>
		    <?php endforeach; ?>
			</select>
			</td>
			 
         
			<td>
				
				<input type="number" id="tos" name="price" class="form-control" value="<?php echo $printss->price;?>" autocomplete="off" placeholder="Price" required>
			</td>
            
			<?php 
				
			echo '
            <td><button id="newsubmit" class="btn btn-primary btn-sm" name="newsubmit" type="submit">'.$btn_name.'</button></td>
          </tr>
        </form> </table>';
		echo '<div class="card"><table id="example" class="table">
			<thead>
			<tr>
				<th>Id </th>
				<th> Location </th>
				<th> Service</th>
				<th>Price <i class="fa fa-gbp" aria-hidden="true"></i></th>
				
				<th> Edit/Delete </th>
			</tr>
			 </thead>
			 <tbody>';
			$count_no=1;
          $result = $wpdb->get_results("SELECT * FROM $ap_connection order by id DESC");
          foreach ($result as $print) {
          	$location_id=$print->location_id;
			echo " <td >".$count_no++ ."</td>";
                
			
			
			//rrgrg
			$ap_location = $wpdb->prefix . 'ap_location';
					
					$location_id=$print->location_id;
						$result12 = $wpdb->get_results("SELECT * FROM $ap_location where id ='$location_id'");
						
					 ?>
					 <td ><?php echo $result12[0]->name;?></td>
		    <?php 
			//yuyy
			
			
          	$service_id=$print->service_id;
            	
          		
                
				///gfgfgfgf
				
				
				$ap_services = $wpdb->prefix . 'ap_services';
						$result13 = $wpdb->get_results("SELECT * FROM $ap_services where id='".$print->service_id."'");
						
					?>
					<td ><?php echo $result13[0]->name;?></td>
			    <?php  
				
				
				//gfhfhfh
				
                
                echo " <td ><i class=fa fa-gbp' aria-hidden='true'></i>".$print->price."</td>";
               
                
                 	
                echo "<td >
				<a href='admin.php?page=appointment-system-connection-price&upt=$print->id'><button type='button' class='btn btn-primary btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></button></a> <a href='admin.php?page=appointment-system-connection-price&del=$print->id'><button type='button' onClick='return conf(ev)' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></button></a></td>
              </tr>"; }
          echo " </tbody></table></div>";
          if (isset($_GET['del'])) {
		    $del_id = $_GET['del'];
		    $wpdb->query("DELETE FROM $ap_connection WHERE id='$del_id'");
			echo "<script>location.replace('admin.php?page=appointment-system-connection-price')</script>";
		  } ?>
	<script>
			  
		function conf(ev)
		{
			ev.preventDefault();
			var urlToRedirect = ev.currentTarget.getAttribute('href'); 
			console.log(urlToRedirect); 
			swal({
				title: "Are you sure?",
				text: "Your will not be able to recover this price data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					swal("Deleted!", "Your price data has been deleted.", "success");
					location.href = 'admin.php?page=appointment-system-connection-price';//urlToRedirect;
				} else {
					swal("Cancelled", "Your price data is safe :)", "error");
				}
			});
// 		 var confs= confirm('Are you sure?');
// 		 if(!confs)
// 			 {
// 				return false;
// 			 }
		}
		$(document).ready(function() {
			$('#example').DataTable();
		} );
		</script>
<?php } ?>