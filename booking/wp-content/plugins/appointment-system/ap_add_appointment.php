<?php
function wps_theme_func_addnew()
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

	
	
	
error_reporting('e_notice');
  //$id=base64_decode($_GET['token_id']);
  $id=$_GET['token_id'];
   //$id='34';
 $results = $wpdb->get_results( "SELECT * FROM $ap_appointment where id='$id' ");				
	
	  $ap_appointment = $wpdb->prefix . 'ap_appointment';
	  
	  if($upt){ $page_title="Update Appointment"; }else{ $page_title="Add New Appointment"; }
	 $result = $wpdb->get_results("SELECT * FROM $ap_appointment WHERE id='$id'");
      foreach ($result as $print) {} ?>	  
		 
		<form action="" method="post" id="booking-form" >
			<input type="hidden" id="order_no" name="order_no" value="<?php echo date("Ymd").date("his");?>">
		    <input type="hidden" id="upt" name="upt"  value="<?php echo $upt;?>" required>
			
			<div class="accordion-container">

				<div class="accordion-section">

					<a class="section-title" href="#steps-1" onClick="ga('send', 'event', { eventCategory: 'Book Appointment Step 1', eventAction: 'Book Appointment step 1 next button', eventLabel: 'Book Appointment Step 1'});">Step 1</a>

					<div class="steps step-1 open" id="steps-1">

						<div class="flex">

							<div class="left-side">
					
								<!-- <div class="section section--title">
									<p class="title"><?php echo $page_title?></p>
									<p class="title"><?php echo $message?></p>
								</div> -->

								<div class="section section--location">
									
									<p class="sub-title">Location</p>
									<?php
									$ap_location = $wpdb->prefix . 'ap_location'; 
									?>

									<select class="form-control" id="location_id" name="location_id" required>
									
									<?php
								
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
									
								</div>
								
								<div class="section section--services">
										
									<p class="sub-title">What service would you like?</p>
									
										<select class="form-control service_value" id="content_new_1" name="service_id" >
											<option value="" >Please select a service</option>
											<?php 
											$service_id=$print->service_id;
											if($service_id!=''){
											$query= "SELECT * FROM  $ap_services where id = $service_id";
											$results_serv = $wpdb->get_results($query);
											$option='';
											foreach($results_serv as $row){?>
											<option value="<?php echo $row->id?>" <?php if($row->id==$service_id){echo 'selected';}?>><?php echo  $row->name; ?></option>
											<?php }} ?>
										</select>
									
									<p class="sub-title">How many of this service would you like?</p>
									
									<div class="input-group number-of-service"> 
										<span>
											<input type="number" min="1" max="999" class="form-control number_service" id="number_service_1" placeholder="No. of service" autocomplete="off" step="1"   value="<?php echo $print->number_service;?>" name="quantity" class="quantity-field">
											<input type="button" value="-" class="button-minus" data-field="quantity">
											<input type="button" value="+" class="button-plus" data-field="quantity">
										</span>

										<div class="new" ></div>
										<div id="add" class="text-center mb-4"><a href="javascript:void(0)" class="text-center btn btn-info ">Add Service to Cart</a></div>
									</div>
									
									<!--<td class="removebtn minus"></td>-->

									
									
								</div>
										
								<div class="section section--added">

									<table class="table newappoinyment">

										<div class="table" id="alldatahead">
											<thead>
											<th>Location</th>
											<th>Service Name</th>
											<th>No. of service</th>
											<th>Action</th>
											</thead>
											<tbody id="alldata">
											
											</tbody>
											
										</div>

										<div id="adde_slot"></div>
										<div id="slots"></div>

									</table>	

								</div>

							</div><!-- end left side -->

						

							<div class="right-side">

							<p class="sub-title">Please select a date</p>
								
								<div class="section section--calendar calender">
									<div id = "datepicker-2"></div>
									<div class="nit-hours new_slat">
										<div id="error_slot" >
											<input type="hidden" name="booking_date" class="booking_date" value="<?php echo $print->booking_date?>" id="booking_date" >
											<input type="hidden" name="start_time" value="<?php echo $print->start_time;?>" id="start_time" >
											<input type="hidden" name="end_time" value="<?php echo $print->end_time?>" id="end_time" >
											<input type="hidden" name="service_price" class="price_value"  id="service_price" value="<?php echo $print->price;?>" >
											<input type="hidden" name="edit_id" id="edit_id" value="<?php echo $print->id;?>" >
											<input type="hidden" value="<?php echo date('Y-m-d')?>" name="current_booking_date" id="current_booking_date">
										</div>
										<div class="key">
											<div class="key-item"><span class="key-red"></span><div> = Unavailable</div></div>
											<div class="key-item"><span class="key-gray"></span> = Available</div>
											<div class="key-item"><span class="key-green"></span> = Selected</div>
										</div>
										<?php echo '<div style="display:none;" id="image_cont_1" class="image_cont"><img width="50" src="'.AP_PLUGIN_DIR.'/assets/images/loder_gif.gif"></div>';?>
										<ul id="content_slot_1" class="content_slot">
										</ul>
									</div>
									<div class="booking-cta">
										<p>Can't find a suitable date?</p>
										<p>Give our helpful team a call on</p>
										<p><?php do_action("ld_default"); ?></p>
									</div>
									<a class="next-button text-center btn btn-info" href="#steps-2">Next</a>
								</div>

							</div><!-- end right side -->
						
						</div>
					
					</div><!-- end step 1 -->

				</div><!-- Accordion end -->

				<div class="accordion-section section-two">

					<a class="section-title" href="#steps-2" onClick="ga('send', 'event', { eventCategory: 'Book Appointment Step 2', eventAction: 'Book Appointment step 2 next button', eventLabel: 'Book Appointment Step 2'});">Step 2</a>

					<div class="steps step-2" id="steps-2">

						<div class="full-width">
					
							<div class="row section section--contact-details">
								<div class="col-md-6">
									<div class="form-group">
										<label>Full Name * :</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Please enter name" value="<?php echo $print->name;?>"  required>
										<div id="error_name"></div>
									</div>
									<div class="form-group">
										<label>Contact Number * :</label>
										<input type="number" class="form-control" id="phone" name="phone" placeholder="Please enter phone" value="<?php echo $print->phone;?>"  required>
										<div id="error_phone"></div>
									</div>
									<div class="form-group">
										<label>Road Name * :</label>
										<input type="text" class="form-control" id="road_name" name="road_name" placeholder="Please enter road name"  value="<?php echo $print->road_name;?>" required>
										<div id="error_road_name"></div>
									</div>
									<div class="form-group">
										<label>Post Code * :</label>
										<input type="text" class="form-control" id="post_code" placeholder="Please enter post code" name="post_code" value="<?php echo $print->post_code;?>"  required>
										<div id="error_post_code"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Email address * :</label>
										<input type="email" class="form-control" id="email" placeholder="Please enter email" name="email" value="<?php echo $print->email;?>"  required>
										<div id="error_email"></div>
									</div>
									<div class="form-group">
										<label>House Name/Number * :</label>
										<input type="text" class="form-control" id="house_name" placeholder="Please enter house name" name="house_name" value="<?php echo $print->house_name;?>"  required>
										<div id="error_house_name"></div>
									</div>
									<div class="form-group">
										<label>Town * :</label>
										<input type="text" class="form-control" id="town" name="town" placeholder="Please enter town" value="<?php echo $print->town;?>"  required>
										<div id="error_town" >
										</div>
									</div>					<div class="form-group" style="display:none">						<label>Country * :</label>						<input type="text" class="form-control" id="country" name="country" placeholder="Please enter country" value="<?php echo $print->country;?>"  >						<div id="error_town"></div>					</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<label>Additional Information :</label>
										<button id="second_tooltop" data-toggle="tooltip" disabled><span class="tooltiptext">Site foreman details, Location of flue, access details, Parking restrictions etc.</span><i class="fa fa-info-circle" aria-hidden="true"></i></button>
										<textarea class="form-control" id="description" name="description" placeholder="Please enter description"><?php echo $print->description?></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Is free parking available? :</label>
										<input type="radio" id="free" name="parking" value="Free" required> Yes
										<input type="radio" id="paid" name="parking" value="Paid" required> No
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									
										<input type="checkbox"  id="term" name="term" value="" required > Accept terms and conditions. <a href="https://www.enviro-flame.co.uk/terms-and-conditions/" target="blanck" >click here</a>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group confirm-booking-group">
										<?php echo '<div style="display:none;" id="image_submit" class="image_cont"><img width="50" src="'.AP_PLUGIN_DIR.'/assets/images/processing.gif"></div>';?>
										<button id="newsubmit"  name="newsubmit" type="submit" class="btn btn-info" disabled onClick="ga('send', 'event', { eventCategory: 'Book Appointment Confirmation', eventAction: 'Book Appointment Confirmation button', eventLabel: 'Book Appointment Confirmation'});">Confirm Booking</button>
										<input type="reset" class="btn btn-success" value="Cancel">
									</div>
								</div>
							</div>
						</div>
					</div> <!-- Section 2 End -->
				</div> <!-- Accordion End -->
			</div>
        </form>
       
		

