<?php 
function ap_header_function()
{
	$menu1=''; $menu2=''; $menu3='';
	if($_GET['page']=="appointment-system-location")
	{
		$menu1='class="active_now"'; $men1='active_now';
	}
	elseif($_GET['page']=="appointment-system-services")
	{
		$menu2='class="active_now"'; $men2='active_now';
	}
	elseif($_GET['page']=="appointment-system-connection")
	{
		$menu3='class="active_now"'; $men3='active_now';
	}
	elseif($_GET['page']=="appointment-system-engineer")
	{
		$menu4='class="active_now"'; $men4='active_now';
	}

 echo '<ul id="ap-tab-header">
		   <li class="tab-selected">
		     <a '.$menu1.' href="'.esc_url(home_url()).'/wp-admin/admin.php?page=appointment-system-location" ><i  class="fa fa-map '.$men1.'" aria-hidden="true"></i>Locations</a>
		   </li>
		   <li>
		     <a '.$menu2.' href="'.esc_url(home_url()).'/wp-admin/admin.php?page=appointment-system-services"><i class="fa fa-thumb-tack '.$men2.'" ></i>Services</a>
		   </li>
		   <li>
		     <a '.$menu3.' href="'.esc_url(home_url()).'/wp-admin/admin.php?page=appointment-system-connection"><i class="fa fa-plug '.$men3.'" ></i>Connections</a>
		   </li>
		   <li>
		     <a '.$menu4.' href="'.esc_url(home_url()).'/wp-admin/admin.php?page=appointment-system-engineer"><i class="fa fa-user-secret '.$men4.'" ></i>Engineer</a>
		   </li>      
		 </ul>' ;
}
?>