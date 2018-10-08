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
	$result = $conn->query($checksql);
	$mainsql = "stuff";
	while ($row = $result->fetch_assoc()) {
		$mainsql = "UPDATE users SET classes='".$row['classes'].$_GET['subcode']."*' WHERE eml='".$_GET['eml']."'";
	}

	$result = $conn->query($mainsql);

	echo '1';

	// Close connection to the database

	$conn->close();

	die();
?>
