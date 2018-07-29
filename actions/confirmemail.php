<?php
	// Server Credentials

	$servername = "localhost";
	$username = "omega";
	$password = "uglyhorse3449";
	$dbname = "omega";

	// Some variables

	$confirmflag = 0;

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// SQL commands

	$confirmuseremailsql = "INSERT INTO users(cnf) VALUES(1) WHERE eml='".$_GET['email']."'";

	if ($conn->query($confirmuseremailsql)->fetch_assoc()) {
	    	$confirmflag = 1;
	}
	else {
	    	$confirmflag = 0;
	}

// Close connection to the database
$conn->close();
header("Location: https://omegaclassrooms.ga/signin/confirmedemail.php?confirmflag=".$confirmflag);
die();
?>