<div id="dialog" title="Notice">
  <p>If you do not provide a parking space or permit, you will be charged for parking at the pay and display rate for a minimum of 2 hours.  We will call for payment after your service.</p>
</div>
<div id="terms" title="Terms and conditions">
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>


<!--modal start-->

<!-- onclick="return confirm('By ticking the box you will be bound by our terms and conditions ')" -->
<!--model end-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">

	$("#term").click(function(){
		swal('By ticking this box you agree that you have read and accept our standard terms and conditions');
	});

	//swal("Hello world!");

function myfunctionold(){

$("#datepicker-2").datepicker("destroy");
$("#datepicker-2").datepicker({
	    beforeShowDay: function(date) {   
	        var day = date.getDay();
	        //return [(day != days ), ''];
			
			 return [(day != 0 && day != 2)];
	    },
		dateFormat: "yy-mm-dd",
		minDate: 0,
			maxDate: "+2M"
	});
	
 $( "#datepicker-2" ).datepicker("refresh");
}

function myfunction(disabledDays){
$("#datepicker-2").datepicker("destroy");
	
$("#datepicker-2").datepicker({
	    beforeShowDay: function(date) {  
	        var day = date.getDay();
	      
	for (i = 0; i < disabledDays.length; i++) {
		if($.inArray(day,disabledDays) != -1) {
		
			return [false];
		}else{
		return [true];
		}
	}
	    },
		dateFormat: "yy-mm-dd",
		minDate: +1,
			maxDate: "+2M"
	});
	
 $( "#datepicker-2" ).datepicker("refresh");
}





