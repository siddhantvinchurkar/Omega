<?php
	echo "Deleting Class...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	
	$tcherID = $_GET["techerID"]
	$subjectN = $_GET["sname"];

	$sql = "DELETE FROM ClassTable WHERE ClassName = '$subjectN' AND teacherID = '$tcherID'";

	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Delete Class: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/teacher/'</script>";
?>