<?php
function wps_theme_func_connection(){
	
	$message='';
	
	ap_header_function();
	global $wpdb;
	  $ap_connection = $wpdb->prefix . 'ap_connection';
	  if (isset($_POST['newsubmit'])) {
	  	$daysArr = $_POST['day_of_week'];
		$day_of_week = implode("<br>",$daysArr);
	    $location = $_POST['location'];
	    $service = $_POST['service'];
	    $time_from = $_POST['time1'];
	    $time_to = $_POST['time2'];
	    $day_from = $_POST['day_from'];
	    $day_to = $_POST['day_to'];
	    $is_working = $_POST['is_working'];
	    $upt=$_GET['upt'];
	    if($_GET['upt']){
	    		$wpdb->query("UPDATE $ap_connection SET location='$location',service='$service' , day_of_week='$day_of_week' , time_from='$time_from',time_to='$time_to',day_from='$day_from',day_to='$day_to',is_working='$is_working' WHERE id='$upt'");
      			echo "<script>location.replace('admin.php?page=appointment-system-connection')</script>";
	    	}else{
			
			$count_connection=$wpdb->query("SELECT * from $ap_connection where location='$location' AND service='$service'");
			
			if(!$count_connection){
				
			
			
	    		$wpdb->query("INSERT INTO $ap_connection(location,service,day_of_week,time_from,time_to,day_from,day_to,is_working) VALUES('$location','$service','$day_of_week','$time_from','$time_to','$day_from','$day_to','$is_working')");
		
				}else{
				$message="<tr>
					<td colspan='7'><h6 class='text-center text-danger'>Already added this service and location</h6></td>
				</tr>";
			}
		} 
	  }
	  echo '<table class="table">
	  			
				'.$message.'
			<tr>
				<th>Location </th><th> Service</th>
				<th>Days of week</th>
				<th>Time</th>
				<th>Date</th>
				<th>Is working</th>
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
					if(empty($printss->location)){
					echo '<option value="">Select Location</option>';}
					echo $location_id=$printss->location;
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
					if($printss->service){
						$result13 = $wpdb->get_results("SELECT * FROM $ap_services where id='".$printss->service."'");
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
			 <?php
				$daysa=$printss->day_of_week;
				    $dayss=explode('<br>',$daysa);	?>
            <td>
				<select class="form-control" name="day_of_week[]" multiple="multiple" class="ms"  size="7" required>
			    <?php
                $mydays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday');
				foreach($mydays as $weak){	?>
					  <option value="<?php echo $weak; ?>" <?php if(in_array($weak,$dayss)){echo 'selected';}?> ><?php echo $weak; ?></option>
				<?php }?>
				</select>
			<?php echo '
		</td>
            <td>
				<input type="text" class="form-control" id="timepickerAM" name="time_from" value="'.$printss->time_from.'" placeholder="Start time"  required>
				<input type="text" id="timepickerPM" name="time_to" class="form-control" value="'.$printss->time_to.'" placeholder="End time" required>
				<input type="hidden" id="time1" name="time1" value=""  required>
				<input type="hidden" id="time2" name="time2" value=""  required>
			</td>
			<td>
				<input type="text" id="froms" name="day_from" class="form-control" value="'.$printss->day_from.'" autocomplete="off" placeholder="Start date" required>
				<input type="text" id="tos" name="day_to" class="form-control" value="'.$printss->day_to.'" autocomplete="off" placeholder="End date" required>
			</td>
            <td>';?>
			<?php 
					if(!$printss->is_working=='')
					{
						if($printss->is_working==1)
						{ $workin_or_not='Yes';}else{$workin_or_not='No';}
					$working_value='<option value="'.$printss->is_working.'">'.$workin_or_not.'</option>
					<option value="0">No</option>
					';
					}else{
						$working_value='<option value="0" selected="selected">No</option>';
					}
			echo '<select class="form-control" data-prop="is_working" name="is_working">
					'.$working_value.'
					<option value="1">Yes</option>
				</select>
			</td>
            <td><button id="newsubmit" class="btn btn-primary btn-sm" name="newsubmit" type="submit">'.$btn_name.'</button></td>
          </tr>
        </form> </table>';
		echo '<div class="card"><table id="example" class="table">
			<thead>
			<tr>
				<th>Id </th>
				<th> Location </th>
				<th> Service</th>
				<th>Days of week</th>
				<th>Time</th>
				<th>Date</th>
				<th>Is working</th>
				<th> Edit/Delete </th>
			</tr>
			 </thead>
			 <tbody>';
			$count_no=1;
          $result = $wpdb->get_results("SELECT * FROM $ap_connection order by id DESC");
          foreach ($result as $print) {
          	$location_id=$print->location;
          	$service_id=$print->service;
            	$location_data = $wpdb->get_results("SELECT * FROM $ap_location where id='$location_id' ");
          		foreach ($location_data as $print_location) {
          			echo "<tr> <td >".$count_no++."</td><td>".$print_location->name."</td><td>"; }
          		$service_data = $wpdb->get_results("SELECT * FROM $ap_services where id='$service_id'");
           		foreach ($service_data as $print_service) { 
           			echo $print_service->name."</td>"; }
                echo " <td >".$print->day_of_week."</td>
                <td >".date('h:i A', strtotime($print->time_from))."<br>
                 	".date('h:i A', strtotime($print->time_to))."</td>
                <td >".date('d/m/Y', strtotime($print->day_from))."<br>
                 	".date('d/m/Y', strtotime($print->day_to))."</td>";
                 	if($print->is_working == '0')
                 	{ echo "<td >No</td>";
                 	}else{ echo "<td >Yes</td>"; }
                echo "<td >
				<a href='admin.php?page=appointment-system-connection&upt=$print->id'><button type='button' class='btn btn-primary btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></button></a> <a href='admin.php?page=appointment-system-connection&del=$print->id' onClick='return conf(event)' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
              </tr>"; }
          echo " </tbody></table></div>";
          if (isset($_GET['del'])) {
		    $del_id = $_GET['del'];
		    $wpdb->query("DELETE FROM $ap_connection WHERE id='$del_id'");
			echo "<script>location.replace('admin.php?page=appointment-system-connection')</script>";
		  } ?>
			<script>
			  $( function() {
				var dateFormat = "yy-mm-dd",
				  from = $( "#froms" )
					.datepicker({
					  defaultDate: "+1w",
					  changeMonth: true,
					  numberOfMonths: 1,
					  dateFormat})
					.on( "change", function() {
					  to.datepicker( "option", "minDate", getDate( this ) );
					}),
				  to = $( "#tos" ).datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					numberOfMonths: 1,
					dateFormat
				  })
				  .on( "change", function() {
					from.datepicker( "option", "maxDate", getDate( this ) );
				  });
				function getDate( element ) {
				  var date;
				  try {
					date = $.datepicker.parseDate( dateFormat, element.value );
				  } catch( error ) {
					date = null;
				  }
				  return date;
				}
			  } );
			  $('#timepickerAM').timepicker({
				uiLibrary: 'bootstrap4','timeFormat': 'h:mm:ss a'
			 });$('#timepickerPM').timepicker({
				uiLibrary: 'bootstrap4','timeFormat': 'h:mm:ss a'
			 });
			 var timepickerAM =$("#timepickerAM").val();
			 $("#time1").val(timepickerAM);
			 var timepickerPM =$("#timepickerPM").val();
			 $("#time2").val(timepickerPM);
			$("input#timepickerAM").change(function(){
			  var timepickerAM =$("#timepickerAM").val();
			 $("#time1").val(timepickerAM);
			});
			$("input#timepickerPM").change(function(){
			  var timepickerPM =$("#timepickerPM").val();
			  $("#time2").val(timepickerPM);
			});
			$('#timepicker2').timepicker({
					uiLibrary: 'bootstrap4','timeFormat': 'h:mm:ss a'
			 });
			 $("input#timepickerPM").change(function(){
				var timepickerAM=$("#timepickerAM").val();
				var timepickerPM=$("#timepickerPM").val();
					if(timepickerAM  >= timepickerPM){
					alert("Please chose correct time start time and end time .");
					$("#timepickerPM").val('');
					return false;
				}
			});
		function conf(ev)
		{
			ev.preventDefault();
			var urlToRedirect = ev.currentTarget.getAttribute('href'); 
			console.log(urlToRedirect); 
			swal({
				title: "Are you sure? delete connection",
				text: "Your will not be able to recover this connection data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					swal("Deleted!", "Your connection data has been deleted.", "success");
					location.href = urlToRedirect;
				} else {
					swal("Cancelled", "Your connection data is safe :)", "error");
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