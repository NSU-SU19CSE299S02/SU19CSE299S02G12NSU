<?php  
	$connect = mysqli_connect("localhost", "root", "", "bus route");
	$sql = "DELETE FROM users_info WHERE user_id = '".$_POST["user_id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>