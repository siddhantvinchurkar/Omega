<?php
	$conn=new mysqli("localhost","shreyas","password","omega");
	if(!$conn)
	{
		echo "Unable to connect: ".mysqli_connect_error();
	}
	$subjectN=$_POST['subName'];
	$subjectID=$_POST['subID'];

	$sql="INSERT INTO ClassTable (ClassName,ClassCode) VALUES ('$subjectN','subjectID')";
	if(!mysqli_query($conn,$sql))
	{
		echo "Unable to insert: ".mysqli.error($conn);
	}
	header{"refresh:0.5; url=index.php"};
	mysqli_close($conn)
?>