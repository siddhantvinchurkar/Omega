<?php
/*
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
	*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Unavailable</title>

    <style media="screen">
      body { background: #ECEFF1; color: rgba(0,0,0,0.87); font-family: Roboto, Helvetica, Arial, sans-serif; margin: 0; padding: 0; }
      #message { background: white; max-width: 360px; margin: 100px auto 16px; padding: 32px 24px 16px; border-radius: 3px; }
      #message h3 { color: #888; font-weight: normal; font-size: 16px; margin: 16px 0 12px; }
      #message h1 { color: #ffa100; font-weight: bold; font-size: 100px; margin: 0 0 8px; }
      #message h2 { font-size: 22px; font-weight: 300; color: rgba(0,0,0,0.6); margin: 0 0 16px;}
      #message p { line-height: 140%; margin: 16px 0 24px; font-size: 14px; }
      #message a { display: block; text-align: center; background: #039be5; text-transform: uppercase; text-decoration: none; color: white; padding: 16px; border-radius: 4px; }
      #message, #message a { box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); max-width: 700px; }
      #load { color: rgba(0,0,0,0.4); text-align: center; font-size: 13px; }
      @media (max-width: 600px) {
        body, #message { margin-top: 0; background: white; box-shadow: none; }
        body { border-top: 16px solid #ffa100; }
      }
    </style>
  </head>
  <body>

    <div id="message">
      <h1>Error 503</h1>
      <h2>Service Unavailable</h2>
      <h3><font style = "color:red">Firebase is currently experiencing some high traffic load. Please try again in a few hours</font></h3>
    </div>
  </body>	
</html>
