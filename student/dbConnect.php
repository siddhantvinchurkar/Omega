<?php
echo "Adding Class...";
$conn = mysqli_connect("localhost","shreyas","password","omega");
if(!$conn)
{
	echo "Unable to connect to server: ".mysqli_connect_error();
}
echo "Connected!!!!!"
?>