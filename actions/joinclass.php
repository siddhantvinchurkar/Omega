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

	$checksql = "SELECT * FROM users WHERE eml='".$_GET['eml']."'";

	while ($row = $conn->query($checksql)->fetch_assoc()) {
	    	$conn->query("INSERT INTO users(classes) VALUES(".$row['classes'].$_GET['subcode']."*)");
	}

	// Close connection to the database

	$conn->close();

	die();
?>
