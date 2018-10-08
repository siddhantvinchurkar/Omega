<?php 

$conn = mysqli_connect("localhost","root","","omega");
if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}

$subjectN = $_GET["subname"];
$sql = "SELECT * FROM announce WHERE subject = '$subjectN'"; 
$retsub = mysqli_query($conn, $sql); 
$ncount = mysqli_num_rows($retsub); 
if($ncount > 0)
{  
	
	while($row = mysqli_fetch_assoc($retsub))
	{ 
		echo "<tr><th>{$row['announce']}</tr></th>";  
	} //end of while  
}
else
{  	
	echo "<p><h6>No announcements</h6></p>";  
}
mysqli_close($conn);  
?>

