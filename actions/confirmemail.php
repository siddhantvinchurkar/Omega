<?php
	// Server Credentials

	$servername = "localhost";
	$username = "omega";
	$password = "uglyhorse3449";
	$dbname = "omega";

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// SQL commands

	$confirmuseremailsql = "INSERT INTO users(cnf) VALUES(1) WHERE eml='".$_GET['email']."'";

	if ($conn->query($confirmuseremailsql) === TRUE) {
	    	echo "1";
	}
	else {
	    	echo "0";
	}

// Close connection to the database
$conn->close();
header("Location: https://omegaclasrooms.ga/signin/confirmedemail.php");
die();
?>
