<?php
	echo "Uploading Assignment...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	$subjectN = $_GET["sname"];
	$teachID = $_GET["studID"];
	$noteslnk = $_POST['annote'];

	$sql = "INSERT INTO assignLink (subject,sID,link) VALUES ('$subjectN','$teachID','$noteslnk')";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to Add Announcement: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/studentAssign/index.php?subname=".$subjectN."&student=".$teachID."'</script>";
?>