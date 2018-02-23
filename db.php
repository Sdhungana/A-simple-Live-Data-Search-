<?php
$con = mysqli_connect('localhost','root','','autocomplete');
if (!$con) {
die('Failed to connect').mysqli_error($con);
}
else{
	$output = '';
	$sql = "SELECT * FROM ajax WHERE customerName LIKE '%".$_POST['search']."%' ";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0){
         $output.= '<h4 align ="center"> Search Result </h4>';
         $output.= '<div class="table-responsive">
         <table class="table table-striped table-hover">
         <tr>
         <th>Id</th>
         <th>CustomerName</th>
         <th>Address</th>
          <th>Country</th>
         </tr>';
      while($row=mysqli_fetch_array($result)){
      	$output.='<tr>
      	<td>'.$row["id"].'</td>
      	<td>'.$row["customerName"].'</td>
      	<td>'.$row["address"].'</td>
      	<td>'.$row["country"].'</td>
      	</tr>';
      }   
      echo  $output;
	}
	else{
		echo 'Data Not Found';
	}
}


?>