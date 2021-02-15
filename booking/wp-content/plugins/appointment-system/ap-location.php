<?php

function wps_theme_func_locations(){

	ap_header_function();

	global $wpdb;

	  $ap_location = $wpdb->prefix . 'ap_location';

	  if (isset($_POST['newsubmit'])) {

	    $name = $_POST['name'];

	    $address = $_POST['address'];

	    $location_price = $_POST['location_price'];

	    $upt=$_GET['upt'];

	    if($_GET['upt'])

	    	{

	    		$wpdb->query("UPDATE $ap_location SET name='$name',address='$address',location='$name',location_price='$location_price' WHERE id='$upt'");

      			echo "<script>location.replace('admin.php?page=appointment-system-location');</script>";

	    	}else{
			
			$count_location=$wpdb->query("SELECT * from $ap_location where name='$name' ");
				if(!$count_location){
					
				
	    		$wpdb->query("INSERT INTO $ap_location(name,address,location,location_price) VALUES('$name','$address','$name','$location_price')");
					}

	    	}

	  }

	  echo '<table class="table">

	  			 <tr>

                <th>Location</th>

                <th>Address</th>

                               

                <th>Action</th>

              </tr>';	  

	  if(empty($_GET['upt']))

	  {  

		  $upt='';

		  $btn_name="Submit";

		  $prints=array();

	  }else{

		  $upt=$_GET['upt'];

		  $btn_name="Update";

	  }

	  $results = $wpdb->get_results("SELECT * FROM $ap_location where id ='$upt'");

	  foreach ($results as $prints) {}

		echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>

        <form  action="" method="post" id="hideshow">

          <tr>

          	<input type="hidden" id="id" name="id" value="'.$prints->id.'" required>

            <td><input type="text" id="name" name="name" placeholder="Location" value="'.$prints->name.'" required></td>

            <td><input type="text" id="address" name="address" placeholder="Address" value="'.$prints->address.'" ></td>

                      

            <td><button id="newsubmit" class="btn btn-primary btn-sm" name="newsubmit" type="submit">'.$btn_name.'</button></td>

          </tr>

        </form>

		</div>';

    echo " </table>";

    echo " <div class='card'><table id='example' class='table'>";

			echo "

			<thead>

              <tr>

                <th >Id</th>

                <th >Location</th>

                <th >Address</th>

               

                <th>Action</th>

              </tr> 

			</thead>

			<tbody>";

		  $location=1;

          $result = $wpdb->get_results("SELECT * FROM $ap_location order by id DESC");

          foreach ($result as $print) {

            echo "        

              <tr>

                <td >".$location++."</td>

                <td >".$print->name."</td>

                <td >".$print->address."</td>

     

                <td ><a href='admin.php?page=appointment-system-location&upt=$print->id' class='btn btn-primary btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> <a href='admin.php?page=appointment-system-location&del=$print->id' class='btn btn-danger btn-sm' onclick='return conf(event)'><i class='fa fa-trash' aria-hidden='true'></i></a></td>

              </tr>            

            "; }

          echo " </tbody></table></div>";

          if (isset($_GET['del'])) {

		    $del_id = $_GET['del'];

		    $wpdb->query("DELETE FROM $ap_location WHERE id='$del_id'");

		    echo "<script>location.replace('admin.php?page=appointment-system-location')</script>";

		  }?>

		<script>

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

			/*var confs= confirm('Are you sure?');
			if(!confs)
			{
				return false;
			}*/

		}
		$(document).ready(function() {
			$('#example').DataTable();
		} );
		</script>
<?php } ?>