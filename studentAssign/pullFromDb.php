<?php
$servername="localhost";
$username="root";
$password="";
$dbname="omega";

$conn= new mysqli($servername, $username, $password, $dbname);

if(!$conn){
die("Could not connect:".mysqli_connect_error());
}
$sql = 'SELECT * FROM announce';  
$retval=mysqli_query($conn, $sql);  

if(mysqli_num_rows($retval) > 0){  
	echo "<table><tr><th>Subject</th>
		<th>Announcement</th></tr>";
while($row = mysqli_fetch_assoc($retval)){ 
echo "<tr><td>{$row['subject']}</td>
	<td>{$row['announce']}</td></tr>";  
} 
echo "</table>";//end of while  
}else{  	echo "0 results";  
}  

mysqli_close($conn);  
?>

