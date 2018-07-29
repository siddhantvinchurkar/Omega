<?php
	// Server Credentials

	$servername = "localhost";
	$username = "omega";
	$password = "uglyhorse3449";
	$dbname = "omega";

	// Some variables

	$confirmflag = 1;

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// SQL commands

	$confirmuseremailsql = "UPDATE users SET rno = '".$_GET['rno']."' WHERE eml='".$_GET['email']."'";

	// Execute the commands

	$conn->query($confirmuseremailsql);

	// Close connection to the database

	$conn->close();

	// Redirect user to confirmed page

	header("Location: https://omegaclassrooms.ga/signin/approvalpending.php?eml=".$_GET['email']);

	die();
?>
