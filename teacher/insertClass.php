<?php
	echo "Adding Class...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	$subjectN = $_POST['subName'];
	$subjectID = $_POST['subID'];

	$sql = "INSERT INTO ClassTable (ClassName,ClassCode) VALUES ('$subjectN','subjectID')";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Add Class: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/teacher/'</script>";
?>