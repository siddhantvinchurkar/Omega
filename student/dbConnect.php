<?php
$conn = mysqli_connect("localhost","nikhil","password","omega");
if(!$conn)
{
	echo "Unable to connect to server: ".mysqli_connect_error();
}
?>