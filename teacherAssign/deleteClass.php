<?php
	echo "Deleting Class...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	
	$subjectN = $_GET["subname"];

	$sql = "DELETE FROM ClassTable WHERE ClassName = '$subjectN'";

	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Delete Class: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/teacher/'</script>";
?>