<?php
	echo "Updating Information...";
	$conn = mysqli_connect("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect to server: ".mysqli_connect_error();
	}
	$infoN = $_POST['infoName'];
	$infoI = $_POST['infoID'];
	$infoE = $_POST['infoEmail'];

	$sql = "UPDATE users SET fn = $infoN, rno = $infoI WHERE users.eml = $infoE";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to update information: ".mysqli.error($conn);
	}
	echo "<script>window.location = 'https://omegaclassrooms.ga/teacher/'</script>";
?>