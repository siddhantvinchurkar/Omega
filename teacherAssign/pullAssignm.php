<?php 

$conn = mysqli_connect("localhost","nikhil","password","omega");
if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}

$subjectN = $_GET["subname"];
$sql = "SELECT * FROM assignLink WHERE subject = '$subjectN'"; 
$retsub = mysqli_query($conn, $sql); 
$ncount = mysqli_num_rows($retsub); 
if($ncount > 0)
{  
	
	while($row = mysqli_fetch_assoc($retsub))
	{ 
		echo "<tr><th><a href = {$row['link']}>{$row['sID']}</a></tr></th>";  
	} //end of while  
}
else
{  	
	echo "<p><h6>No notes</h6></p>";  
}

mysqli_close($conn);  
?>