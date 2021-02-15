<?php
function wps_theme_func_engineer(){
	
	$message="";
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

	
	
	  $ap_engineer = $wpdb->prefix . 'ap_engineer';
	  $ap_services = $wpdb->prefix . 'ap_services';
	  if (isset($_POST['newsubmit'])) {
	    $name = $_POST['name'];	
	     $capabilitie = $_POST['capabilities'];
		 $capabilities=implode(",",$capabilitie);
		// print_r($capabilities);
		 //die;
		$daysArr = $_POST['day_of_week'];
		$day_of_week = implode("<br>",$daysArr);
	    //$day_of_week = $_POST['day_of_week'];
	    $starttime = $_POST['time1'];
	    $endtime = $_POST['time2'];
	    $status = $_POST['status'];
	    $upt=$_GET['upt'];
	    if($_GET['upt'])
	    	{
	    		$wpdb->query("UPDATE $ap_engineer SET name='$name',capabilities='$capabilities',capabilities='$capabilities',day_of_week='$day_of_week',starttime='$starttime',endtime='$endtime',status='$status' WHERE id='$upt'");

      			echo "<script>location.replace('admin.php?page=appointment-system-engineer');</script>";
	    	}else{
			
			$count_service=$wpdb->query("SELECT * from $ap_engineer where name='$name' ");
				if(!$count_service){
					
	    		$wpdb->query("INSERT INTO $ap_engineer(name,capabilities,day_of_week,starttime,endtime,status) VALUES('$name','$capabilities','$day_of_week','$starttime','$endtime','$status')");
					}else{
					$message="<tr><td colspan='6'><h5 class='text-center text-danger'>Already added this engineer name</h5></td></tr>";
				}
	    	}
	  } ?>
	  <table class="table">
		  
		  <?php echo $message;?>
		  	
	  			<tr>
                <th>Name</th>
                <th>Capabilities</th>         
				<th>Days of week</th>
				<th>Time</th>
				<th>Status</th> 
				
                <th>Action</th>
              </tr>	  
<?php
	  if(empty($_GET['upt']))

	  {  

		  $upt='';

		  $btn_name="Submit";

		  $prints=array();

	  }else{

		  $upt=$_GET['upt'];

		  $btn_name="Update";

	  }

	  $results = $wpdb->get_results("SELECT * FROM $ap_engineer where id ='$upt'");
	  ?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
		<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>

        <form  action="" method="post" id="hideshow">

          <tr>

          	<input type="hidden" id="id" name="id" value="<?php echo $results[0]->id;?>" required>

            <td><input type="text" id="name" name="name" placeholder="Engineer Name" value="<?php echo$results[0]->name;?>" required></td>

            <td>
			<?php $get_service=$results[0]->capabilities;
			$get_service=explode(',',$get_service);
			?>
			
			<select class="js-example-basic-multiple" name="capabilities[]" id="capabilities" multiple="multiple">
			<?php 
			 //$get_service=$results[0]->name;
			
			$service = $wpdb->get_results("SELECT * FROM $ap_services order by  name ASC"); 
			foreach($service as $services)
			{
					
				    $servicess=$services->id;
				?>
				<option value="<?php echo $services->id ;?>" <?php if(in_array($servicess,$get_service)){echo 'selected';}?> ><?php echo $services->name ;?></option>';
			<?php } ?>
			</select>
			</td>
			<?php
			 $daysa=$results[0]->day_of_week;
				    $dayss=explode('<br>',$daysa);	?>
            <td>
				<select class="form-control" name="day_of_week[]" multiple="multiple" class="ms"  size="7" required >
				<?php
                $mydays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday');
				foreach($mydays as $weak){	?>
					  <option value="<?php echo $weak; ?>" <?php if(in_array($weak,$dayss)){echo 'selected';}?> ><?php echo $weak; ?></option>
				<?php }?>
				</select>
		</td>
		<td>
			<input type="text" class="form-control" id="timepickerAM" name="starttime" value="<?php echo $results[0]->starttime;?>" placeholder="Start time"  required>
			<input type="text" id="timepickerPM" name="endtime" class="form-control" value="<?php echo $results[0]->endtime;?>" placeholder="End time" required>
			<input type="hidden" id="time1" name="time1" value=""  required>
			<input type="hidden" id="time2" name="time2" value=""  required>
		</td>
		<td>
			<select name="status" required>
				<option value="">Select</option>
				<option value="Yes" <?php if($results[0]->status=='Yes'){echo 'selected';}?>>Yes</option>
				<option value="No" <?php if($results[0]->status=='No'){echo 'selected';}?>>No</option>
			</select>
		</td>
		
			
            <td><button id="newsubmit" class="btn btn-primary btn-sm" name="newsubmit" type="submit"><?php echo $btn_name;?></button></td>

          </tr>

        </form>

		</div>

     </table>

    <div class='card'><table id='example' class='table'>

			

			<thead>

              <tr>

                <th>Id</th>

                <th>Name</th>

                <th>Capabilities</th>
				<th>Days of week</th>
				<th>Time</th>
				<th>Status</th>
				<th>Leaves</th> 
                <th>Action</th>

              </tr> 

			</thead>

			<tbody>
		<?php 
		  $engineer=1;
		  
		  

          $result = $wpdb->get_results("SELECT * FROM $ap_engineer order by id DESC");

          foreach ($result as $print) { ?>

                  

              <tr>

                <td><?php echo $engineer;?></td>

                <td><?php echo $print->name;?></td>

				
		
		  
                <td>
				
				<?php 
		  $s_id=$print->capabilities;
		 // echo count($s_id);
		   $s_id=explode(',',$s_id);
		   
		   $x = 0;
			$num= $coutt=count($s_id); 
			while($x <= $num) {
				$c_id=$s_id[$x];
				$results = $wpdb->get_results("SELECT * FROM $ap_services where id='$c_id' ");
				echo $results[0]->name.'<br>';
				
			  $x++ ;
			  
			  
			} 
			  ?>
				
				
				<?php //echo $results[0]->name;?>
				<?php
				//echo $i;
				//$i++; } ?>
				</td>
				
		  
				
				<td><?php echo $print->day_of_week;?></td>
				<td><?php echo $print->starttime.'<br>'.$print->endtime;?></td>
				<td><?php echo $print->status;?></td>
				<td>
					<!-- Modal of calender start -->
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop_<?php echo $engineer;?>">
					  Add/View Leave
					</button>

					<!-- Modal -->
					<div class="modal fade" id="staticBackdrop_<?php echo $engineer;?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel"><?php echo $print->name;?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
						  
								<input type="hidden" class="froms" id="leave_id_<?php echo $engineer;?>" name="" value="" >
								
								<input type="text" class="froms" id="leave_start_<?php echo $engineer;?>" name="" class="form-control" value="" autocomplete="off"  placeholder="Start date" >
								<input type="text" class="tos" name="" id="leave_end_<?php echo $engineer;?>" class="form-control" value="" autocomplete="off" placeholder="End date" >
								<button type="button" class="btn btn-primary btn-sm" id="aad_leave__<?php echo $engineer;?>">Add</button>
								
								<div id="res_leave_<?php echo $engineer;?>"> </div>
								<br>
								<table id="id_lists_<?php echo $engineer;?>">
								   <tr>
									<td>Click here  view  leave list</td>
								   </tr>
								</table>
								
								
						  
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							
						  </div>
						</div>
					  </div>
					</div>
				<!-- Modal of calender end-->
				<script>
				
				function del__list(del_list_id){
				   
				   var conf=confirm("Are you sure?");
					
					var numss="<?php echo $engineer;?>";
				   if(conf){
				    $.ajax({
						url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
							type:"POST",	
							data:{del_list_id:del_list_id},	
							success:function(data){	
							   
								get_list_<?php echo $engineer;?>();
								//$("#res_leave_"+numss).html("<h5 class='text-danger' >Deleted succefully</h5>");
								}
					});
				}
					get_list_<?php echo $engineer;?>();
					//$("#res_leave_"+numss).html("<h5 class='text-danger' >Deleted succefully</h5>");
				}
				function edit_list(edit_list_id){
				    //alert(edit_list_id);
				    $.ajax({
						url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
							type:"POST",	
							data:{edit_list_id:edit_list_id},	
							success:function(data){
							    console.log(data);
							    var mydata = JSON.parse(data);
							   
								
								
							    
							    $("#leave_id_<?php echo $engineer;?>").val(mydata[0].id);
								$("#leave_start_<?php echo $engineer;?>").val(mydata[0].leave_start);
							    $("#leave_end_<?php echo $engineer;?>").val(mydata[0].leave_end);
							    
							}
					});
				}
			
				
				function get_list_<?php echo $engineer;?>(){
					
					var id="<?php echo $print->id;?>";
					
					$.ajax({
						url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
							type:"POST",	
							data:{current_id:id},	
							success:function(data){	
							   // alert(data);
								$("#id_lists_<?php echo $engineer;?>").html(data);
								}
					});
					
					
				}
				$(document).ready(function(){
					get_list_<?php echo $engineer;?>();
				});
				$("#staticBackdrop_<?php echo $engineer;?>").click(function(){
				    get_list_<?php echo $engineer;?>();
				});
				
				$("#aad_leave__<?php echo $engineer;?>").click(function(){
				    
				    //get_list_<?php echo $print->id;?>();
				
					var leave_start=$("#leave_start_<?php echo $engineer;?>").val();
					var leave_end=$("#leave_end_<?php echo $engineer;?>").val();
					var id=$("#leave_id_<?php echo $engineer;?>").val(); 
					var eid="<?php echo $print->id;?>"; 
					
					//alert(eid__<?php echo $engineer26;?>);
					if(leave_start =='' || leave_end ==''){
							alert("Please enter start date and end date");
							return false;
					}else{
						
						$.ajax({	
							url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
							type:"POST",	
							data:{id:id,eid:eid,leave_start:leave_start,leave_end:leave_end},	
							success:function(data){	
								$("#res_leave_<?php echo $engineer;?>").html(data);
								
									$("#leave_id_<?php echo $engineer;?>").val('');
									$("#leave_start_<?php echo $engineer;?>").val('');
									$("#leave_end_<?php echo $engineer;?>").val('');
									get_list_<?php echo $engineer;?>();
									//alert("jj");
								}	
						});
					//alert(leave_start__<?php echo $print->id;?> + "=" + leave_end__<?php echo $print->id;?>);
					
					}
				});
				// date start 
		
		 $( function() {
				var dateFormat = "yy-mm-dd",
				  from = $( "#leave_start_<?php echo $engineer;?>" )
					.datepicker({
					  minDate: 0,
					  changeMonth: true,
					  numberOfMonths: 1,
					  dateFormat})
					.on( "change", function() {
					  to.datepicker( "option", "minDate", getDate( this ) );
					}),
				  to = $( "#leave_end_<?php echo $engineer;?>" ).datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					numberOfMonths: 1,
					dateFormat
				  })
				  .on( "change", function() {
					//from.datepicker( "option", "maxDate", getDate( this ) );
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
		
		// date end
				</script>
				</td>
				<!--<td>
				
				<?php
				
				$engineer++;
				
				$idss=$print->id;
				
				$resultsss = $wpdb->get_results("SELECT * FROM `$ap_appointment` WHERE engineer_id='$idss' ");
				foreach($resultsss as $resultssss){
				$idss=$resultssss->location_id;
				
				//print_r($resultsss);
				$results = $wpdb->get_results("SELECT * FROM $ap_location where id='$idss' ");
				//print_r($results);
				?>
				<?php
				$todaydate=date('Y-m-d');
				$bookindate=$resultssss->booking_date;
				$location_name=$results[0]->name;
				if($location_name==''){
					
				echo "No any location"; }
				}  
				if($bookindate >= $todaydate){
				echo date('d-m-Y', strtotime($resultssss->booking_date)).'='.$location_name.',';
				} 
				if($bookindate < $todaydate){	
				echo "No any location"; }
				
				?></td>-->
		<?php echo "
                <td><a href='admin.php?page=appointment-system-engineer&upt=$print->id' class='btn btn-primary btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> 
				<a href='admin.php?page=appointment-system-engineer&del=$print->id' class='btn btn-danger btn-sm' onClick='return conf(event)'><i class='fa fa-trash' aria-hidden='true'></i></a>
				 
				</td>

              </tr>            

            "; }
				//<a href='admin.php?page=ap-view-appointment-location&view=$print->id&name=$print->name' class='btn btn-info btn-sm'><i class='fa fa-map-marker' aria-hidden='true'></i></a>
          echo " </tbody></table></div>";

          if (isset($_GET['del'])) {

		    $del_id = $_GET['del'];

		    $wpdb->query("DELETE FROM $ap_engineer WHERE id='$del_id'");

		    echo "<script>location.replace('admin.php?page=appointment-system-engineer')</script>";

		  }?>

		<script>
		
		
		
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2({
			placeholder: "Select Services"
		});
	});	
		
		

		function conf(ev)

		{
			ev.preventDefault();
			var urlToRedirect = ev.currentTarget.getAttribute('href'); 
			console.log(urlToRedirect); 
			swal({
				title: "Are you sure?",
				text: "Your will not be able to recover this location data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					swal("Deleted!", "Your location data has been deleted.", "success");
					location.href = urlToRedirect;
				} else {
					swal("Cancelled", "Your location data is safe :)", "error");
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
			
			setInterval(function () {
				$(".hide_text").html(""); // show next div
			}, 10 * 1000); // do this every 5 seconds    

			
			
		</script>
<?php } ?>