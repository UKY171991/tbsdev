<?php
function wps_theme_func_services(){
		ap_header_function();
		global $wpdb;
	  $ap_services = $wpdb->prefix . 'ap_services';
	  if (isset($_POST['newsubmit'])) {
	    $name = $_POST['name'];
	    //$duration = $_POST['duration'];
	    $slot_step = $_POST['slot_step'];
	    $price = $_POST['price'];
	    $description = $_POST['description'];
	    $upt=$_GET['upt'];
	    if($_GET['upt'])
	    	{
	    		$wpdb->query("UPDATE $ap_services SET name='$name',duration='$slot_step' , slot_step='$slot_step' , price='$price',description='$description' WHERE id='$upt'");
      			echo "<script>location.replace('admin.php?page=appointment-system-services');</script>";
	    	}else{
			
			$count_service=$wpdb->query("SELECT * from $ap_services where name='$name' ");
				if(!$count_service){
	    		$wpdb->query("INSERT INTO $ap_services(name,duration,slot_step,price,description) VALUES('$name','$slot_step','$slot_step','$price','$description')");
				}
	    	} 
	  }
	  echo "
			<table class='table'>
              <tr>
                <th >Service Name</th>
                <th >Slot step (in minutes)</th>
                
                <th ></th>
              </tr>
			";
	  $prints=array('id');
	  //$id='';
	  if(empty($_GET['upt'])){ $upt=''; $btn_name="Save"; }else{ $upt=$_GET['upt']; $btn_name="Update"; 
	  $results = $wpdb->get_results("SELECT * FROM $ap_services where id ='$upt'");
	  foreach ($results as $prints) {} }
		echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
        <form action="" method="post" id="hideshow">
          <tr>
          	<input type="hidden" id="id" name="id" value="'.$prints->id.'" required>
            <td><input type="text" id="name" name="name" placeholder="Service Name" value="'.$prints->name.'" required></td>
            <td><input type="number" id="slot_step" placeholder="Minutes" name="slot_step" value="'.$prints->slot_step.'" required></td>
           
			<td><input type="text" id="description" name="description" placeholder="Description" value="'.$prints->description.'" required></td>
            <td><button class="btn btn-primary" id="newsubmit" name="newsubmit" type="submit">'.$btn_name.'</button></td>
          </tr>
        </form>
		</div>';
    echo "</table>";
			echo "
			<div class='card'><table id='example' class='table'>
			<thead>
              <tr>
                <th >Id</th>
                <th >Service Name</th>
                <th >Slot step (in minutes)</th>
               
				<th >Description</th>
                <th >Action</th>
              </tr>
			  </thead>
			  <tbody>
			";
		  $location=1;
          $result = $wpdb->get_results("SELECT * FROM $ap_services order by id DESC");
          foreach ($result as $print) {
            echo "
              <tr>
                <td >".$location++."</td>
                <td >".$print->name."</td>
                <td >".$print->slot_step."</td>
               
				 <td >".$print->description."</td>
                <td ><a href='admin.php?page=appointment-system-services&upt=$print->id' class='btn btn-primary btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> <a href='admin.php?page=appointment-system-services&del=$print->id' class='btn btn-danger btn-sm' onClick='return conf(event)'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
              </tr>";
          }
          echo " <tbody></table></div0>";
          if (isset($_GET['del'])) {
		    $del_id = $_GET['del'];
		    $wpdb->query("DELETE FROM $ap_services WHERE id='$del_id'");
		    echo "<script>location.replace('admin.php?page=appointment-system-services');</script>";
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