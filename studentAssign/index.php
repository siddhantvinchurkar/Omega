<?php
	// Server Credentials
	$servername = "localhost";
	$username = "omega";
	$password = "uglyhorse3449";
	$dbname = "omega";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// SQL commands
	$checksql = "SELECT * FROM AssignmentTable WHERE subject='".$_GET['subname']."'";
	$result = $conn->query($checksql);
	echo '<script type="text/javascript">var assignmentTopicArray = []; var assignmentDescriptionArray = [];</script>';
	while ($row = $result->fetch_assoc()) {
	echo '<script type="text/javascript">assignmentTopicArray.push("'.$row['topic'].'");</script>';
	echo '<script type="text/javascript">assignmentDescriptionArray.push("'.$row['description'].'");</script>';
	}
	// Close connection to the database
	$conn->close();
	?>
	//get user details from users table using email in url
	$userDet = "SELECT * FROM users WHERE rno='".$_GET['student']."'";
	$userRet = mysqli_query($conn, $userDet);
	$userrow = mysqli_fetch_assoc($userRet);
	echo '<script type="text/javascript">var userDetail = ["'.$userrow["photo"].'","'.$userrow["fn"].'","'.$userrow["rno"].'","'.$userrow["eml"].'"]; </script>';
	
	// Close connection to the database
	$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--ask for new class code JS-->
		<script type="text/javascript" src="student.js"> </script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--Fetch minified materializecss from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"  media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch material icons from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"  media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch font (Roboto) from the CDN asynchronously-->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
		<!--Set the shortcut icon-->
		<link rel="shortcut icon" type="image/ico" href="../images/icons/favicon.ico">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="../manifest.json">
		<meta name="theme-color" content="#4DB6AC">
		<meta name="Description" content="Omega is a collaborative classroom platform for teachers and students alike.">
		<!--Overriden Styles-->
		<style>
			body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			font-family: 'Roboto', sans-serif;
			background-color: #F6F6F6;
			}
			main {
			flex: 1 0 auto;
			}
			.container {
			display: flex;
			justify-content: center;
			}
			.center {
			width: 250px;
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			}
			.center2 {
			opacity:0.1;
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			}
			#question{
			font-weight: bold;
			color:white;
			background-color:#008080;
			}
			#date{
			font-weight:lighter;
			background-color:grey;
			text-align: center;
			}
			#label{
			font-style: italic;
			font-size: 23px;
			line-height: 40px;
			color:white;
			padding-left: 10px;
			}
			main {
			flex: 1 0 auto;
			}
			.btn-floating{ 
			background-color:#e57373;
			}
			i.icon-white {
			color: white;
			}
			.card-title{
			background-color:#42a5f5;
			padding:5px;
			}
			.card-content{
			width:auto;
			padding: 24px;
			}
			.card-link{
			width:auto;
			padding: 2px;
			}
			#notes-nav{
			width: 300px;
			top: 65px;
			}
			}
		</style>
		<title>Omega</title>
	</head>
	<body>
		<!-- Heading Strip-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img data-target="menu-nav" class="sidenav-trigger" src="../images/icons/72.png" style="height:95%; cursor: pointer;" />
					<a href="" class="brand-logo">Omega</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li>
							<a href="../student/index.php" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Dashboard"><i class="tiny material-icons icon-white">dashboard</i></a>
							<?php echo '<a href="../teacher/?eml='.$userrow["eml"].'" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Dashboard"><i class="tiny material-icons icon-white">dashboard</i></a>'; ?>
						</li>
						<li>
							<a class="btn-flat tooltipped" data-position="bottom" data-tooltip="Notes"><i data-target="notes-nav" class="tiny material-icons icon-white sidenav-trigger">library_books</i></a>
						</li>
						<li>
							<a class="btn-flat tooltipped modal-trigger" href="#announceModal" data-position="bottom" data-tooltip="Announcements" ><i class="tiny material-icons icon-white">announcements</i></a>
						</li>

						
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<!--Progrss Bar-->
			<div class="container" id="progressBar">
				<img src="../images/icons/512.png" class="center2" />
				<div class="progress center">
					<div class="indeterminate" style="margin-right: auto; margin-left: auto; width: 250px;"></div>
				</div>
			</div>
			<!--Contents-->
			<div id="pageContents" style="display:block;">
			<img src="../images/icons/512.png" class="center2" />
			<!-- Sliding Navigation Bars -->
			<ul id="menu-nav" class="sidenav">
				<li>
					<div class="user-view">
						<div class="background">
							<img src="../images/list.jpg">
						</div>
						<a href="#user"><img class="circle" src="../images/icons/72.png"></a>
						<a href="#name"><span class="white-text name">Nikhil Sujith</span></a>
						<a href="#email"><span class="white-text email">nik98hil@gmail.com</span></a>
				<img src="../images/icons/512.png" class="center2" />

