<?php 

$conn = mysqli_connect("localhost","nikhil","password","omega");
if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}

$teachID = $_GET["teacher"];
$subjectN = $_GET["subname"];
$sql = "SELECT * FROM notes WHERE subject = '$subjectN' AND tID = '$teachID'"; 
$retsub = mysqli_query($conn, $sql); 
$ncount = mysqli_num_rows($retsub); 
if($ncount > 0)
{  
	
	while($row = mysqli_fetch_assoc($retsub))
	{ 
		echo "<tr><th><a href = {$row['link']}>{$row['topic']}</a></tr></th>";  
	} //end of while  
}
else
{  	
	echo "<p><h6>No notes</h6></p>";  
}

mysqli_close($conn);  
?>