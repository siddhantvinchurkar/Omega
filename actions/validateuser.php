<?php
	// Server Credentialssss

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

	$checksql = "SELECT * FROM users WHERE eml='".$_GET['eml']."'";
	$createusersql = "INSERT INTO users(fn, ln, eml, photo) VALUES('".$_GET['fn']."', '".$_GET['ln']."', '".$_GET['eml']."', '".$_GET['photourl']."')";

	$result = $conn->query($checksql);

	if ($result->num_rows > 0) {
	    	echo "1";
	}
	else {
		$conn->query($createusersql);
	    	echo "0";
	}

	// Close connection to the database

	$conn->close();

	die();
?>
