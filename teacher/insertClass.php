<?php
	echo "Adding Class...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	$subjectN = $_POST['subName'];
	$subjectID = $_POST['subID'];
	$teachID = $_POST['teacherID'];
	$teachEml = $_POST['infoEmail'];

	$sql = "INSERT INTO ClassTable (ClassName,ClassCode,teacherID) VALUES ('$subjectN','$subjectID','$teachID')";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Add Class: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/teacher/?eml=".$teachEml."'</script>";
?>