$(document).on('click','#add',function() {
	
	



		var rowCount = $('#alldata tr').length;
		//alert(rowCount);

	 	for(var i = 1; i <= rowCount; i++){ 
	 	var location=$(".location").val();
	 	var service=$(".service_"+i).val();
		//alert(service);
	 	$.ajax({	
	 		url:"<?php echo AP_PLUGIN_DIR ?>chk_slot_sql.php",	
	 		type:"POST",	
	 		data:{location:location,service:service},	
	 		success:function(data){	
	 			var rCount = data.length;
	 			var res = data.split("<br>");
	 			//alert(res);
				
	// 			//MTWTFS
             
			 
			 
var myarray = [];

				

		        if ($.inArray('Monday',res)!= -1) {
		            //alert(name + ' is in the Monday array!');
				   
				    
		        } else {
					myarray.push(1);
		            //alert(name + ' is NOT in the Monday array...');
		        }

		        if ($.inArray('Tuesday',res)!= -1) {
		           // alert(name + ' is in the Tuesday array!');
					
		        } else {
					  myarray.push(2);
		            //alert(name + ' is NOT in the Tuesday array...');
		        }

		        if ($.inArray('Wednesday', res)!= -1) {
		            //alert(name + ' is in the Wednesday array!');
					 
		        } else {
					 myarray.push(3);
		            //alert(name + ' is NOT in the Wednesday array...');
		        }

		        if ($.inArray('Thursday', res)!= -1) {
		            //alert(name + ' is in the Thursday array!');
					 
		        } else {
					  myarray.push(4);
		            //alert(name + ' is NOT in the Thursday array...');
		        }

		        if ($.inArray('Friday', res)!= -1) {
		           // alert(name + ' is in the Friday array!');
					  
		        } else {
					myarray.push(5);
		            //alert(name + ' is NOT in the Friday array...');
		        }

		        if ($.inArray('Saturday', res)!= -1) {
		           //alert(name + ' is in the Saturday array!');
				   
		        } else {
					  myarray.push(6);
		            //alert(name + ' is NOT in the Saturday array...');
		        }

		        if ($.inArray('Sunday', res)!= -1) {
		        	 
		           // alert(name + ' is in the Sunday array!');
					
		        } else {
		        	 myarray.push(0);
		            //alert(name + ' is NOT in the Sunday array...');
		        }

			  	
				if(myarray!=''){
					var disabledDays = myarray;
				
	myfunction(disabledDays);
			}
				
	 		}
	 	
	 	});
	 }
	 
	});

	
