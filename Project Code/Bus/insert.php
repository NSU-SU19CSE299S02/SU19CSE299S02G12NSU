<?php  
$connect = mysqli_connect("localhost", "root", "", "bus route");
$sql = "INSERT INTO buses(Name, Company_Name) VALUES('".$_POST["Name"]."', '".$_POST["Company_Name"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>