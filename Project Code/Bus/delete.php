<?php  
	$connect = mysqli_connect("localhost", "root", "", "bus route");
	$sql = "DELETE FROM buses WHERE bus_id= '".$_POST["bus_id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>