<?php
function wps_theme_func_addnew()
{ 
	
	global $wpdb;
	
error_reporting('e_notice');
  //$id=base64_decode($_GET['token_id']);
  $id=$_GET['token_id'];
  $upt=$_GET['upt'];
   //$id='34';
 $results = $wpdb->get_results( "SELECT * FROM wp_ap_appointment where id='$id' ");				
	
	  $ap_appointment = $wpdb->prefix . 'ap_appointment';
	  
	  if($upt){ $page_title="Update Appointment"; }else{ $page_title="Add New Appointment"; }
	 $result = $wpdb->get_results("SELECT * FROM $ap_appointment WHERE id='$id'");
      foreach ($result as $print) {}	  
		echo ' 
		<form action="" method="post" id="booking-form" >	
		<input type="hidden" id="upt" name="upt"  value="'.$upt.'" required>
			<div class="container newappoinyment">
	        <table class="table newappoinyment">
	        	<tr><th colspan="2"><h4 class="text-center ">'.$page_title.'</h4></th></tr>
				<tr><th colspan="2"><h6 class="text-center text-success">'.$message.'</h6></th></tr>
	  			 <tr>
                <th>Location</th> ';?>
				<?php
				$ap_location = $wpdb->prefix . 'ap_location';
				echo '<td> <select class="form-control" id="location_id" name="location_id" required>';
				if($print->location_id)
				{
					$location_ids = $wpdb->get_results("SELECT * FROM $ap_location where id=$print->location_id ");
					foreach ($location_ids as $print_location_id)
					{
					echo '<option value="'.$print_location_id->id.'">'.$print_location_id->name.'</option>';
					}
				}else{
					echo '<option value="">Select Location</option>';
				}
              $location_data = $wpdb->get_results("SELECT * FROM $ap_location order by id DESC ");
              foreach ($location_data as $print_location) {
               
				echo '<option value="'.$print_location->id.'">'.$print_location->name.'</option>';               
              } ?>
			  </select>
			  	<div id="error_location"></div>
			  <div style="display:none;" id="image"><img width="50" src="<?php echo AP_PLUGIN_DIR?>/assets/images/loder_gif.gif"></div>

			   </td></tr>
			   	<tr>
			   		<th>Services</th>
			   		<td>
				   		<select class="form-control" id="content_new" name="service_id" >
							<?php 
						
						 $service_id=$print->service_id;
                          if($service_id!=''){
							$query= "SELECT * FROM  wp_ap_services where id = $service_id";
							$results_serv = $wpdb->get_results($query);
							$option='';
							foreach($results_serv as $row){?>
							<option value="<?php echo $row->id?>" <?php if($row->id==$service_id){echo 'selected';}?>><?php echo  $row->name; ?></option>

							<?php }} ?>
								
							</select>
								
			   		 </td>
					 <td class="tooltip_service"><button id="content_tooltip" style="display:none" type="button"  data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-info-circle" aria-hidden="true"></i></button></td>
			   	</tr>
			   <?php 

				//$location_datas = $wpdb->get_results("SELECT * FROM $ap_location where  id='$print->location_id' ");
              
               //$pricess=$print->price-$location_datas[0]->location_price;			   
				echo '</tr>
                <tr>
                <th>
                Number of Service</th>
                <td><input type="number" class="form-control" id="number_service" placeholder="Please enter no. of service" name="number_service" autocomplete="off" value="'.$print->number_service.'"  required>
                <div class="col-md-6" id="error_number"></div>
                
	                
	                
	                	<div id = "datepicker-2"></div>
	                	<div class="nit-hours">
	                		<div id="error_slot" >
								<input type="hidden" name="booking_date" value="'.$print->booking_date.'" id="booking_date" >
									<input type="hidden" name="start_time" value="'.$print->start_time.'" id="start_time" >
									<input type="hidden" name="end_time" value="'.$print->end_time.'" id="end_time" >
									<input type="hidden" name="service_price"  id="service_price" value="'.$print->price.'" >
									
									<input type="hidden" name="edit_id" id="edit_id" value="'.$print->id.'" >
									
									<input type="hidden" value="'.$print->booking_date.'" name="current_booking_date" id="current_booking_date">
							</div>

							<div style="display:none;" id="image_cont"><img width="50" src="'.AP_PLUGIN_DIR.'/assets/images/loder_gif.gif"></div>
								<ul id="content_slot">
									
									
								</ul>
							
				</div>
						
	            </div>

                
			 </table>
			 <div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Full Name * :</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Please enter name" value="'.$print->name.'"  required>
						<div id="error_name"></div>
					</div>
					<div class="form-group">
						<label>Contact Number * :</label>
						<input type="number" class="form-control" id="phone" name="phone" placeholder="Please enter phone" value="'.$print->phone.'"  required>
						<div id="error_phone"></div>
					</div>
					<div class="form-group">
						<label>Road Name * :</label>
						<input type="text" class="form-control" id="road_name" name="road_name" placeholder="Please enter road name"  value="'.$print->road_name.'" required>
						<div id="error_road_name"></div>
					</div>
					<div class="form-group">
						<label>Country * :</label>
						<input type="text" class="form-control" id="country" placeholder="Please enter country name" name="country" value="'.$print->country.'"   required>
						<div id="error_country"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Email address * :</label>
						<input type="email" class="form-control" id="email" placeholder="Please enter email" name="email" value="'.$print->email.'"  required>
						<div id="error_email"></div>
					</div>
					<div class="form-group">
						<label>House Name/Number * :</label>
						<input type="text" class="form-control" id="house_name" placeholder="Please enter house name" name="house_name" value="'.$print->house_name.'"  required>
						<div id="error_house_name"></div>
					</div>
					<div class="form-group">
						<label>Town * :</label>
						<input type="text" class="form-control" id="town" name="town" placeholder="Please enter town" value="'.$print->town.'"  required>
						<div id="error_town"></div>
					</div>
					<div class="form-group">
						<label>Post Code * :</label>
						<input type="text" class="form-control" id="post_code" placeholder="Please enter post code" name="post_code" value="'.$print->post_code.'"  required>
						<div id="error_post_code"></div>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="form-group">
						<label>Additional Information :</label>
					
						<a href="#" id="second_tooltop" data-toggle="tooltip"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="tooltiptext">Site </span></a>

						
						<textarea class="form-control" id="description" name="description" placeholder="Please enter description">'.$print->description.'</textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<button id="newsubmit" name="newsubmit" type="submit" class="btn btn-info" >Submit</button>
						<input type="reset" class="btn btn-success" value="Cancel">
					</div>
				</div>
			</div>
        </form>
        
		</div>
		';
?>
<script>
$("#booking-form").on('submit',(function(e) {
    e.preventDefault();
	
		var upt=$('#upt').val();
		var edit_id=$('#edit_id').val();
		var location_id=$('#location_id').val();
		var number_service=$('#number_service').val();
		var name=$('#name').val();
		var phone=$('#phone').val();
		var road_name=$('#road_name').val();
		var country=$('#country').val();
		var email=$('#email').val();
		var house_name=$('#house_name').val();
		var town=$('#town').val();
		var post_code=$('#post_code').val();
		var start_time=$('#start_time').val();
		if(location_id==''){
		$("#error_location").html("<font color='red'>Please select location</font>");
		$('#location_id').focus('css','red');
		
		}
		else if(number_service==''){
		$("#error_location").html("");
		$("#error_number").html("<font color='red'>Please select service number</font>");
		$('#number_service').focus();	
		}else if(name==''){
		$("#error_number").html("");
		$("#error_name").html("<font color='red'>Please Fill name</font>");
		$('#name').focus();	
		}else if(phone==''){
			$("#error_name").html("");
		$("#error_phone").html("<font color='red'>Please Fill Phone</font>");
		$('#phone').focus();	
			}else if(road_name==''){
		$("#phone").html("");
		$("#error_road_name").html("<font color='red'>Please Fill road name</font>");
		$('#road_name').focus();
		}else if(country==''){		
		$("#road_name").html("");
		$("#error_country").html("<font color='red'>Please Fill country</font>");
		$('#country').focus();
		}else if(email==''){		
		$("#country").html("");
		$("#error_email").html("<font color='red'>Please Fill email</font>");
		$('#email').focus();
		}else if(house_name==''){		
		$("#email").html("");
		$("#error_house_name").html("<font color='red'>Please Fill house name</font>");
		$('#house_name').focus();
		}else if(town==''){		
		$("#house_name").html("");
		$("#error_town").html("<font color='red'>Please Fill town</font>");
		$('#town').focus();
		}else if(post_code==''){		
		$("#town").html("");
		$("#error_post_code").html("<font color='red'>Please Fill post code</font>");
		$('#post_code').focus();
		}else if(start_time==''){		
		$("#post_code").html("");
		$("#error_slot").html("<font color='red'>Please select time</font>");
		$('#error_slot').focus();
		var scrollPos =  $("#error_slot").offset().top;
         $(window).scrollTop(scrollPos);
			return false;
		}else{
    $.ajax({
          url: "<?php echo AP_PLUGIN_DIR ?>add_appoinment_sql.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
          cache: false,
      processData:false,
      success: function(datas)
        {
			if(upt != ''){
			alert('Booking Update successfully');
			}else{
				alert('Booking submit successfully');
				
			}
			var edit_id=$("#edit_id").val();
			if(edit_id != '')
			{
				window.location.replace('?token_id');
				var url = '<?php echo home_url();?>';
				var new_vars=url+'/view-detail/?token_id='+edit_id;
				window.location.href=new_vars;
				
			}else{
				window.location.replace('?token_id');
				var url = window.location.href;
				var new_vars=url+'/view-detail/?token_id='+datas;
				window.location.href=new_vars;
			}
			
			
			
				
			
			
			
			$("#booking-form")[0].reset();
        },
        error: function() 
        {
          alert('Form submit failed ! Please try again');
		  
        }           
     });
	}
  }));

$(document).on('click','#newsubmit',function() {
	var upt=$('#upt').val();
		var location_id=$('#location_id').val();
		var number_service=$('#number_service').val();
		var name=$('#name').val();
		var phone=$('#phone').val();
		var road_name=$('#road_name').val();
		var country=$('#country').val();
		var email=$('#email').val();
		var house_name=$('#house_name').val();
		var town=$('#town').val();
		var post_code=$('#post_code').val();
		var start_time=$('#start_time').val();
		if(location_id==''){
		$("#error_location").html("<font color='red'>Please select location</font>");
		$('#location_id').focus('css','red');
		
		}
		else if(number_service==''){
		$("#error_location").html("");
		$("#error_number").html("<font color='red'>Please select service number</font>");
		$('#number_service').focus();	
		}else if(name==''){
		$("#error_number").html("");
		$("#error_name").html("<font color='red'>Please Fill name</font>");
		$('#name').focus();	
		}else if(phone==''){
			$("#error_name").html("");
		$("#error_phone").html("<font color='red'>Please Fill Phone</font>");
		$('#phone').focus();	
			}else if(road_name==''){
		$("#phone").html("");
		$("#error_road_name").html("<font color='red'>Please Fill road name</font>");
		$('#road_name').focus();
		}else if(country==''){		
		$("#road_name").html("");
		$("#error_country").html("<font color='red'>Please Fill country</font>");
		$('#country').focus();
		}else if(email==''){		
		$("#country").html("");
		$("#error_email").html("<font color='red'>Please Fill email</font>");
		$('#email').focus();
		}else if(house_name==''){		
		$("#email").html("");
		$("#error_house_name").html("<font color='red'>Please Fill house name</font>");
		$('#house_name').focus();
		}else if(town==''){		
		$("#house_name").html("");
		$("#error_town").html("<font color='red'>Please Fill town</font>");
		$('#town').focus();
		}else if(post_code==''){		
		$("#town").html("");
		$("#error_post_code").html("<font color='red'>Please Fill post code</font>");
		$('#post_code').focus();
		}else if(start_time==''){		
		$("#post_code").html("");
		$("#error_slot").html("<font color='red'>Please select time</font>");
		$('#error_slot').focus();
		var scrollPos =  $("#error_slot").offset().top;
         $(window).scrollTop(scrollPos);
			return false;
		}
});



</script>
<script>
$(function() {
$(document).on('change','#location_id',function() {
  
	     var location_id = $(this).val();
		 
		         $.ajax({
                type:'POST',
				beforeSend: function(){
			
                 $('#image').show();
               },
                url:"<?php echo AP_PLUGIN_DIR ?>add_appoinment_sql.php",
                data:{location_id:location_id},
                success:function(data){
					$(function () {
						  $('[data-toggle="tooltip"]').tooltip()
						})
				 $('#content_new').html(data);
				 //$('#content_tooltip').prop('title', data);
				                    
                },
				complete: function(){
                    $('#image').hide();
              }
            }); 
        
   
    });
	
	 });
    $(function() {
$(document).on('change','#location_id',function() {
  
	     var location_id = $(this).val();
		 
		         $.ajax({
                type:'POST',
				beforeSend: function(){
			
                 $('#image').show();
               },
                url:"<?php echo AP_PLUGIN_DIR ?>ap-tooltip.php",
                data:{location_id:location_id},
                success:function(data){
					if(data !='')
					{
					$("#content_tooltip").show();
					}else{
						$("#content_tooltip").hide();
					}
				 $('#content_tooltip').prop('title', data);
			               
                },
				complete: function(){
                    $('#image').hide();
              }
            }); 
        
   
    });
	
	 });
   

</script>
  <script>
         $(function() {
            $( "#datepicker-2" ).datepicker({
			dateFormat: "yy-mm-dd",
			minDate: 0,
			maxDate: "+2M"
			});
			   });
      </script>
	  
	   <script>
         $(function() {
   
   
		$(document).on('change','#location_id',function() {
			$('#content_slot').html('');
			
			});
			
			
			$(document).on('keyup change','#number_service',function() {
			$('#content_slot').html('');
			
			});
});
      </script>
	  
	  
	  <script>
         $(function() {
   
   
		$(document).on('change','#datepicker-2',function() {
		
        var slot_date = $(this).val();
		
		
		$('#booking_date').val(slot_date);
		
		var location_id=$('#location_id').val();
		var service_id=$('#content_new').val();
		var number_service=$('#number_service').val();
		
		if(location_id!='' && service_id!='' && number_service!=''){
		  $.ajax({
		  type:'POST',
		 beforeSend: function(){
			  $('#content_slot').html('');
                 $('#image_cont').show();
               },
         url:'<?php echo AP_PLUGIN_DIR ?>add_appoinment_sql.php',
		 data:{slot_date:slot_date,loc_id:location_id,service_id:service_id,number_service:number_service},
		 success: function(data){
			
			 $('#content_slot').html(data);
        },
		complete: function(){
                    $('#image_cont').hide();
              }
        }); 
		
		}else{
			
			alert('Please select location and number service');	
		}
        
    });
});
      </script>
	  
	  <script>
        
   
    $(document).ready(function() {
        var slot_date = $('#current_booking_date').val();
		if(slot_date!=''){
		$('#booking_date').val(slot_date);
		
		var location_id=$('#location_id').val();
		var service_id=$('#content_new').val();
		var number_service=$('#number_service').val();
		if(location_id!='' && service_id!='' && number_service!=''){
		  $.ajax({
		  type:'POST',
		  beforeSend: function(){
			  $('#content_slot').html('');
                 $('#image_cont').show();
               },
         url:'<?php echo AP_PLUGIN_DIR ?>add_appoinment_sql.php',
		 data:{slot_date:slot_date,loc_id:location_id,service_id:service_id,number_service:number_service},
		 success: function(data){
			
			 $('#content_slot').html(data);
		
		   
        },
		complete: function(){
                    $('#image_cont').hide();
              }
		
        }); 
		
		}
        }
    });

      </script>
	  
	  
	  <script>
 	$(function() {
		$(document).on("click",".slot_time",function() {
		var start_time = $(this).attr('id');
		var end_time = $(this).attr('data-id');
		
		var service_price = $(this).attr('data-price');
		
		$('#start_time').val(start_time);
		$('#end_time').val(end_time);
		$('#service_price').val(service_price);
						
		$(this).addClass('bg-slot').siblings().removeClass('bg-slot');
			
});
	});

 </script>
 <script>
  $( function() {
   $( document ).tooltip();
  } );
  </script>
<?php } ?>