</script>



<script>
	
	
	$("#dialog").hide();
  $( function() {
	  $("#paid").click(function(){
		  $( "#dialog" ).dialog();
	  });
  } );
	$("#free").click(function(){
		  $( ".ui-icon-closethick" ).trigger("click");
	  });
  </script>
<script>
	$("#terms").hide();
  $( function() {
	  $("#term").click(function(){ 
		  //$( "#terms" ).dialog();
	  });
  } );
  </script>
<script>
	
	
	
$(document).ready(function(){
					
	$("#alldatahead").hide();
				  $("#add").click(function(){
					  
					  ip_data_del();
					  
					 
					  
					  var chk_lists=($('#alldata tr').length);
					  
					  var content_new_1=$("#content_new_1").val();
					  var content_new_2=$("#content_new_1 option:selected").text();
					  var location_name=$("#location_id option:selected").text();
					  var number_service_1=$("#number_service_1").val();
					  var location_id=$("#location_id").val();
					  
					  // checking service service duplicate  start
					  var doSubmit = true;
					  	var i=1;
					     $('#alldata tr').find("td:eq(1)").each(function(){
							 
							 var service_name=$(".service_"+i).val();
							 
							 
 							 if(content_new_1 == service_name){
								//alert("Already added this service if you want to change please remove added service ! again add service ");
// 								
								var old_num= $(".no_service_"+i).val();
								var new_number=parseInt(number_service_1) + parseInt(old_num);
								 $(".no_service_"+i).val(new_number);
								 $(".timeservice_"+i).val(new_number);
								 $(".val_"+i).html(new_number);
								 
								 //$(".close_"+i+1).trigger("click");
								 $("#number_service_1").val('');
								  doSubmit = false;
          							return false;
 								}
							 i++;
								
						 });
					  
					if(!doSubmit) return false;
					 // checking service service duplicate  start
					 
					  var nsn=chk_lists+1;
					  var srno=chk_lists+1;
					  var nsc=chk_lists+1;
					  //var closecl=1;
						if(number_service_1 !='' && content_new_1 !=''){
							
							$("#alldata").append("<tr><td><input type='hidden' class='location' name='location' value='"+location_id+"'>"+location_name+"</td><td><input type='hidden' class='service_"+nsn+"' name='service_name' value='"+content_new_1+"'>"+content_new_2+"</td><td><input type='hidden' name='no_service' class='no_service_"+nsc+"' value='"+number_service_1+"'><input type='hidden' name='data' class='hidediv timeservice_"+nsc+"' value='"+number_service_1+"'><span class='val_"+srno+"'>"+number_service_1+"</span></td><td><i class='btn btn-danger fa fa-times close_"+nsc+"' aria-hidden='true'></i></td></tr>");
							
							$(".content_slot").html('');
								$("#location_id").prop("disabled", true);
								//$("#content_new_1").val('');
								$("#number_service_1").val('');
							var chk_listsss=($('#alldata tr').length);
							if(chk_listsss !='')
							  {
							  $("#alldatahead").show();
							  }
							  
							
						}else{
							swal("Please select a service and service quantity.");
						}
						$("#content_slot_1").click(function(){
							$(".hidediv").show();
							var chk_lists=($('#alldata tr').length);
									setInterval(function(){ 
										var start_time=$("#start_time").val();
										var end_time=$("#end_time").val();
										$(".hidediv").html(start_time+'-'+end_time);
									}, 2000);
									
						});
						 $("#alldata").on('click', '.btn-danger', function () {
							$(this).closest('tr').remove();
							var chk_lists=($('#alldata tr').length);
							$(".content_slot").hide();
							if(chk_lists==0)
							{
								$("#alldatahead").hide();
							}
							
						});
					
				  });
				 
					
				});
				
				
				</script>
				<script>


