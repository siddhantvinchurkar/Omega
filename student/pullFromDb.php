<?php 

$conn = mysqli_connect("localhost","nikhil","password","omega");
if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}

$subjectN = $_GET["subname"];
$teachID = $_GET["teacher"];
$sql = "SELECT * FROM announce WHERE subject = '$subjectN'"; 
$retsub = mysqli_query($conn, $sql); 
$ncount = mysqli_num_rows($retsub); 
if($ncount > 0)
{  
	echo "<h4>".$subjectN."</h4>";
	while($row = mysqli_fetch_assoc($retsub))
	{ 
		echo "<li>{$row['announcemnt']}</li>";  
	} 
	//end of while  
}
else
{  	
	echo "<p><h6>No announcements</h6></p>";  
}
mysqli_close($conn);  
?>
