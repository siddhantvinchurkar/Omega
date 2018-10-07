<?php
$servername = "localhost";
$username = "omega";
$password = "uglyhorse3449";
$dbname = "omega";

$conn= new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die("Could not connect:".mysqli_connect_error());
}
echo '<script>alert("I\'m here! 1");</script>';
?>