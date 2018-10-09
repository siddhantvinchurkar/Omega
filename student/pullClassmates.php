<?php 
$conn = mysqli_connect("localhost","nikhil","password","omega");
if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}

$sql = "SELECT * FROM users WHERE usertype = 's'"; 
$retsub = mysqli_query($conn, $sql); 
$ncount = mysqli_num_rows($retsub); 
if($ncount > 0)
{  
	echo "<tr><th>First Name</th>
			<th>Last Name</th>
				<th>Email</th></tr>";
	while($row = mysqli_fetch_assoc($retsub))
	{ 
		echo "<tr><td>{$row['fn']}</td>
				<td>{$row['ln']}</td>
					<td>{$row['eml']}</td></tr>";  
	} //end of while  
}
else
{  	
	echo "<p><h6>No Users</h6></p>";  
}
mysqli_close($conn);  
?>

