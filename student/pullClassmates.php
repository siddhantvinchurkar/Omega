<?php 
$conn = mysqli_connect("localhost","nikhil","password","omega");
if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}

$sql = "SELECT * FROM users"; 
$retsub = mysqli_query($conn, $sql); 
$ncount = mysqli_num_rows($retsub); 
if($ncount > 0)
{  
	echo "<tr><th>First Name</th></tr>
			<tr><th><Last Name</th></tr>
				<tr><th>Email</th></tr>"
	while($row = mysqli_fetch_assoc($retsub))
	{ 
		echo "<tr><td>{$row['fn']}</tr></td>
				<tr><td>{$row['ln']}</tr></td>
					<tr><td>{$row['eml']}</tr></td>";  
	} //end of while  
}
else
{  	
	echo "<p><h6>No Users</h6></p>";  
}
mysqli_close($conn);  
?>

