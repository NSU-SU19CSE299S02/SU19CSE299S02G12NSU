<?php  
 $connect = mysqli_connect("localhost", "root", "", "bus route");  
 $output = '';  
 $sql = "SELECT * FROM buses ORDER BY bus_id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Bus Id</th>  
                     <th width="40%"> Name</th>  
                     <th width="40%">Company Name</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM buses LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["bus_id"].'</td>  
                     <td class="first_name" data-id1="'.$row["bus_id"].'" contenteditable>'.$row["Name"].'</td>  
                     <td class="last_name" data-id2="'.$row["bus_id"].'" contenteditable>'.$row["Company_Name"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["bus_id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="Name" contenteditable></td>  
                <td id="Company_Name" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="Name" contenteditable></td>  
					<td id="Compnay_Name" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>