//$("#insert_slot").on("click",function(){	
$(document).on('click','.slot_time','#datepicker-2',function() {
	$('#image_cont_1').show();
	$("#content_slot_1").hide();
	
	
	var start_time = $(this).attr('id');
		var end_time = $(this).attr('data-id');
		var my_ip='<?php echo $_SERVER['SERVER_ADDR'];?>';
		var service_price = $(this).attr('data-price');
		
		$('#start_time').val(start_time);
		$('#end_time').val(end_time);
		$('#service_price').val(service_price);			
		$(this).addClass('bg-slot').siblings().removeClass('bg-slot');
		 
		var my_ip='<?php echo $_SERVER['SERVER_ADDR'];?>';
		var booking_date=$("#booking_date").val();	
		var start_time=$("#start_time").val();	
		var end_time=$("#end_time").val();	
		var service_price=$("#service_price").val();
		var current_booking_date=$("#current_booking_date").val();	
		var content_new=$("#content_new_1").val();	
		var number_service=$("#number_service_1").val();
		var location_id=$("#location_id").val();
		var time_schedule=$("#time_schedule").val();

		if(location_id=='') {
				swal('Please select a service')
				return false;
			}
		if(content_new=='') {
				swal('Please select service')
				return false;
			}
		if(booking_date=='') {
				swal('Please select booking date')
				return false;
			}
		
		
		//setTimeout(function() 
		//  {
			//do something special
		  
		
		
		
		

	
	
	
	var my_c_ip='<?php echo $_SERVER['SERVER_ADDR'];?>';
				//function delslotex(my_c_ip){
				//alert('jj');
				var order_no=$("#order_no").val();
				$.ajax({	
					url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
					type:"POST",	
					data:{my_c_ip:my_c_ip,order_no:order_no},	
					complete:function(data){
							addsllotsss();
						}	
				});
			//}
});	