<!-- Sliding Navigation Bars -->
  <ul id="menu-nav" class="sidenav">
    	<li>
    		<div class="user-view">
      			<div class="background">
        			<img src="../images/list.jpg">
      			</div>
      		<a ><img id="snDP" class="circle" src="../images/icons/72.png"></a>
      		<a ><span id="snName" class="white-text name">Student Name</span></a>
    		<a ><span id="snID" class="white-text email">Student ID</span></a>
    		</div>
    	</li>
    	<li><a href="#!" onclick="showClassmates();"><i class="material-icons">group</i>Classmates</a></li>
    	<li><div class="divider"></div></li>
    	<li><a class="subheader">Account</a></li>
    	<li><a class="waves-effect" href="https://omegaclassrooms.ga/"><i class="material-icons">close</i>Sign Out</a></li>
  </ul>

  <!--Notes Side Navigation Bar-->
   <ul id="notes-nav" class="sidenav">
   	<div>
   		<table>
    	<?php include 'pullNotes.php'?>;
    	</table>
	</div>
  </ul>
  <!-- end Note Side Nav Bar-->

 <div class="row">
<!-- Card 1-->
    <div class="col s12 m4">
      <div class="card blue-grey darken-1">
        <div class="card-title white-text">
          Assignment 1
        </div>
        <div class="card-content blue-grey darken-2 white-text">
        	<p>THE QUESTION HERE</p>
        	<a class="waves-effect waves-light btn right modal-trigger" href="#modal2"><i class="material-icons right">send</i>Submit</a>
        </div>
      </div>
    </div>
 <!-- End of Card  -->

 <!-- Card 1-->
    <div class="col s12 m4">
      <div class="card blue-grey darken-1">
        <div class="card-title white-text">
          Assignment 1
        </div>
        <div class="card-content blue-grey darken-2 white-text">
        	<p>THE QUESTION HERE</p>
        	<a class="waves-effect waves-light btn right modal-trigger" href="#modal2"><i class="material-icons right">send</i>Submit</a>
        </div>
      </div>
    </div>
 <!-- End of Card  -->

 <!-- Card 1-->
    <div class="col s12 m4">
      <div class="card blue-grey darken-1">
        <div class="card-title white-text">
          Assignment 1
        </div>
        <div class="card-content blue-grey darken-2 white-text">
        	<p>THE QUESTION HERE</p>
        	<a class="waves-effect waves-light btn right modal-trigger" href="#modal2"><i class="material-icons right">send</i>Submit</a>
        </div>
      </div>
    </div>
 <!-- End of Card  -->
	</div>

	<!-- Join New Class Modal -->
  <div id="modal1" class="modal">
    <div class="modal-content">
    	<img src="../images/icons/192.png" class="center2"/>
      <h5>Join New Class</h5>
       <div class="input-field col s6">
          <input placeholder="Enter Class Code Here" id="first_name" type="text" class="validate">
        </div>
    </div>
    <div class="modal-footer">
      <button id="joinNewClassButton" href="#" onclick="plsrefresh()" class="modal-close waves-effect waves-green btn-flat">Submit</button>
    </div>
  </div>

<!-- Announcement modal -->
  <div id="announceModal" class="modal">
    <div class="modal-content">
    	<img src="../images/icons/192.png" class="center2"/>
      <h4>Announcements</h4>
      <table>
      	<?php include 'pullFromDb.php';?>
  </table>
    </div>
    <div class="modal-footer">
      <a  class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  <!-- end of announcement modal-->

   
  <!-- Upload assignmet Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
    	<img src="../images/icons/192.png" class="center2"/>
      <h5>Upload Assignment</h5>
      <br>
	    <form action="#">
	    	<div class="file-field input-field">
	      		<div class="btn">
	        		<span><i class="material-icons">attach_file</i></span>
	       			 <input type="file">
	      		</div>
	      		<div class="file-path-wrapper">
	        	<input class="file-path validate" type="text" placeholder="Attach File">
	      		</div>
	    	</div>
	  	</form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
    </div>
  </div>

