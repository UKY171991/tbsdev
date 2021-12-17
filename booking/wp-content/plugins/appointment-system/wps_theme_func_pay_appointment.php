<?php
function wps_theme_func_pay_appointment()
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


	
	
	
	error_reporting('e_notice');
	//$id=base64_decode($_GET['token_id']);
	$id=$_GET['token_id'];

	//$id='34';
	$results = $wpdb->get_results( "SELECT * FROM $ap_appointment where order_no='$id' ");	

	$location_id=$results[0]->location;
	$location_p = $wpdb->get_results( "SELECT * FROM $ap_location where id='$location_id' ");

	//$service_id=$results[0]->service_id;
	//$service = $wpdb->get_results( "SELECT * FROM $ap_services where id='$service_id' ");
?>
<?php
if($results==null)
    { 
?>
        <div class="row"> 
            <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><p class="cart-empty woocommerce-info">No any Reocrd found.</p>  <p class="return-to-shop">
          <a class="button wc-backward" href="<?php echo get_site_url()?>">
            Return to home    </a>
        </p>
      </div>
          </div>
        <?php
    }
	else
	{
	foreach ($results as $print) {
?>
<div class="container">
	<table class="table newappoinyment detail">
		<tr class="head"><th colspan="2"><h4 class="text-center">Booking Details</h4></th></tr>
		<tr>
			<td colspan="2">
				<table class="table detail">
					<tr class="heading">
						<th>SrNo</th>
						<th>Location</th>
						<th>Service</th>
						<th>Number Service</th>
						<th>Booking Date</th>
						<th>Start-End</th>
						<!--<th>Service price</th>-->
					</tr>
					<?php 
					$i=1;
					$location_id = $wpdb->get_results( "SELECT * FROM $ap_order_list where order_no='$id' ");
					foreach ($location_id as $locations) {
					$location_id=$locations->location;
					$location = $wpdb->get_results( "SELECT * FROM $ap_location where id='$location_id' ");
					$service_id=$locations->service;
					$service = $wpdb->get_results( "SELECT * FROM $ap_services where id='$service_id' ");
					 ?>
					<tr class="data">
						<td><?php echo $i++;?></td>
						<td><?php  echo $location[0]->name; ?></td>
						<td><?php echo $service[0]->name; ?></td>
						<td><?php echo $locations->service_no; ?></td>
						<td><?php echo date('d-m-Y', strtotime($locations->booking_date)); ?></td>
						<td><?php echo date("h:i A", strtotime($locations->start_time)); ?>-<?php echo date("h:i A", strtotime($locations->end_time)); ?></td>
						<!--<td><i class="fa fa-gbp" aria-hidden="true"></i><?php// echo $locations->service_price; ?></td>-->
					</tr>
				<?php } ?>
				</table>
			</td>
		</tr>  
	</table>	
	<table class="inner w-100">		
	  <tbody>	
		<tr class="d-flex">
			<th>Name</th>
			<td><?php echo $print->name; ?></td>
		</tr>
		<tr class="d-flex">
			<th>Phone</th>
			<td><?php echo $print->phone; ?></td>
		</tr>
		<tr class="d-flex">
			<th>Email</th>
			<td><?php echo $print->email; ?></td>
		</tr>
		<tr class="d-flex">
			<th>Road Name</th>
			<td><?php echo $print->road_name; ?></td>
		</tr>
		<!--<tr>
		<th>Country</th>
			<td><?php //echo $results[0]->country; ?></td>
		</tr>-->
		<tr class="d-flex">
			<th>House Name</th>
			<td><?php echo $print->house_name; ?></td>
		</tr>
		<tr class="d-flex">
			<th>Town</th>
			<td><?php echo $print->town; ?></td>
		</tr>	
		<tr class="d-flex">
			<th>Post Code</th>
			<td><?php echo $print->post_code; ?></td>
		</tr>
		<tr class="d-flex">
			<th>Description</th>
			<td><?php echo $print->description; ?></td>
		</tr>
		<tr class="d-flex">
			<th>Total Price</th>
			<td>
			<?php 
			$location_price = $wpdb->get_results( "SELECT SUM(service_price) as total_price FROM $ap_order_list where order_no='$id' ");
					foreach ($location_price as $price) { ?>
			<i class="fa fa-gbp" aria-hidden="true"></i> <?php echo $price->total_price;//+$location_p[0]->location_price; ?>
		<?php } ?>
		</td>
		</tr>
		<tr>
			<td colspan="2">
				<div id="payment-box" style="text-align: center;">
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type='hidden' name='business' value='info@codexworld.com'>
						<input type='hidden' name='item_name' value='<?php echo $id; ?>'> 
						<input type='hidden'  name='item_number' value='<?php echo $results[0]->number_service; ?>'>
						 <input type="hidden" name="cmd" value="_xclick">
						<?php 
						$location_price = $wpdb->get_results( "SELECT SUM(service_price) as total_price FROM $ap_order_list where order_no='$id' ");
								foreach ($location_price as $price) { ?>
									<input type='hidden' name='amount' value='<?php echo $price->total_price; ?>'>
					<?php } ?>
						<input type='hidden'  name='no_shipping' value='1'> 
						<input type='hidden'name='currency_code' value='GBP'>        
						<input type='hidden' name='cancel_return'  value='<?php echo AP_PLUGIN_DIR ?>paypal-payment/cancel.php'>     
						<input type='hidden' name='return' value='<?php echo home_url() ?>/success/?item_name=<?php echo $id; ?>&item_number=<?php echo $results[0]->number_service; ?>'> 
							<div class="col-sm-12 text-left">
								<a href="<?php echo get_site_url()?>/booking" class="btn btn-info" style="margin: 6px;">Back</a>						
								<input  type="submit" class="btn btn-info" name="pay_now" id="pay_now"  Value="Continue  pay now" style="margin: 6px;">
							</div>
						</div>       
					</form>
				</div>			
			</td>
		</tr>
	  </tbody>	
	</table>
</div>
<?php 
	} 
} }
?>