function addsllotsss(){;
	
	///setTimeout(function() 
	//	  {
						//new ajax start
		var my_ip='<?php echo $_SERVER['SERVER_ADDR'];?>';
		var booking_date=$("#booking_date").val();	
		var start_time=$("#start_time").val();	
		var end_time=$("#end_time").val();	
		var service_price=$("#service_price").val();
		var current_booking_date=$("#current_booking_date").val();	
		var content_new=$("#content_new_1").val();	
		var number_service=$("#number_service_1").val();
		var location_id=$("#location_id").val();
		var time_schedule=$("#time_schedule").val();
		var order_no=$("#order_no").val();
		sessionStorage.setItem("token_id",order_no);
	
			var srv_ary = [];
           $("input[name*='service_name']").each(function() {
               srv_ary.push($(this).val());
           });
		   var loc_ary = [];
           $("input[name*='location']").each(function() {
               loc_ary.push($(this).val());
           });
		   var num_ary = [];
           $("input[name*='no_service']").each(function() {
               num_ary.push($(this).val());
           });		
			
		for(var i = 0; i < srv_ary.length; i++) 
		{  
		 
		
		var location_id=loc_ary[i];
		var content_new=srv_ary[i];
		var number_service=num_ary[i];
		
		//alert(content_new);
		
		
		$.ajax({	
			url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
			type:"POST",	
			data:{order_no:order_no,booking_date:booking_date,start_time:start_time,end_time:end_time,service_price:service_price,current_booking_date:current_booking_date,content_new:content_new,number_service:number_service,my_ip:my_ip,location_id:location_id,time_schedule:time_schedule},	
			//complete:function(data){
			success:function(data){
				//alert(data);
				$('#image_cont_1').hide();
			    $("#content_slot_1").show();
			    if(data !=''){
				swal('We are sorry that this date and time is not available for the number of services booked. Please select an alternative date');
				
				//swal('Please remove given service name  '+data+'  this service is not avaliable');
				
				//$("#alldata").html("");
				$(".content_slot").html('');
				return false;
			    }
				$("#newsubmit").removeAttr('disabled');
				
			}	
		});	
		
		}
	
	//new ajax start
						
						
	//}, 5000);
	
	return false;
	//});
					
}


	
function delslot(del_id){
	//alert('jj');
	$.ajax({	
		url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
		type:"POST",	
		data:{del_id:del_id},	
		success:function(data){	
			$("#slots").html(data);
			$(".ui-state-active").trigger( "click" );
			//$("#adde_slot").html("<h6 class='text-danger text-center pt-3 pb-0'>Time slot deleted successfully</h6>");
			var chk_list=($('.bg-slot').length-1);
			if(chk_list=='-1'){
			$("#insert_slot").html("Add service");	
			}
			
		}	
	});
}
$(document).ready(function(){
	ip_data_del();
})

					
function ip_data_del(){
	var my_ips='<?php echo $_SERVER['SERVER_ADDR'];?>';
	$.ajax({	
		url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
		type:"POST",	
		data:{my_ips:my_ips},	
		success:function(data){	
			//$("#slots").html(data);
			//alert(data);
		}	
	});
}
$("#booking-form").on('submit',(function(e) {
    e.preventDefault();
	        
		//alert('clicked');
		//return false;
		var upt=$('#upt').val();
		var edit_id=$('#edit_id').val();
		var location_id=$('#location_id').val();
		var number_service=$('.number_service').last().val();
		var name=$('#name').val();
		var phone=$('#phone').val();
		var road_name=$('#road_name').val();
		var country=$('#country').val();
		var email=$('#email').val();
		var house_name=$('#house_name').val();
		var town=$('#town').val();
		var post_code=$('#post_code').val();
		var start_time=$('#start_time').val();
		 
			
		if(name==''){
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
		} 
		
		$("#image_submit").show();
		$("#newsubmit").css("cursor", "none");
		
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
			swal('Booking Update successfully');
			}else{
				swal('Booking submitted successfully');
				
			}
			var edit_id=$("#order_no").val();    //$("#edit_id").val();
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
          swal('Form submit failed ! Please try again');
		  
        }           
     });
		 
  }));




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
				 $('#content_new_1').html(data);
				 console.log(data);
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
  		ip_data_del();
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
			minDate: +1,
			maxDate: "+2M"
			});
			   });
      </script>
	  
	   <script>
