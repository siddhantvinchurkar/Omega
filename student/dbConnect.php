<?php
$servername="localhost";
$username="nikhil";
$password="password";
$dbname="omega";

$conn= new mysqli($servername, $username, $password, $dbname);

if(!$conn){
die("Could not connect:".mysqli_connect_error());
}
?>