<?php
	echo "Adding Announcement...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	$subjectN = $_GET["sname"];
	$teachID = $_GET["techer"];
	$announ = $_POST['annote'];

	$sql = "INSERT INTO announce (subject,tID,announcemnt) VALUES ('$subjectN','$teachID','$announ')";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Add Announcement: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/teacherAssign/index.php?subname=".$subjectN."&teacher=".$teachID."'</script>";
?>