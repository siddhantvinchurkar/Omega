<?php
	echo "Inserting Assignment...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	$subjectN = $_GET["sname"];
	$teachID = $_GET["techer"];
	$asstopi = $_POST['topassign'];
	$assdesc = $_POST['desassign'];

	$sql = "INSERT INTO AssignmentTable (subject,tID,topic,description) VALUES ('".$subjectN."','".$teachID."','".$asstopi."','".$assdesc."')";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Add Announcement: ".mysqli.error($conn);
	}
	echo "<script>window.location.href = 'https://omegaclassrooms.ga/teacherAssign/index.php?subname=".$subjectN."&teacher=".$teachID."';</script>";
?>