</main>
			<!--Footer-->
			<footer class="page-footer" style="padding-top:0px;">
				<div class="footer-copyright">
					<div class="container" id="footerText">
						<a href="#" target="_blank" title="OMEGA" style="color:#FFFFFF">&emsp;Omega&emsp;</a>
					</div>
				</li>
				<li><a class=" modal-trigger" href="#modal1"><i class="material-icons">school</i>Join New Class</a></li>
				<li><a href="#!" onclick="showClassmates();"><i class="material-icons">group</i>Classmates</a></li>
				<li>
					<div class="divider"></div>
				</li>
				<li><a class="subheader">Account</a></li>
				<li><a class="waves-effect" href="#!"><i class="material-icons">close</i>Sign Out</a></li>
			</ul>
			<!--Notes Side Navigation Bar-->
			<ul id="notes-nav" class="sidenav">
				<div>
					<table>
						<?php include 'pullNotes.php'?>;
					</table>
				</div>
			</ul>
			<!-- end Note Side Nav Bar-->
			<div class="row" id="assignmentsContainer">
				<!-- Cards go here-->
			</div>
			<!-- Join New Class Modal -->
			<div id="modal1" class="modal">
				<div class="modal-content">
					<img src="../images/icons/192.png" class="center2"/>
					<h5>Join New Class</h5>
					<div class="input-field col s6">
						<input placeholder="Enter Class Code Here" id="first_name" type="text" class="validate">
					</div>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
				</div>
			</div>
			<!-- Announcement modal -->
			<div id="announceModal" class="modal">
				<div class="modal-content">
					<img src="../images/icons/192.png" class="center2"/>
					<h4>Announcements</h4>
					<table>
						<?php include 'pullFromDb.php';?>
					</table>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
				</div>
			</div>
			<!-- end of announcement modal-->
			<!-- Upload assignmet Modal Structure -->
			<div id="modal2" class="modal">
				<div class="modal-content">
					<img src="../images/icons/192.png" class="center2"/>
					<h5>Upload Assignment</h5>
					<br>
					<form action="#">
						<div class="file-field input-field">
							<div class="btn">
								<span><i class="material-icons">attach_file</i></span>
								<input type="file">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Attach File">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
				</div>
			</div>
		</main>
		<!--Footer-->
		<footer class="page-footer" style="padding-top:0px;">
			<div class="footer-copyright">
				<div class="container" id="footerText">
					<a href="#" target="_blank" title="OMEGA" style="color:#FFFFFF">&emsp;Omega&emsp;</a>
				</div>
			</div>
		</footer>
		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
		<!-- Slide Navigation Bar JS-->
		<script>
			document.addEventListener('DOMContentLoaded', function() {
			  var elems = document.querySelectorAll('.sidenav');
			  var instances = M.Sidenav.init(elems, 'edge');
				});
		</script>
		<!-- Modal JS-->
		<script>
			document.addEventListener('DOMContentLoaded', function() {
			   var elems = document.querySelectorAll('.modal');
			   var instances = M.Modal.init(elems, 'noScrolling');
			 });
		</script>
		<script>
			// Get rid of the loader after three seconds
			setTimeout(function(){
				document.getElementById("progressBar").style.display="none";
				document.getElementById("pageContents").style.display="block";
				},0);
		</script>
		<!--Button tooltips JS-->
		<script>
			document.addEventListener('DOMContentLoaded', function() {
			    var elems = document.querySelectorAll('.tooltipped');
			    var instances = M.Tooltip.init(elems);
			  });
		</script>
		<script type="text/javascript" src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script><!--Not loading asynchronously as the following script is dependant on this-->
		<script type="text/javascript">
			// Initialize Firebase
			var config = {
			  apiKey: "AIzaSyA5deESjwYhl6_zs2seCmwTMNtx3OFLodM",
			  authDomain: "omegaclassrooms.firebaseapp.com",
			  databaseURL: "https://omegaclassrooms.firebaseio.com",
			  projectId: "omegaclassrooms",
			  storageBucket: "omegaclassrooms.appspot.com",
			  messagingSenderId: "230656441501"
			};
			firebase.initializeApp(config);

			window.onload = function(){
				for(var b=0; b<assignmentTopicArray.length; b++)
					document.getElementById("assignmentsContainer").innerHTML += '<div class="col s12 m4"><div class="card blue-grey darken-1"><div class="card-title white-text">'+assignmentTopicArray[b]+'</div><div class="card-content blue-grey darken-2 white-text"><p>'+assignmentDescriptionArray[b]+'</p><a class="waves-effect waves-light btn right modal-trigger" href="#modal2"><i class="material-icons right">send</i>Submit</a></div></div></div>';
			}
			</footer>

			<!--JavaScript at end of body for optimized loading-->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
			
			<!-- Slide Navigation Bar JS-->
			<script>
				 document.addEventListener('DOMContentLoaded', function() {
			    var elems = document.querySelectorAll('.sidenav');
			    var instances = M.Sidenav.init(elems, 'edge');
  				});
			</script>

			<script>
				//put user details in the side nav
				document.getElementById("snDP").src = userDetail[0];
				document.getElementById("snName").innerHTML = userDetail[1];
				document.getElementById("snID").innerHTML = userDetail[2];
			</script>

			<!-- Modal JS-->
			<script>
				 document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.modal');
				    var instances = M.Modal.init(elems, 'noScrolling');
				  });
				</script>

			<script>
				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					},0);
			</script>

			<!--Button tooltips JS-->
			<script>
				document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.tooltipped');
				    var instances = M.Tooltip.init(elems);
				  });
			</script>

			<script>
				function plsrefresh(){
				alert("Please refresh the page again to view your newly joined class");
			}
			</script>

		</script>
		</main>
	</body>
</html>
