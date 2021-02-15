<?php
function wps_theme_func_appointment()
{
	ap_header_function();
	global $wpdb;
	  $ap_appointment = $wpdb->prefix . 'ap_appointment';
		?>	
			<div class='card' id='load_all_data'>
			
		  </div>
		<script>
			
			
		
		function load_ap()
		{
			//$("#load_all_data").val("hhhhhh");
			$.ajax({
				url:"<?php echo AP_PLUGIN_DIR ?>ap_load_appoinment.php",
				type:"POST",
				data:"html",
				success:function(load_data){
					
					$("#load_all_data").html(load_data);
						$('#exampleapp').DataTable({ 
						  "destroy": true, //use for reinitialize datatable
					});
				}
			});
		}
		function conf(del_id)
		{

			swal({
				title: "Are you sure?",
				text: "You will not be able to recover this booking  data!",
				icon: "warning",
				buttons: [
				'No, cancel it!',
				'Yes, I am sure!'
				],
				dangerMode: true,
			}).then(function(isConfirm) {
				if (isConfirm) {
					$.ajax({
						url:"<?php echo AP_PLUGIN_DIR ?>add_appoinment_sql.php",
						type:"POST",
						data:{del_id:del_id},
						success:function(data){
							load_ap();
							swal("Deleted!", "Your booking data has been deleted.", "success");
						}
					});
				} else {
					swal("Cancelled", "Your booking data is safe :)", "error");
				}
			});
		}
		$(document).ready(function(){
			load_ap();
		});
		$(document).ready(function() {
			
			//$('#exampleapp').DataTable();
			
		} );
		
		</script>
<?php } ?>