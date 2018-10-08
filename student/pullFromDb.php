<?php include 'dbConnect.php';

//Networks
$netAnn = 'SELECT * FROM announce WHERE subject = "networks"'; 
$retnet=mysqli_query($conn, $netAnn); 
$ncount = mysqli_num_rows($retnet); 
if($ncount > 0)
{  
	echo "<table><tr><th>Networks</th></tr>";
	while($row = mysqli_fetch_assoc($retnet))
	{ 
		echo "<tr><td>{$row['announce']}</td></tr>";  
	} 
	echo "</table>";//end of while  
}
else
{  	
	echo "<p><h6>No announcements</h6></p>";  
}
mysqli_close($conn);  
?>
