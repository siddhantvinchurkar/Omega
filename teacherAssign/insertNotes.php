<?php
	echo "Uploading Notes...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	$subjectN = $_GET["sname"];
	$teachID = $_GET["techer"];
	$notestopi = $_POST['topnotes'];
	$noteslnk = $_POST['annote'];

	$sql = "INSERT INTO notes (subject,tID,topic,link) VALUES ('$subjectN','$teachID','$notestopi','$noteslnk')";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Add Announcement: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/teacherAssign/index.php?subname=".$subjectN."&teacher=".$teachID."'</script>";
?>