$(function() {
   
			
			
			$(document).on('keyup change','#number_service_1,#content_new_1',function() {
				//delete slot start
					  var my_e_ip='<?php echo $_SERVER['SERVER_ADDR'];?>';
						delslot_cross(my_e_ip);
							function delslot_cross(my_c_ip){
							//alert('jj');
							$.ajax({	
								url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
								type:"POST",	
								data:{my_c_ip:my_e_ip},	
								success:function(data){	
									//$("#slots").html(data);
									//$(".ui-state-active").trigger( "click" );
									//$('#content_slot_1').html('');
									//slot_list();
									}	
							});
						}	
					
					  //delete slot end
			});
			$(document).on('click','#add,.fa-times,.button-minus,.fa-times,.button-plus',function() { 
				
				//delete slot start
					  var my_e_ip='<?php echo $_SERVER['SERVER_ADDR'];?>';
						delslot_add(my_e_ip);
							function delslot_add(my_c_ip){
							//alert('jj');
							$.ajax({	
								url:"<?php echo AP_PLUGIN_DIR ?>add_slot_sql.php",	
								type:"POST",	
								data:{my_c_ip:my_e_ip},	
								success:function(data){	
									//$("#slots").html(data);
									//$(".ui-state-active").trigger( "click" );
									//$('#content_slot_1').html('');
									//slot_list();
									}	
							});
						}	
					
					  //delete slot end
				
			});

});

      </script>
	  
	  
	  <script>
//slot jquery start
         $(function () {
   
		$(document).on('change','#datepicker-2',function() {
			//ip_data_del();
        var slot_date = $(this).val();
		var chk_lists=($('#alldata tr').length);
		
		$('#booking_date').val(slot_date);
		
		var location_id=$('#location_id').val();
		var service_id=$('#content_new_1').val();
			
		var date = $(this).datepicker('getDate');
    	var dayOfWeek = date.getUTCDay();
			
		//$.session.set('current_day', dayOfWeek);
        //alert("j session  "+$.session.get('current_day'));
			//alert(dayOfWeek);
			
		var i=1;
		while(i <= chk_lists)
		{
			var ssss=$('#alldata tr .no_service_'+i).val();
			//alert(ssss);
			i++;
			ssss++;
			
		}
		
		
		
		
		 var a = 0;
		var array = [];
           $("input[name*='data']").each(function() {
              a += parseInt($(this).val());
           });
		   //alert(a);
		  
			var number_service=a;
		
		if(chk_lists=='0' && location_id !='' && service_id !='' && number_service !='')
		{
			swal('Please add service and number of service click pluse button');
			return false;
		}
		if(location_id!='' && service_id!='' && number_service!=''){
		  $.ajax({
		  type:'POST',
		 beforeSend: function(){
			  $('#content_slot_1').html('');
                 $('#image_cont_1').show();
               },
         url:'<?php echo AP_PLUGIN_DIR ?>add_appoinment_sql.php',
		 data:{slot_date:slot_date,loc_id:location_id,service_id:service_id,number_service:number_service,dayOfWeek:dayOfWeek},
		 success: function(data){
			 //console.log(data);
			 //console.log(number_service);
			
			 $('#content_slot_1').html(data).fadeIn(500);//.fadeIn(500); .hide()
			 //console.log(data);
        },
		complete: function(){
                    $('#image_cont_1').hide();
              }
        }); 
		
		}else{
			
			swal('Please select location and number service');	
		}
		
		
    });
	
});



      </script>
	
	  
	  <script>
 	


//for service no.
function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(1);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 1) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(1);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});	
	

 </script>
 <script>
  $( function() {
   $( document ).tooltip();
  } );
  </script>
<?php } ?>