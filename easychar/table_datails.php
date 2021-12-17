<?php
$conn= mysqli_connect('localhost','thinkbiz_skyeast','$ds?e$HhwJ*#','thinkbiz_skyeast');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$holder_name=$_POST['holder_name'];
$farm_name=$_POST['farm_name'];
$product=$_POST['product'];
$country_of_production=$_POST['country_of_production'];

if($_POST['holder_name'] !=''){       
	
	if($holder_name !=''){
		$get_all=mysqli_query($conn,"SELECT * FROM `holder_details` where holder_name LIKE '%".$holder_name."%'");
	}
	if($holder_name !='' && $farm_name != ''){
		$get_all=mysqli_query($conn,"SELECT * FROM `holder_details` where holder_name LIKE '%".$holder_name."%' AND farm_name LIKE '%".$farm_name."%' ");
	}
	if($holder_name !='' && $farm_name != '' && $product !=''){
		$get_all=mysqli_query($conn,"SELECT * FROM `holder_details` where holder_name LIKE '%".$holder_name."%' AND farm_name LIKE '%".$farm_name."%' AND product LIKE '%".$product."%' ");
	}
	if($holder_name !='' && $farm_name != '' && $product !='' && $country_of_production !=''){
		$get_all=mysqli_query($conn,"SELECT * FROM `holder_details` where holder_name LIKE '%".$holder_name."%' AND farm_name LIKE '%".$farm_name."%' AND product LIKE '%".$product."%' AND country_of_production LIKE '%".$country_of_production."%' ");
	}
if(mysqli_num_rows($get_all) == 0){ ?>
	<tr><td colspan="10"><h4 class="text-center">No any record found</h4></td></tr>
<?php }
while($row=mysqli_fetch_array($get_all)){
$date=$row['expires'];
	?>
  <tr>
	<td><?php echo $row['holder_name'];?></td> 
	<td><?php echo $row['farm_name'];?></td>
	<td><?php echo $row['product'];?></td> 
	<td><?php echo $row['country_of_production'];?></td>  
	<td><a href="License_Abiola_countries-converted.pdf">Click here</a></td> 
	<td><?php echo $row['amount_of_product_licensed'];?></td>   
	<td><?php echo $row['units_of_measurements'];?></td>
	<td><?php echo $row['license_type'];?></td>
	<td><?php echo date('d/m/Y', strtotime($date));?></td> 
	<td><?php echo $row['status'];?></td>
</tr>
<?php } 

}else{

$get_all=mysqli_query($conn,"SELECT * FROM `holder_details`");
while($row=mysqli_fetch_array($get_all)){ 
$date=$row['expires'];
?>
  <tr>
	<td><?php echo $row['holder_name'];?></td> 
	<td><?php echo $row['farm_name'];?></td>
	<td><?php echo $row['product'];?></td> 
	<td><?php echo $row['country_of_production'];?></td>  
	<td><a href="License_Abiola_countries-converted.pdf">Click here</a></td> 
	<td><?php echo $row['amount_of_product_licensed'];?></td>   
	<td><?php echo $row['units_of_measurements'];?></td>
	<td><?php echo $row['license_type'];?></td>
	<td><?php echo date('d/m/Y', strtotime($date));?></td> 
	<td><?php echo $row['status'];?></td>
</tr>
<?php } } ?>
