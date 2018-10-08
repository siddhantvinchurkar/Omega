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
	while ($row = $result->fetch_assoc()) {
	    	//if($conn->query("INSERT INTO users(classes) VALUES(".$row['classes'].$_GET['subcode']."*)")) echo "Done!";
		//else echo "Not done!";
		echo $row["eml"];
	}

	// Close connection to the database

	$conn->close();

	die();
?>
